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


echo ' <div class="container" style = "width:60%">';
echo ' <div class="header" style = "float:right; width: 60%;">';
echo '<ul class="nav nav-pills pull-left">';

echo "<form action='branch_cargo_confirm.php' method='POST'>";
echo "<h5>From City</h5> <select name='fromCity'>";
$query = "select * from city";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
    $name = $row['city_name'];
    $cityID= $row['city_id'];
    echo "<option value='$cityID'>$name</option>";
}
echo "</select><br>";


echo "<h5>To City</h5> <select name='toCity'>";
$query = "select * from city";
$result=  mysql_query($query);

while ($row = mysql_fetch_array($result)){
    $name = $row['city_name'];
    $cityID= $row['city_id'];
    echo "<option value='$cityID'>$name</option>";
}
echo "</select><br>";

?>


      <form method="POST" action = "branch_cargo_confirm.php" class="form-signin">
        <h2 class="form-signin-heading"></h2>
        <input type="text" class="form-control" placeholder="Address" name = 'address' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Receiver" name = 'receiver' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Length" name = 'length'required autofocus>
        <br>
                <input type="text" class="form-control" placeholder="Width" name = 'width'required autofocus>
        <br>
                <input type="text" class="form-control" placeholder="Height" name = 'height'required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Kilogram" name = 'kg'required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Coupon Code" name = 'coupon_code' autofocus>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>    
      </form>
    </div> 
        </div>
  </body>
</html>