<?php


include "inc.php";

$branch_name = $_POST['name'];
$vehicle  = $_POST['vehicle'];
$city = $_POST['city'];


$query = "SELECT * from branch where branch_name = '$branch_name' and city_id = '$city'";
//echo "$query<br>";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
	$exist = $row['branch_name'];
}

if ($exist != null)
{
	echo "That branch is already in the system!";
}
else
{
	$query = "insert into branch (branch_name, city_id, branch_vehicle_count)values ('$branch_name', '$city', '$vehicle');";
	//echo "$query<br>";
        $result =  mysql_query($query);
	//echo "Branch is added to the system!";
        header("location:admin_branch_form.php");
}
?>