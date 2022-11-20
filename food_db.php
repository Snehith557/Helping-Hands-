<?php

    include('phpqrcode/qrlib.php');
    include 'user_db_conn.php';

    $path = '/';
    $file = $path.uniqid().".png";

    $ecc = 'L';
    $pixel_Size = 10;
    $frame_Size = 10;
	
	$name = $_POST['fname'];
	$email =$_POST['femail'];
    $phone = $_POST['f1'];
    $address = $_POST['faddress'];
    $donate = $_POST['req'];
    
	if(empty($name) || empty($email)  || empty($phone) || empty($address) || empty($donate)) 
	{
		header('location:clothes.php?msg=data failed ');
	}
	else 
	{
		
	

		$sql = "INSERT INTO donor( Name, Email, Phone, Address, Donation ,donation_type) VALUES('$name', '$email', '$phone', '$address', '$donate','food')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
		header('location:thanku.html?msg=data added successfully');
		
		}
		else 
		{
		header('location:clothes.php?msg=data failed ');

		}
	}

?>

    
