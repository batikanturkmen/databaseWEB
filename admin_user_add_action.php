<?php
include "inc.php";
include("bootstrap.php");

$email = $_GET['email'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$pass = $_GET['pass'];
$phone = $_GET['phone'];
$status = $_GET['status'];

$query = "SELECT customer_email from customer where customer_email = '$email'";
$result=  mysql_query($query);

$problem = false;

while ($row = mysql_fetch_array($result)){
	$emailInSystem = $row['customer_email'];
}

if ( $email == null || $name == null|| $surname == null || $pass == null || $status == null|| $phone == null )
{
	echo "fill empty blank";
	$problem = true;
} 

else if ( is_int($pass)  )
{
	echo "Password should include at least 1 character";
	$problem = true;
}
else if ( strlen($pass) < 6 )
{
	echo "length of password should be greater than 5";
	$problem = true;
}
else if ( $emailInSystem != null )
{
	echo "That email is already in the system";
	$problem = true;
}
else
{
	if ($status == "Customer")
	{
		$query1 = "insert into customer (customer_password, customer_name, customer_surname, customer_email) values ('$pass', '$name', '$surname', '$email');";
				
		$result1 =  mysql_query($query1);
		
		$lastID = mysql_insert_id();

		$query2 = "insert into phone_number (customer_id, phone_no)
		values ('$lastID', '$phone');";
		$result2=  mysql_query($query2);
	}
	else
	{
		if ($status == "Admin")
		{
			$query = "insert into staff (staff_password, staff_name, staff_surname, staff_email,  staff_phone, staff_auth_level)
				values ('$pass', '$name', '$surname', '$email','$phone', 5);";
				
			$result =  mysql_query($query);
		}
		else
		{
			$query = "insert into staff (staff_password, staff_name, staff_surname, staff_email ,staff_phone, staff_auth_level )
				values ('$pass', '$name', '$surname', '$email' , '$phone', 4);";
				
			$result =  mysql_query($query);
		}
	}
	
}

if( $problem)
{
	echo "<br>Error occurs, return registiration page";
}
else
{
	echo "Registiration is complete. You can go back <a href=admin_user_add.php>here</a>.'";
}



?>