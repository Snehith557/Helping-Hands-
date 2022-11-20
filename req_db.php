<?php

    include 'rec_db_conn.php';
	$name = $_POST['fname'];
	$email =$_POST['femail'];
    $phone = $_POST['f1'];
    $address = $_POST['faddress'];
    $requirements = $_POST['description'];
    
	if(empty($name) || empty($email)  || empty($phone) || empty($address) || empty($requirements)) 
	{
		header('location:request.php?msg=data failed ');
	}
	else 
	{
		
	

		$sql = "INSERT INTO requestor( Name, Email, Phone, Address, Requirements ) VALUES('$name', '$email', '$phone', '$address', '$requirements')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			
		header('location:reqDet.php');
		
		}
		else 
		{
		header('location:request.php?msg=data failed ');

		}
	}

?>

    
