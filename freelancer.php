<?php

session_start();
require 'connect.php';

$companyName = "Freelancers Community";

    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
?>



<!DOCTYPE html>
<html>
<head>
  <title>Freelancer's Community</title>
  <link rel="apple-touch-icon" sizes="180x180" href="icons\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons\favicon-16x16.png">
  <link rel="manifest" href="icons\site.webmanifest">
  <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel = "stylesheet" href="css/style_about.css">
  <link rel = "stylesheet" href="css\style.css">
  </head>
  <script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  </script>
  <body>
  <h1 style="margin-bottom:15px;margin-top:15px;">Freelancer's Community</h1>
  <div class="menu-bar" class="*">
  <ul>
  <li class='active'><a href="#">Home</a></li>
  <li><a href="contracts.php">Contracts</a></li>
  <li><div class="dropdown">
    <button class="dropbtn" style="font-size:18px;">About</button>
    <div class="dropdown-content">
      <a href="about.html">Website</a>
      <a href="team.html">Team</a>
    </div>
  </div></li>
  <li><a href="profile.php">Profile</a></li>
  <div class="search">
  <form action="#">
  <input type="text" placeholder=" Search Contracts" name="search">
  <button><i class="fa fa-search" style="font-size: 18px;"></i></button>
  <div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
      <h1 style="font-size: 27px; color:black;">Contact Us:</h1>
      <label for="fname" style="color:black; margin-left:15px;">Your email:</label><br>
      <input type="text" name="fname" value=" " style="margin-left:15px;"><br>
      <label for="fname" style="color:black; margin-left:15px;">Subject:</label><br>
      <input type="text" name="fname" value=" " style="margin-left:15px;"><br>
      <label for="fname" style="color:black; margin-left:15px;">Message:</label><br>
      <textarea rows="4" cols="28" style="margin-left:15px;"></textarea><br><br>
      <input type="submit" class="btn btn-success" value="Submit" style="margin-left:15px;">
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  </form>
  </div>
  </ul>
  </div>
  <a href="#" class="float">
  <i class="fa fa-phone my-float" class="open-button" onclick="openForm()"></i>
  </a>
  <div id="gap2" style="padding-top: 50px;">
    <div class="intro">
      <div class="logo">
        <img src="icons\android-chrome-192x192.png" alt="FreeLancer's Community">
      </div>
    <div class="quote">
  <h3 style="font-size: 32px; font-family: Times New Roman; color: #002965"><b>Freelancer's community is a platform for freelancing and crowdsourcing marketplace for projects and users all around the world</b></h3>
  </div></div>
  <hr>
  <div class="splitscreen">
  <div class="left">
  <div class="box arrow-right">
  <p style="font-size:19px;">Here you can be hired or can hire a freelancer. Create a profile and search to a variety of contract jobs waiting for you at your fingertips.</p>
  </div>
<?php
if(!isset($_SESSION['email']))
{
?>
<br>
<button type="button" class="button2"><a style="color:white; text-decoration:none;" href="signin.php">Sign In</a></button>
<button type="button" class="button2"><a style="color:white; text-decoration:none;" href="reg.php">Sign Up</a></button>
<?php
}
else {

?>
<br>
<button type="button" class="button2"><a id ="whi" href="logout.php">Sign Out</a></button>
<?php
}
?>
</div>
<div class ="right">
<image class="marg" src="images\image.png" alt="Image" height="450px" width="450px">
</div>
</div>
<p style="padding-top: 50px;">Just give us the details about the work you need completed, and our freelancers will get it done faster, better, and cheaper than you could possibly imagine. This includes:
</p>
</div>
<section class="hire_steps">
<div class="flex-hire_steps">
  <div>
    <img src="images\work.png" alt="FreeLancer's Community" width="200px">
    <p style="padding-top: 30px">Small jobs, large jobs, anything in between</p>
  </div>
  <div>
    <img src="images\clock.png" alt="FreeLancer's Community" width="100px">
    <p style="padding-top: 70px">Jobs that are on fixed price, or hourly terms</p>
  </div>
  <div>
    <img src="images\skills.png" alt="FreeLancer's Community" width="120px">
    <p style="padding-top: 45px">Work that requires specific skill sets, costs, or scheduling requirements</p>
  </div>
</section>

<div class="intro2" id ="gap2">
<div class="quote2" style="padding-top: 30px;">
  <p>Through our marketplace, employers can hire freelancers to do work in areas such as software development, writing, data entry and design right through to engineering, the sciences, sales and marketing, accounting and legal services. Or you can apply to be freelancer yourself and use your skills to complete projects of users and companies.</p>
</div>
<div class="world">
<img src="images\world.png" alt="FreeLancer's Community" width="400px">
</div>
</div>
<div class="jump" id="gap2">
<div class="learn">
<p style="font-size: 25px; padding-top:10px;">Learn how to:</p></div>
<div class="op">
<button type="button" class="btn btn-info" style="margin-right:50px; font-size: 25px"><a href="about.html#hire" id ="whi">Hire a Freelancer</a></button>
<button type="button" class="btn btn-info" style="font-size: 25px;"><a href="about.html#work" id ="whi">Work as a Freelancer</a></button>
</div></div>
</body>
</html>
<footer>
  <p>&copy;2020, FreeLancer's Community</p>
</footer>
