 <?php
include("bootstrap.php");
?>
 <html>
  <body>

 <div class="container" style = "width:60%">
      <div class="header" style = "float:right; width: 60%;">
        <ul class="nav nav-pills pull-left">

      <form method="POST" action = "cust_register_action.php" class="form-signin">
        <h2 class="form-signin-heading">Please Register</h2>
        <input type="text" class="form-control" placeholder="E-Mail" name = 'email' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Name" name = 'name' required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Surname" name = 'surname'required autofocus>
        <br>
        <input type="password" class="form-control" placeholder="Password" name = 'pass' required>
        <br>
        <input type="password" class="form-control" placeholder="Confirm" name = 'passConfirm' required>
        <br>
        <input type="text" class="form-control" placeholder="Telephone" name = 'phone'required autofocus>
        <br>
        <input type="text" class="form-control" placeholder="Landline" name = 'landline' autofocus>
        <br>
        <input type='checkbox' name='confirm'>Confirm User Aggrement
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>    
      </form>
    </div> 
        </div>
  </body>
</html>