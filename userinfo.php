<?php
require_once 'inc.php';
include_once 'bootstrap.php';
//if(SESSION['type']=='staff')
//$type = $_POST['type'];
        $username = $_SESSION['id'];
$result =  mysql_query("SELECT staff_name, staff_surname FROM staff where staff_id='$username' ;", $mysql) or die(mysql_error());
                
                
                    ?>
<div id = "container2" style = "width:100%">
    <div id = "middle2" style = "float:left; width: 50%;">
        <div class="alert alert-success">
            <?php
                                if(mysql_num_rows($result) < 1){
                                    echo $username.' or '.$password.' is incorrect for staff.';
                                } else {
                                    echo 'Welcome '.mysql_result($result, 0, 'staff_name').' '.mysql_result($result, 0, 'staff_surname'); 
                                }

            ?>
            <a href="logout.php">Logout </a>
        </div>
    </div>
</div>