## Nginx as a reverse Proxy

Nginx will be use as a Reverse proxy for the cohort project on patch-1 this will redirect traffic and request to the backend tools and utility on its Servers

![download](https://user-images.githubusercontent.com/71280190/231908315-e54a6893-070e-4593-9f5b-b99d2910bf3a.png)

# About Nginx: 
Nginx (pronounced "engine X") is a popular open-source web server software that is used for serving web pages to clients. It can also be used as a reverse proxy, load balancer, and HTTP cache. Nginx is known for its high performance, stability, and low resource usage, and it has become a popular choice for serving web content on the internet. It can be used on Unix, Linux, and Windows platforms, and it supports many protocols including HTTP, HTTPS, SMTP, POP3, and IMAP. Nginx is also commonly used in conjunction with other web technologies such as PHP, Node.js, and Ruby on Rails just to name a few. 

# Steps on Installing Nginx on Windows -OS

1. Download the latest version of Nginx for Windows from the official website: https://nginx.org/en/download.html (A- Stable version at the time of writing should be 	nginx/Windows-1.24.0) 

2. Extract the contents of the downloaded zip file to a directory of your choice (e.g. C:\nginx)

3. Navigate to the directory where you extracted Nginx and run the "nginx.exe" executable to start the server (e.g. C:\>cd nginx-1.24.0 )or using the file Explorer and double click on the application (if : Windows protected your PC displays click on more info and click on run anyways.)

4. To Confirm that Nginx is running o your command-promt: run tasklist; nginx.exe should be on the list of running processes.

5. By default, Nginx listens on port 80. You can test that Nginx is working by opening a web browser and navigating to http://localhost/ You should see the default Nginx welcome page.

6. To stop Nginx, open a command prompt window and navigate to the directory where you extracted Nginx. Run the command "nginx.exe -s stop" to stop the server.

The Above steps has been tested on Windows 10pro
visit http://nginx.org/en/docs/windows.html for more info.

# Steps on Installing Nginx on Linux -OS(unix-like)

1. Open a terminal on your Linux machine.(Ctrl+T for Debian-like-distro).

2. Update the package index by running the command: sudo apt update

3. Install Nginx by running the command: sudo apt install nginx

4. Once Nginx is installed, start the service by running the command: sudo systemctl start nginx

5. To verify that Nginx is running, open a web browser and enter the URL http://localhost in the address bar. If Nginx is installed correctly, you should see the Nginx default welcome page.


##NEXT Configuring Nginx
This section will be carried out when the servers file have been written and tested by the cohorts backend team
the server for the web will be listening on port:3000(php) and that of mobile port:5500(python)


Docs by Dumka Bipnelo © 2023.





