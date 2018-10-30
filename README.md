# restbaby
# An example, minimal REST API

## Explanation

This is a template to rapidly implement a simple rest interface with two
files.

api.php contains the rest interface itself

data.php contains whatever functionality is required, in this example, a Fibonacci number is returned

This template should make quick work of returning a result for a single input. For multiple inputs, it will start to require more work, and a fancier solution may be desirable.

## Unit Test Code

The test.php module is a copy of api.php with the input hardwired. In this case, the input is 9 and the result should be 34. More involved tests can be easily constructed by adding code to iterate through various values.

Run the test module as follows:

hughbuntu$ php test.php

## Deploy

Set up an Apache 2 server with php installed. This was developed and tested on an Apache 2.4 server with php 5. O/S distro Xubuntu v. 16.04. All installed with apt-get. In my installation, the server IP address is 192.168.77.72, used in the examples below.

I placed the files in /var/www/html/rest/api under the default /var/www/html

Installation on Red Hattish systems would involve the "httpd" layout, and installation with yum.

## Test

This simple implementation uses "$\_REQUEST" to receive input, and therefore testing can be done with input via the URL.

I used the Firefox browser, which can display and nicely format JSON responses.

Example URL: http://192.168.77.72/rest/api/api.php?fib=2

![image of JSON GETvresponse rendered on Firefox](https://github.com/hughbuntu/restbaby/blob/master/json_result_firefox.png "Display JSON GET Response on Firefox")

The popular "Postman" tool can also be used to test using POST. With 'multiview' enabled on the Apache2 server, the URL could be:

Example URL: http://192.168.77.72/rest/api/api

Without multiview enabled, the ".php" suffix would be required.

![image of JSON POST response rendered on "Postman"](https://github.com/hughbuntu/restbaby/blob/master/json_result.png "Display JSON POST Response on Postman")
