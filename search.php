<?php
include "inc.php";
include("bootstrap.php");
$search = $_POST["search_query"];

?>

<body>  

  <div id = "container" style = "float:right; width:90%">
                    <div id ="left" style = "float:left; width: 90%;">
<table class="table table-striped span12">  
        <thead>  
          <tr>  
            <th>NAME</th>  
            <th>E-MAIL</th>  
            <th>PASSWORD</th>
            <th>PERMISSION</th>            
            <th>CHANGE</th>
            <th>DELETE</th>
          </tr>  
        </thead>
        <tbody>  

<?php

$query = "select * from staff 
    WHERE 
    staff_name LIKE '%$search%' OR
    staff_surname LIKE '%$search%' OR 
    staff_email LIKE '%$search%' OR
    staff_id LIKE '%$search%'
    ORDER BY staff_auth_level DESC";
$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$name = $row['staff_name'];
	$surname = $row['staff_surname'];
	$email = $row['staff_email'];
	$pass = $row ['staff_password'];
	$staff_ID	= $row['staff_id'];
	$authLevel =$row['staff_auth_level'];
	
	$ID = $row['staff_id'];
	
	if ( $authLevel == 5)
	{
		$_SESSION['auth'] = "Admin";
		$auth = "Admin";
	}
	else
	{
		$_SESSION['auth'] = "Staff";
		$auth = "Staff";
	}
	
	echo "<tr>
			<td>$name $surname</td>
			<td>$email</td>
			<td>$pass</td>
			<td>$auth</td>";
	echo "<td><a href=admin_user_change_form.php?auth=$auth&ID=$ID>Change</a></td>";
        echo "<td><a href=admin_user_change_action.php?auth=$auth&ID=$ID&delete=1>Delete</a></td></tr>";
	
}

$query = "select * from customer
    WHERE 
    customer_name LIKE '%$search%' OR
    customer_surname LIKE '%$search%' OR 
    customer_email LIKE '%$search%' OR
    customer_id LIKE '%$search%'";
$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$name = $row['customer_name'];
	$surname = $row['customer_surname'];
	$email = $row['customer_email'];
	$pass = $row ['customer_password'];
	$ID = $row['customer_id'];
	$auth = "Customer";
	
	echo "<tr>
			<td>$name $surname</td>
			<td>$email</td>
			<td>$pass</td>
			<td>$auth</td>";
	echo "<td><a href=admin_user_change_form.php?auth=$auth&ID=$ID>Change</a></td>";
        echo "<td><a href=admin_user_change_action.php?auth=$auth&ID=$ID&delete=1>Delete</a></td></tr>";
}

?>