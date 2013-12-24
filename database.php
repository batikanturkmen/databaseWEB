<?php

$databaseConfig = Array(
        "db" => "cargo12345",
        "server" => "cargo12345.db.9620061.hostedresource.com",
        "user" => "cargo12345",
        "pass" => "Cargo123!"
        );

$mysql = mysql_connect($databaseConfig["server"],$databaseConfig["user"],$databaseConfig["pass"]) or die("DB CONNECTION ERROR.");
mysql_select_db($databaseConfig["db"], $mysql) or die("SELECT DATABASE ERROR.") or die(mysql_error());

$tbl_name="customer";
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
if(! $result )
{
 die('Could not get data for accounts: ' . mysql_error());
}


while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
 //$_SESSION['usrID']= $row['cid'];
 echo "<br>";
 echo "-" . $row['customer_id'] . "<br>";
 echo "-" . $row['customer_name'] . "<br>";
 echo "-" . $row['customer_surname'] . "<br>";
 echo "-" . $row['customer_email'] . "<br>";
 echo "<br>";
 
} 
