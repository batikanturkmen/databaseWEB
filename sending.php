<?php require_once "inc.php"; 
include("bootstrap.php");


if(!$mysql)
{
  die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM from_to_branch as FTB, cargo as C WHERE FTB.cargo_id = C.cargo_id';

$retval = mysql_query( $sql, $mysql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>

<body>  

  <div id = "container" style = "float:right; width:80%">
                    <div id ="left" style = "float:left; width: 80%;">
<table class="table table-striped span12">  
        <thead>  
          <tr>  
            <th>RECIVER</th>  
            <th>ADRESS</th>  
            <th>PRICE</th>  
            <th>STATUS</th>
            <th>DELETE</th>
          </tr>  
        </thead>
        <tbody>  

 <?php
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

  echo "<tr>";
  echo "<td>" . $row['cargo_id'] . "</td>";
  echo "<td>" . $row['route_id'] . "</td>";
  echo "<td>" . $row['cargo_final_price'] . "</td>";
  echo "<td>" . $row['cargo_status'] . "</td>";
  echo "<td>";
 ?>        
        <form id="delete" method="post" action="delete.php" >
        <input type="hidden" name="delete_rec_id" value="<?php print $row['cargo_id']; ?>"/> 
        <input type="submit" name="delete" value="Delete Account" class="btn btn-default btn-sm"/>    

        </form>             
 <?php   
 echo "</td>";
 echo "</tr>";
} 
echo "</tbody>";
echo "</table>";
echo "</body>";
echo "</div>";
echo "</div>";
?>