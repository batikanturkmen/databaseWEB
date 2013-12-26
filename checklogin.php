<?php
session_start();
require_once 'database.php';

if ($_SESSION['login'])
        header("location:index.php");

if ($_POST){
        // $type = $_POST['type'];
        $username = $_POST['myLoginName'];
        $password = $_POST['myLoginPassword'];
        //echo 'Gelen Bilgiler->'.$username.' '.$password.'<br>';
        
        //if ($type == 'staff'){
                // staff login
                //echo 'I am logging in like a stafff!!!<br>';
                $user =  mysql_query("SELECT * FROM staff where staff_id='$username' and staff_password='$password';", $mysql) or die(mysql_error());
                
                if(mysql_num_rows($user) < 1){
                        $error = 'Username or password is incorrect for staff.';
                } else {
                        // login successful
                        $_SESSION['login'] = true;
                        $_SESSION['staff'] = true;
                        $_SESSION['id'] = mysql_result($user, 0, 'staff_id');
                        $_SESSION['username'] = $username;
                        $_SESSION['level'] = mysql_result($user, 0, 'staff_auth_level');
                        header('Location: index.php');                        
                }
                
        /*} else {
                // customer login
                echo 'I am logging in like a customerrr!!!';
                $user = mysql_query("SELECT * FROM customer where customer_email='$username' and customer_password='$password'", $mysql) or die(mysql_error());
                
                if(mysql_num_rows($user) < 1){
                        $error = 'Username or password is incorrect for customer.';
                } else {
                        // login successful
                        
                        $_SESSION['login'] = true;
                        $_SESSION['id'] = mysql_result($user, 0, 'customer_id');
                        $_SESSION['username'] = $username;
                        
                        header('Location: index.php');
                }
        }*/
} 