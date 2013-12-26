<?php
require_once 'inc.php';
include_once 'bootstrap.php';
if (isset($_SESSION)) {
    if($_SESSION['type']=='staff'){
        echo "girdik mi";
            $username = $_SESSION['id'];
            $result =  mysql_query("SELECT staff_name, staff_surname FROM staff where staff_id='".$username."' ;", $mysql) or die(mysql_error());
    }  else {
            $username = $_SESSION['email'];
            $result =  mysql_query("SELECT customer_name, customer_surname FROM customer where customer_email='".$username."';", $mysql) or die(mysql_error());
    }   
}
else{
    echo "olmadı";
}
       
                
                    ?>
<div id = "container2" style = "width:100%">
    <div id = "middle2" style = "float:left; width: 50%;">
        <div class="alert alert-success">
            <?php
                                if(mysql_num_rows($result) < 1){
                                    echo $username.' or '.$password.' is incorrect for staff.';
                                } else {
                                    if($_SESSION['type']=='staff'){
                                        echo 'Welcome staff '.mysql_result($result, 0, 'staff_name').' '.mysql_result($result, 0, 'staff_surname'); 
                                    }  else {
                                        echo 'Welcome customer '.mysql_result($result, 0, 'customer_name').' '.mysql_result($result, 0, 'customer_surname'); 
                                    }
                                    
                                }

            ?>
        </div>
    </div>
</div>