<?php  
if (isset($_POST['fname']) && isset($_POST['femail'])  && isset($_POST['fphone']) && isset($_POST['faddress']) && isset($_POST['req']) ) 
{
	include 'rec_db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['fname']);
	$email = validate($_POST['femail']);
    $phone = validate($_POST['fphone']);
    $address = validate($_POST['faddress']);
    $donate = validate($_POST['req']);

if(empty($name) || empty($email)  || empty($phone) || empty($address) || empty($requirements)) 
	{
		header('location:index1.php?msg=data failed ');
	}
	else 
	{
		$sql = "INSERT INTO requestor( Name, Email, Address, Phone, Requirements ) VALUES('$name', '$email',  '$address','$phone', '$requirements')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
		header('location:index1.php?msg=data added successfully');
		
		}
		else 
		{
		header('location:index1.php?msg=data failed ');

		}
	}
}
else 
		{
		header('location:index1.php?msg=data failed ');

		}
?>