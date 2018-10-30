<?php
# (c) 10/2018 Hugh Buntu  hugh@sogomail.com
# api.php - this is the entry point for requests
# Template for handling single value requests

header("Content-Type:application/json");
require "data.php";

$value = get_rest_req();
if(validate_rest_req($value)) {
	$result = process_rest_req($value);
	response(200,"Valid Result",$result);
	}
else	{
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
