<?php

function check_login($con)
{

	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		
		$query = "select * from users where user_id = '$id';";
        // $query1 = "SELECT * FROM USERS";
         //$data = mysqli_query($con,$query1);
         
		$result = mysqli_query($con,$query);
        //$total = mysqli_num_rows($data);
        //$res = mysqli_fetch_assoc($data);

        //echo $res['id']." " . $res['user_name']. " " . $res['password']. " " . $res['date'] ;
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	} 

	//redirect to login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}