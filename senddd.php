 <?php
include("bootstrap.php");
?>
 <html>
  <body>

 <div class="container" style = "width:60%">
      <div class="header" style = "float:right; width: 60%;">
        <ul class="nav nav-pills pull-left">

      <form method="POST" action = "cust_register_action.php" class="form-signin">
        <h2 class="form-signin-heading">Send Cargo</h2>
        <input type="text" class="form-control" placeholder="From" name = 'email' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="To" name = 'name' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Address" name = 'surname'required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Dimantions" name = 'phone'required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Weight" name = 'landline' autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Coupon Code" name = 'cupon' autofocus>
        <br>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>    
      </form>
    </div> 
        </div>
  </body>
</html>