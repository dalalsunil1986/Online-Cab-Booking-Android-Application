<?php
	//require('include/Config.php');

	$email=$_POST['email'];

	$tag=$_POST['dawgTag'];
	$con=mysqli_connect("localhost","id4173357_root","","id4173357_localhost");

	if (!$con) {
		$response=array(
			"status"=>"0",
			"data"=>"Error Connecting to Database!"
			);
		die(json_encode($response));
	}

		$updateUserLocationQuery="UPDATE driver SET dawg_tag='$tag' WHERE email='$email'";

		$result2=mysqli_query($con, $updateUserLocationQuery);

		if ($result2) {
				$response=array(
					"status"=>"1",
					"data"=>"Group created successfully"
					);
				die(json_encode($response));
		}
		else
		{
			$response=array(
				"status"=>"0",
				"data"=>"Could not join Group. . ."
				);
			die(json_encode($response));
		}
