<?php

include "inc.php";
include("bootstrap.php");
$ID = $_GET['ID'];
$auth= $_GET['auth'];

if( $auth == "Customer")
{
	$query = "SELECT * from customer where customer_id = '$ID'";
	$result=  mysql_query($query);
}
else
{
	$query = "SELECT * from staff where staff_id = '$ID'";
	$result=  mysql_query($query);
}	
echo	"<div id = 'container' style = 'float:left; width:25%'>
<form action='admin_user_change_action.php' method='POST'>";		
while ($row = mysql_fetch_array($result)){
        if($auth == "Customer"){
            $name = $row['customer_name'];
            $surname = $row['customer_surname'];
            $email = $row['customer_email'];
            $pass = $row ['customer_password'];
        }
        else{
            $name = $row['staff_name'];
            $surname = $row['staff_surname'];
            $email = $row['staff_email'];
            $pass = $row ['staff_password'];
        }
    echo "<div class=input-group'>
	Name: <input type='text' class='form-control' name='name' value = '$name'>
	Surname: <input type='text' class='form-control' name='surname' value = '$surname'> 
	Email: <input type='text' class='form-control' name='email' value = '$email'>
	Password: <input type='text' class='form-control' name='pass' value = '$pass'></div>";
        
        $_SESSION['ch_auth'] = $auth;
        $_SESSION['ch_id'] = $ID;
        $_SESSION['ch_change'] = 1;
        $_SESSION['delete'] = 0;
        
        echo '<button type="submit" class="btn btn-default navbar-btn">Submit</button><br>';
	
}
echo "</form></div>";
?>