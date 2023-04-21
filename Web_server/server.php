<?php
// server.php

$host = '127.0.0.1';
$port = 3000;
$workers = 4; // number of child processes to create

// create child processes
for ($i = 0; $i < $workers; $i++) {
    $pid = pcntl_fork();
    if ($pid == -1) {
        die('Could not fork');
    } elseif ($pid) {
        // parent process
        continue;
    } else {
        // child process
        $socket = stream_socket_server("tcp://$host:$port", $errno, $errstr);
        if (!$socket) {
            die("$errstr ($errno)");
        }
        echo "Listening on http://$host:$port\n";
        while (true) {
            $client = stream_socket_accept($socket, -1);
            if ($client) {
                handle_request($client);
                fclose($client);
            }
        }
        exit();
    }
}

// parent process
while (pcntl_waitpid(0, $status) != -1) {
    $status = pcntl_wexitstatus($status);
    echo "Child process $status exited\n";
}

function handle_request($client) {
    $request = '';
    while (($line = fgets($client)) !== false) {
        if ($line == "\r\n") {
            break;
        }
        $request .= $line;
    }
    $response = "HTTP/1.1 200 OK\r\nContent-Type: text/plain\r\n\r\nHello, world!\n";
    fwrite($client, $response);
}
