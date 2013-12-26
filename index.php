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

            <link rel="stylesheet" href="css/style.css"/>
            <script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="js/unslider.min.js"></script>

            <script type="text/javascript">
                    $('.banner').unslider({
                            speed: 500,               //  The speed to animate each slide (in milliseconds)
                            delay: 3000,              //  The delay between slide animations (in milliseconds)
                            complete: function() {},  //  A function that gets called after every slide animation
                            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
                            dots: true,               //  Display dot navigation
                            fluid: false              //  Support responsive design. May break non-responsive designs
                    });
            </script>
    </head>
    <body>
            <?php include("menu.php") ?>

            <style media="screen" type="text/css">
                .navbar-custom {
                    background-color:#229922;
                    color:#ffffff;
                    border-radius:0;
                }

                .navbar-custom .navbar-nav > li > a {
                    color:#fff;
                }
                .navbar-custom .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
                    color: #ffffff;
                    background-color:transparent;
                }
                .navbar-custom .navbar-brand {
                    color:#eeeeee;
                }
            </style>


            <div id = "container" style = "float:right; width:95%">
                    <div id ="left" style = "float:left; width: 55%;">

                            <!-- <div style="width:900px; margin:0 auto;"> -->


                            <br>
                            <div class="banner">
                                    <ul>
                                            <li style="background-image: url('images/Mount_Everest.jpg');">
                                                    <div>
                                                    <h1>Database CS353</h1>
                                                    <p>Cargo Company <br/>
                                                    Project</p>
                                                    </div>
                                            </li>

                                            <li style="background-image: url('images/Lumbini_Birthplace_of_Buddha.jpg');">
                                                    <div>
                                                    <h1>Hakan is the King</h1>
                                                    </div>
                                            </li>
                                    </ul>
                            </div>





                            <script type="text/javascript">
                                    if(window.chrome) {
                                            $('.banner li').css('background-size', '100% 100%');
                                    }

                                    $('.banner').unslider({
                                            fluid: true,
                                            dots: true,
                                            speed: 500
                                    });

                                    //  Find any element starting with a # in the URL
                                    //  And listen to any click events it fires
                                    $('a[href^="#"]').click(function() {
                                            //  Find the target element
                                            var target = $($(this).attr('href'));

                                            //  And get its position
                                            var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

                                            //  jQuery will return false if there's no element
                                            //  and your code will throw errors if it tries to do .offset().left;
                                            if(pos) {
                                                    //  Scroll the page
                                                    $('html, body').animate({
                                                            scrollTop: pos.top,
                                                            scrollLeft: pos.left
                                                    }, 3000);
                                            }

                                            //  Don't let them visit the url, we'll scroll you there
                                            return false;
                                    });			
                            </script>
                    </div>  
                    <div id = "middle" style = "float:right; width: 40%;">
                            <div id = "container" style = "float:left; width:85%">
                                    <?php include("test.php") ?>
                            </div>  
                    </div>
            </div>
    </body>
</html>
