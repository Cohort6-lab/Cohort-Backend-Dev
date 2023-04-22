<?php
// server.php

// Setin the document root to the build directory
$SERVER['DOCUMENT_ROOT'] = __DIR_ . '/Cohort-Front-End-Dev/build';

// Serve the requested file if it exists, otherwise serve the index.html file
if (file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])) {
    return false;
} else {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/index.html');
}
?>
