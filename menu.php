<?php require_once "inc.php"; 
include("bootstrap.php");
 ?>

<? if(!$_SESSION['login']){ ?>
     <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Main</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="campaigns.php">Campaigns</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<? } ?>
<? if($_SESSION['login'] && $_SESSION['level'] == 3){ ?>
     <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Main</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="sendcargo.php">Send Cargo</a></li>
      <li><a href="comming.php">Coming Cargos</a></li>
      <li><a href="sending.php">Sending Cargos</a></li>
      <li><a href="logs.php">Logs</a></li>
      <li><a href="campaigns.php">Campaigns</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<? } ?>

<? if($_SESSION['login'] && $_SESSION['level'] == 5){ ?>
     <nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Main</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="user.php">Users</a></li>
      <li><a href="branch.php">Branchs</a></li>
      <li><a href="stats.php">Site Info</a></li>
      <li><a href="logs.php">Logs</a></li>
      <li><a href="coupon.php">Coupons</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>
<? } ?>