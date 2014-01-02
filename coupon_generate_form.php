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


<?php
include "inc.php";
include("bootstrap.php");
?>
<body>  

  <div id = "container" style = "float:left; width:40%">
                    <div id ="left" style = "float:left; width: 40%;">
<table class="table table-striped span12">  
        <thead>  
          <tr>  
            <th>COUPON CODE</th>  
            <th>PERCENT</th>  
            <th>STATUS</th>
            <th>CHANGE</th>
          </tr>  
        </thead>
        <tbody> 

<?php
$query = "select * from coupon";
$result=  mysql_query($query);
while ($row = mysql_fetch_array($result)){
	$code = $row['coupon_code'];
	$percent = $row['coupon_factor'];
	$statusNum = $row['coupon_status'];
		
	if($statusNum == 1)
	{
		$status = "used";
	}
	else
	{
		$status = "in use";
	}
	
	echo "<tr>
			<td>$code</td>
			<td>$percent</td>
			<td>$status</td>";
	echo "<td><a href=coupon_change_form.php?code=$code>Change</a></td></tr>";
}

echo "<h4>NEW COUPON<br></h4>";
echo "<form action='coupon_generate_action.php' method='POST'>";

echo "Percent: <input type='text' name='percent'>";

echo "<input type='submit' value='Generate'><br>";


?>