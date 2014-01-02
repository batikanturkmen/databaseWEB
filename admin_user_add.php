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
            <th>E-MAIL</th>  
            <th>PASSWORD</th>
            <th>PERMISSION</th>            
            <th>CHANGE</th>
            <th>DELETE</th>
          </tr>  
        </thead>
        <tbody>  

<?php

$query = "select * from staff ORDER BY staff_auth_level DESC";
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
        echo "<td><a href=admin_user_change_action.php?auth2=$auth&ID2=$ID&delete=1&type2=Staff>Delete</a></td></tr>";
	
}

$query = "select * from customer";
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
        echo "<td><a href=admin_user_change_action.php?auth2=$auth&ID2=$ID&delete=1&type2=Customer>Delete</a></td></tr>";
}
//***************************************************
?>

<h4>ADDING NEW USER<br></h4>
<form action='admin_user_add_action.php' method='GET'>


<div class="input-group">

  <input type="text" name='name' class="form-control" placeholder="Name" style="width:17%"> 
  <input type="text" name='surname' class="form-control" placeholder="Surname" style="width:17%"> 
  <input type="text" name='email' class="form-control" placeholder="E-Mail" style="width:17%"> 
  <input type="password" name='pass' class="form-control" placeholder="Password" style="width:17%"> 
  <input type="text" name='phone' class="form-control" placeholder="Telephone" style="width:17%"> &nbsp;

<select name='status'>
<option value='Customer'>Customer</option>
<option value='Admin'>Admin</option>
<option value='Branch'>Staff</option>

</select>
&nbsp;
<input type='submit' value='Add'><br>

</div>	


</form><br>
<h4>SEARCH<br></h4>
<form action='search.php' method='POST'>
<div class="input-group">
<input type="text" name='search_query' class="form-control" placeholder="Value" style="width:70%">
&nbsp;
<input type='submit' value='Search'><br>
</form><br>



