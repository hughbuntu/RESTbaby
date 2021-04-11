# RESTbaby
# An example, minimal REST API

## Explanation

This is an exercise, and to make it a practical use of time, I made it a template that can be reused. This is the single-file version for trival uses.

No unit test code is provided. See the "MultiFile" branch for that.

## Deploy

Set up an Apache 2 server with php installed. This was developed and tested on an Apache 2.4 server with php 5. O/S distro Xubuntu v. 16.04. All installed with apt-get. In my installation, the server IP address is 192.168.77.72, used in the examples below.

In short, the steps to install on a clean (X)ubuntu 16.04 instance are:

hughbuntu@egg:~$ cat /etc/os-release | grep PRETTY
PRETTY_NAME="Ubuntu 16.04.5 LTS"
apt-get install apache2
apache2ctl configtest
# Expect: Syntax OK
apt-get install curl
apt-get install php libapache2-mod-php php-mcrypt php-mysql
mkdir -p /var/www/html/rest/api

I placed the files in /var/www/html/rest/api under the default /var/www/html

Installation on Red Hattish systems would involve the "httpd" layout, and installation with yum.

## Test

This simple implementation uses "$\_REQUEST" to receive input, and therefore testing can be done with input via the URL (GET request).

I used the Firefox browser, which can display and nicely format JSON responses.

Example GET URL: http://192.168.77.72/rest/api/api.php?fib=2

![image of JSON GETvresponse rendered on Firefox](https://github.com/hughbuntu/restbaby/blob/master/json_result_firefox.png "Display JSON GET Response on Firefox")

The popular "Postman" tool can also be used to test using POST. With 'multiview' enabled on the Apache2 server, the URL could be:

Example URL: http://192.168.77.72/rest/api/api

Without multiview enabled, the ".php" suffix would be required.

![image of JSON POST response rendered on "Postman"](https://github.com/hughbuntu/restbaby/blob/master/json_result.png "Display JSON POST Response on Postman")
