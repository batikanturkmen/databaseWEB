<!DOCTYPE html> 
<?php include("bootstrap.php") ?>
<body>
	</style>
     <div class="container">
         
           <ul class="nav nav-pills pull-left">

          <form method="POST" action = "checklogin.php" class="form-signin">
            <table align="right">
        <tr>
            <td>
                <div>
                	<br>
            <input type="text" class="form-control" placeholder="Name" name = 'myLoginName'required autofocus>
            <input type="password" class="form-control" placeholder="Password" name = 'myLoginPassword' required>
            <br>
              </div>
            </td>
            <td>
                <div>
                	<button type="submit" class="btn btn-default navbar-btn">Sign in</button>
             </div>
            </td>

        </tr>
    </table>
   
        </form>
    </div> 
    <p align="center">
<a href="cust_register.php" >Register</a>
&nbsp
&nbsp
    <a href="resetpassword.php"> Forgot Password</a>
  </p>
  </body>