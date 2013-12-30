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

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/cargo1.jpeg" alt="Resim Bilgisi">
      <div class="caption">
        <h3>Hebelek Discount</h3>
        <p>Buraya Hep Kampanya Aciklamalri gelecek</p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/cargo2.jpg" alt="Resim Bilgisi">
      <div class="caption">
        <h3>Special %50 discount for presentation</h3>
        <p>Buraya Hep Kampanya Aciklamalri gelecek</p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/cargo3.jpg" alt="Resim Bilgisi">
      <div class="caption">
        <h3>30% Discount for Bilkenters</h3>
        <p>If your a current Bilkent Alumini ......</p>
      </div>
    </div>
  </div>
</div>