<?php
header("location:admin_user_add.php");
include "inc.php";
include("bootstrap.php");

$ID = $_SESSION['ch_id'];
$auth= $_SESSION['ch_auth'];
$change = $_SESSION['ch_change'];

$ID2 = $_GET['ID2'];
$auth2 = $_GET['type2'];
$delete = $_GET['delete'];


$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['pass'];

//echo "<br>$ID2, $auth2, $delete";

if ( $delete == 1)
{
    
	if( $auth2 == "Customer")
	{
		$query = "delete from sent where customer_id = '$ID2'";
                //echo $query.'\n';
		$result=  mysql_query($query);
		$query = "delete from lives_in where customer_id = '$ID2'";
		//echo $query.'\n';
                $result=  mysql_query($query);
		$query = "delete from phone_number where customer_id = '$ID2'";
		//echo $query.'\n';
                $result=  mysql_query($query);
		$query = "delete from customer where customer_id = '$ID2'";
		//echo $query.'\n';
                $result=  mysql_query($query);
	}
	else
	{
		$query = "delete from staff where staff_id = '$ID2'";
                //echo $query.'\n';
		$result=  mysql_query($query);
	}
	
	//echo "ID: $ID is deleted";
}

if($change == 1 )
{
	if( $auth == "Customer")
	{
		$query = "update customer set customer_name = '$name', customer_email= '$email', customer_surname = '$surname', 
				customer_password = '$pass' where customer_id = '$ID'";
		$result=  mysql_query($query);
	}
	else
	{
            
		$query = "update staff set staff_name = '$name', staff_email= '$email', staff_surname = '$surname', 
				staff_password = '$pass' where staff_id = '$ID';";
                //echo 'DoGru yere geldik <br>';
                //echo "$query";
		$result=  mysql_query($query);
                //echo "<br> $result";
	}
	//echo "ID: $ID is updated";
        $_SESSION['ch_change'] = 0;
}


?>