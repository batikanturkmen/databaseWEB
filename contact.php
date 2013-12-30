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
<div id = "container" style = "width:90%">
<div class="alert alert-info" style = "float:right; width: 80%;">

<h5>You Get in Touch via <h4> support [at] bilkentcargo [dot] com</h4></h5>

</div>
</div>
