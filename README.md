# restbaby
An example, minimal API

Deploy

Set up an Apache 2 server with php installed. This was developed and tested on an Apache 2.4 server with php 5. O/S distro Xubuntu v. 16.04. All installed with apt-get. In my installation, the server IP address is 192.168.77.72, used in the examples below.

I placed the files in /var/www/html/rest/api under the default /var/www/html

Installation on Red Hattish systems would involve the "httpd" layout, and installation with yum.

Test

This simple implementation uses "$\_REQUEST" to receive input, and therefore testing can be done with input via the URL.

I used the Firefox browser, which can display and nicely format JSON responses.

Example URL: http://192.168.77.72/rest/api/api.php?fib=2

![image of JSON GETvresponse rendered on Firefox](https://github.com/hughbuntu/restbaby/json_result_firefox.png "Display JSON Response on Firefox")

The popular "Postman" tool can also be used to test using POST.

![image of JSON POST response rendered on "Postman"](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")
