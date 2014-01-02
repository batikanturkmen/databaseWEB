<?php
session_start();
require_once 'database.php';
include("bootstrap.php");


if ($_SESSION['login'])
        header("location:index.php");

if ($_POST){
        // $type = $_POST['type'];
        $username = $_POST['myLoginName'];
        $password = $_POST['myLoginPassword'];
        //echo 'Gelen Bilgiler->'.$username.' '.$password.'<br>';
        if (is_numeric($username)){
            // staff login
                //echo 'I am logging in like a stafff!!!<br>';
                $user =  mysql_query("SELECT * FROM staff where staff_id='".$username."' and staff_password='".$password."';", $mysql) or die(mysql_error());
                
                if(mysql_num_rows($user) < 1){
                    echo '<div class="alert alert-danger">';
                    echo "Wrong username or password";
                    echo "<br>";
                    echo '<a href="index.php" >Back</a>';
                        $error = 'Username or password is incorrect for staff.';
                        echo '</div>';
                } else {
                        // login successful
                        $_SESSION['login'] = true;
                        $_SESSION['staff'] = true;
                        $_SESSION['id'] = mysql_result($user, 0, 'staff_id');
                        $_SESSION['username'] = $username;
                        $_SESSION['level'] = mysql_result($user, 0, 'staff_auth_level');
                        $_SESSION['username'] = $username;
                        $_SESSION['type'] = 'staff';
                        header('Location: index.php');                        
                }
        } else {
            // customer login
                $user = mysql_query("SELECT * FROM customer where customer_email='".$username."' and customer_password='".$password."';", $mysql) or die(mysql_error());
                
                if(mysql_num_rows($user) < 1){
                    echo '<div class="alert alert-danger">';
                    echo "Wrong username or password";
                    echo "<br>";
                    echo '<a href="index.php" >Back</a>';
                        $error = 'Username or password is incorrect for customer.';
                        echo '</div>';
                } else {
                        // login successful
                        
                        $_SESSION['login'] = true;
                        $_SESSION['id'] = mysql_result($user, 0, 'customer_id');
                        $_SESSION['username'] = $username;
                        $_SESSION['level'] = 0;
                        $_SESSION['type'] = 'customer';
                        $_SESSION['email'] = $username;
                        
                        header('Location: index.php');
                }
        }
} 