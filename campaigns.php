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
        <h3>Black Friday Discount</h3>
        <p>In black friday you can send your cargos with half price</p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/cargo2.jpg" alt="Resim Bilgisi">
      <div class="caption">
        <h3>Special 50% discount for presentation</h3>
        <p>For today you can send your cargo with half price</p>
      </div>
    </div>
  </div>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/cargo3.jpg" alt="Resim Bilgisi">
      <div class="caption">
        <h3>30% Discount for Bilkenters</h3>
        <p>If your a current Bilkent Alumini you can send cargo with 30% discountp>
      </div>
    </div>
  </div>
</div>