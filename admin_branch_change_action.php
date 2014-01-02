<?php
include "inc.php";
header("location:admin_branch_form.php");
$ID = $_SESSION['br_ch_id'];
    
$change = $_POST['change'];
$delete = $_GET['delete'];
$delID = $_GET['deleteID'];

$name = $_POST['name'];
$vehicle = $_POST['vehicle'];
$city = $_POST['city'];

if ( $delete == 1)
{
    
	$query = "delete from works_in where branch_id = '$delID'";
        echo "delete:$query<br>";
	$result=  mysql_query($query);
	
	$query = "delete from branch where branch_id = '$delID'";
        echo "delete:$query<br>";
        $result=  mysql_query($query);

	//echo "ID: $ID is deleted";
}
else
{
	$query = "update branch set branch_name = '$name', city_id= '$city', branch_vehicle_count = '$vehicle' where branch_id = '$ID'";
	echo "change:$query<br>";
        $result=  mysql_query($query);
	
	//echo "ID: $ID is updated";
}


?>