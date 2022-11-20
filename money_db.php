<?php

    include 'user_db_conn.php';
	$name = $_POST['fname'];
	$email =$_POST['femail'];
    $phone = $_POST['f1'];
    $address = $_POST['faddress'];
    $donate = $_POST['req'];
    
	if(empty($name) || empty($email)  || empty($phone) || empty($address) || empty($donate)) 
	{
		header('location:money.php?msg=data failed ');
	}
	else 
	{
		
	

		$sql = "INSERT INTO donor( Name, Email, Phone, Address, Donation,donation_type ) VALUES('$name', '$email', '$phone', '$address', '$donate','money')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			
		header('location:https://paytm.com/');
		
		}
		else 
		{
		header('location:money.php?msg=data failed ');

		}
	}

?>

    
