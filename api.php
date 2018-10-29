<?php
# (c) 10/2018 Hugh Buntu  hugh@sogomail.com
# This is the entry point for requests

header("Content-Type:application/json");
# require "data.php";  # this comes later; fib is trivial and fits here

# Support GET, PUT, POST, etc with $_REQUEST
if(!empty($_REQUEST['fib'])) {
	$fib_in=$_REQUEST['fib'];
	$fib = round(pow((sqrt(5)+1)/2, $n) / sqrt(5));

	if(empty($fib)) {
		response(200,"Mandatory Value Not Found",NULL);
		}
	else {
		response(200,"Fib result",$fib);
		}
	}
else {
	response(400,"Invalid Request",NULL);
	}

function response($status,$status_message,$data) {
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
	}
?>


