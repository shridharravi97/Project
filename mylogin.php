<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<title>Login</title>
	<style type="">
		.top{
			margin-top: 20px;
		}
		.left{

		}
		.mar{
			margin-border:groove;
		}
        .spac{
        	margin: 0;
            margin-top: 5px;
            background-color:

        }
        body{
        	height: 100%;
        	
        background-image: url("p1.jpeg");
       /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */

    background-repeat: no-repeat;
    background-size: cover;
    /*background-color: #168DF6*/


        }
        .big{
            font-size: 

        }
        .white{
            background-color: white; 
            }
        .a{
            width: 10em;
            }       
        .l{
            width:15%

        }
        .link{
            background-color: white;

        }
        .bor{
            margin: solid black;
            border: solid black;
            height: 350px;
            width: 400px;
            margin-top: 160px;
            background-color:#DADDDF;
            border-radius: 40px 40px 40px 40px;
        }
        .for{
            margin-top: 5px;

        }
        .head1{
            margin-left: 5px;
            font-size: 2em;
        }
        .p1{
            margin-left: 950px;
            margin-right: 20px;
            font-size: 1.5em;
        }
        .p2{
            margin-right: 20px;
            font-size: 1.5em;
        }
        /* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
    display: none;
}
	</style>
</head>
<body>
<font face="Indie Flower">
<!--<div class="navbar-header"><a href=""><span class="head1">MaNoticeBoard</span></a><a href=""><span class="p1">page1</span></a><a href=""><span class="p2">page2</span></a><a href=""><span class="p2">page3</span></a><a href=""> <span class="p2">Page4</span></a></div>
<hr color="black">-->
<div class="topnav" id="myTopnav">
   <a href="#">StudentSpace</a>
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<center>
<div class="bor">
<div class="mar container">
<h2 class="top" class="big">Log in</h2><br>
<form action="" method="POST">
<input type="text" name="email" required placeholder="Enter your email" class="big" width="80"><br><br>
<input type="text" name="pass" placeholder="Enter your password" class="big"><br><br>
<input type="submit" name="login" value="Login" class="btn-primary a btn-round">
<center><hr class="l" color="black"></center><font color="white">
<button class="btn-success" type="submit">Create a new account</button></font><a href=""><div class="for">Forgot password?</div></a></div>
</form>
<span><?php echo $error; ?></span>
</div> 
</center>
</font>
</body>
</html>