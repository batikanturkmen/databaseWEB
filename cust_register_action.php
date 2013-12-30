<?php
require_once "inc.php"; 
include("bootstrap.php");

$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['pass'];
$passConfirm = $_POST['passConfirm'];
$phone = $_POST['phone'];
$landline = $_POST['landline'];
$confirm = $_POST['confirm'];

$query = "SELECT customer_email from customer where customer_email = '$email'";
$result=  mysql_query($query);

$problem = false;

while ($row = mysql_fetch_array($result)){
	$emailInSystem = $row['customer_email'];
}

if($confirm == null){
	echo "Please confirm aggrement!";
	$problem = true;
} 
else if ( $pass != $passConfirm )
{
	echo "Password confirmation is wrong check it again";
	$problem = true;
}
else if ( strlen($pass) < 6 )
{
	echo "length of password should include at 6 and password should include a character";
	$problem = true;
}
else if ( $emailInSystem != null )
{
	echo "Mail address used before";
	$problem = true;
}
else
{
	$query1 = "insert into customer (customer_password, customer_name, customer_surname,
			customer_email)
			values ('$pass', '$name', '$surname', '$email');";
	$result1 =  mysql_query($query1);
	
	$lastID = mysql_insert_id();
	$query2 = "insert into phone_number (customer_id, phone_no)
	values ('$lastID', '$phone');";
	$result2=  mysql_query($query2);
	
}

if( $problem)
{
	echo "<br> Error occurs, return registiration page <br>";
}
else
{
	echo "Registiration Success <br>";
}
?>