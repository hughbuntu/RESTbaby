<?php
# (c) 10/2018 High Buntu hugh@sogomail.com
# This is where data operations are performed
# Due to minimalistic approach, responses are
# handled here as well as in api.php.
# Code should go here instead of api.php.

# Get data from request interface

function get_rest_req() {
	$data = $_REQUEST['fib'];

	if(empty($data)) {
		response(200,"Mandatory Value Not Found",NULL);
		exit;
		}
	else {
		return($data);	
		}	
	}

# Validate Data Input
function validate_rest_req($value) {
	if($value < 0) {
		response(400,"Invalid Value",NULL);
		return(False);
		}
	else	{
		return(True);
		}
	}
	
# Process Request Data
function process_rest_req($value)
	{
	# Example is to return fibonacci result
	$result = round(pow((sqrt(5)+1)/2, $value) / sqrt(5));
	return($result);
	}

?>
