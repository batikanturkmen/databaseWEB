<?php require_once "inc.php"; 
include("bootstrap.php");
?>

<!DOCTYPE html> 

<html>
    <head>
            <title>Cargo Company Web</title>
            <div id = "container" style = "width:100%">
                    <?php include("logo.php") ?>

                    <div id = "middle" style = "float:right; width: 25%;">
                            <?php 
                                if(!$_SESSION['login']) 
                                    include("loginMain.php");
                                else{
                                    echo '<br>';
                                    include("userinfo.php");
                                }
                            ?>
                    </div>
            </div>


            <?php include("menu.php") ?>
<body>  
  <div id = "container" style = "float:right; width:90%">
                    <div id ="left" style = "float:left; width: 90%;">
<table class="table table-striped span12">  
        <thead>  
          <tr>  
            <th>NAME</th>  
            <th>VEHICLE COUNT</th>  
            <th>CITY</th> 
            <th>CHANGE</th>
            <th>DELETE</th>
          </tr>  
        </thead>
        </body>  

<?php
$query = "select * from branch natural join city ORDER BY city_name, branch_name";
$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$name = $row['branch_name'];
	$city_id = $row['city_id'];
	$vehicleNum = $row['branch_vehicle_count'];
	$branch_id = $row['branch_id'];
	
	$query1 = "select city_name from city where city_id = '$city_id'";
	$result1=  mysql_query($query1);
	while ($row1 = mysql_fetch_array($result1)){
		$city_name = $row1['city_name'];
	}
	echo "<tr>	<td>$name </td>
			<td>$vehicleNum</td>
			<td>$city_name</td>";
	echo "<td><a href=admin_branch_change_form.php?id=$branch_id&city_name=$city_name>Change</a></td>";
        echo "<td><a href=admin_branch_change_action.php?deleteID=$branch_id&delete=1>Delete</a></td></tr>";

	
}
?>

<h4>NEW BRANCH<br></h4>

<form action='admin_branch_add_action.php' method='GET'>

<div class="input-group">

  <input type="text" name='name' class="form-control" placeholder="Name" style="width:30%"> 
  <input type="text" name='vehicle' class="form-control" placeholder="Vehicle Count" style="width:30%">
  <select name='city'>


<?php
$query = "select * from city";
$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$name = $row['city_name'];
	$cityID= $row['city_id'];
	
	echo "<option value='$cityID'>$name</option>";
}

?>
  	</select>
<input type='submit' value='Add'><br>
</form>
</div>	
