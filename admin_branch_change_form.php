<?php
include "inc.php";
include("bootstrap.php");

$id = $_GET['id'];
$city_name = $_GET['city_name'];

$query = "SELECT * from branch where branch_id = '$id'";
$result=  mysql_query($query);

echo	"<form action='admin_branch_change_action.php' method='POST'>";		
while ($row = mysql_fetch_array($result)){
	$name = $row['branch_name'];
	$vehicle = $row['branch_vehicle_count'];

	echo "Name: <input type='text' name='name' value = '$name'>	";
	echo "Vehicle Count: <input type='text' name='vehicle' value = '$vehicle'> ";
	
	echo "City: <select name='city'>";
	//echo "<option>$city_name</option>";
	$query1 = "select * from city";
	$result1=  mysql_query($query1);
	
	while ($row1 = mysql_fetch_array($result1)){
		$name = $row1['city_name'];
		$cityID= $row1['city_id'];
		echo "<option value='$cityID'>$name</option>";
	}
        
	echo "</select>";
        
        $_SESSION['br_ch_id'] = $id;
        
        echo '<button type="submit" class="btn btn-default navbar-btn">Submit</button><br>';
	//echo "<a href=admin_branch_change_action.php?ID=$id&change=1>Change</a><br>	";
	
}
echo "</form>";
?>