<?php
include 'connect.php';
session_start();

if(!isset($_SESSION['email']))
{
    echo "login to your account";
    header("refresh:2;url=signin.php");
    exit();
}
if(count($_POST)>0)
{
  $ndob=$_POST['dob'];
  $npro=$_POST['profession'];
  $ns=$_POST['skills'];
  $em=$_SESSION["email"];
  if(empty($ndob) && empty($npro) && empty($ns)){
    echo 'no changes made to your profile';
    header("refresh:2;url=profile.php");
  }
  else {
    if(!empty($ndob))
    {
      $_SESSION["dob"]=$ndob;
      $sql="UPDATE `reg` SET `DOB`='$ndob' WHERE `email`='$em' ";
      $run = mysqli_query($conn,$sql);
      if(!$run)
      {
        echo 'Alteration failed';

      }
      if(empty($ns) && empty($npro)){
        header("refresh:2;url=profile.php");
      }
    }
    if(!empty($npro))
    {
      $_SESSION["profession"]=$npro;
      $sql="UPDATE `reg` SET `Profession`='$npro' WHERE `email`='$em' ";
      $run = mysqli_query($conn,$sql);
      if(!$run)
      {
        echo 'Alteration failed';

      }
      if(empty($ns) && empty($ndob)){
        header("refresh:2;url=profile.php");
      }
    }
    if(!empty($ns))
    {
      $_SESSION["skills"]=$ns;
      $sql="UPDATE `reg` SET `Skills`='$ns' WHERE `email`='$em' ";
      $run = mysqli_query($conn,$sql);
      if(!$run)
      {
        echo 'Alteration failed';

      }
      if(empty($ndob) && empty($npro)){
        header("refresh:2;url=profile.php");
      }
    }
    header("refresh:2;url=profile.php");
  }

}


?>

<!DOCTYPE html>
<html>
<head>
<title>Freelancer's Community</title>
<style>
input[type=text], input[type=password] {

  width: 50%;
  padding: 8px;
  margin: 5px 0 20px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
input[type="date"]::-webkit-clear-button {
    display: none;
}

input[type="date"]::-webkit-inner-spin-button {
    display: none;
}

input[type="date"]::-webkit-calendar-picker-indicator {
    color: #f1f1f1;
}

input[type="date"] {
    appearance: none;
    -webkit-appearance: none;
    color: #f1f1f1;
    font-family: "Helvetica", arial, sans-serif;
    border:1px solid #f1f1f1;
    background:#f1f1f1;
    padding:5px;
    display: inline-block !important;
    visibility: visible !important;
}

input[type="date"], focus {
    color: #95a5a6;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    margin-bottom:10px;
}

</style>
<link rel="apple-touch-icon" sizes="180x180" href="icons\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons\favicon-16x16.png">
<link rel="manifest" href="icons\site.webmanifest">
<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
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
<li><a href="freelancer.php">Home</a></li>
<li><a href="contracts.php">Contracts</a></li>
<li><div class="dropdown">
  <button class="dropbtn" style="font-size:18px;">About</button>
  <div class="dropdown-content">
    <a href="about.html">Website</a>
    <a href="team.html">Team</a>
  </div>
</div></li>
<li class="active"><a href="#">Profile</a></li>
<div class="search">
<form action="#">
<input type="text" placeholder=" Search Contracts" name="search">
<button><i class="fa fa-search" style="font-size: 18px;"></i></button>
<div class="form-popup" id="myForm">
  <form action="" method="post">
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
<section style="background-color:white; background-size:auto" id="gapz">
<form action="" method="post">
<div class="splitscreen1">
<div class="left1">
<image alt=Photo src=images/default.jpg style="width:100px;height:100px; margin-left:20px;">
</div>
<div class="mid1">
<h3 style="margin-left:10px;font-size:28px;">Name  <?php echo strtoupper($_SESSION["name"]) . " " . strtoupper($_SESSION["surname"]); ?></h3>
</div>
<div class="right1">
</div>
</div>
<hr>
<div class="vertical">
<div class="splitscreen1">
<div class="left1" id="gapx">
  <!--
<h4 style="font-size:20px;"><b>Username: </b></h4>
<br>
<h4 style="font-size:20px;"><b>Date of Birth: </b></h4>
<br>
<h4 style="font-size:20px;"><b>Email: </b></h4>
<br>
<h4 style="font-size:20px;"><b>Profession:</b></h4>
-->
<label for="name"><b>Username:  </b></label>
<h4 style="font-size:20px;"><b>Username:  <?php echo $_SESSION["name"]; ?></b></h4>
<br>
<label for="dob"><b>Date of Birth:  </b></label>
<input type = "date" placeholder="Select Date" name="dob" id="dob">
<br>
<label for="email"><b>Email:  </b></label>
<h4 style="font-size:20px;"><b>Email:  <?php echo $_SESSION["email"];?></b></h4>
<br>
<label for="profession"><b>Profession:  </b></label>
<input type="text" placeholder="Enter Profession" name="profession" id="profession">
</div>
<div class="right1" id="gapx">
<div id="gapx">
  <label for="skills"><b>Skills: </b></label>
  <input type="text" placeholder="Enter skills" name="skills" id="skills">
</div>
<button type="submit" class="registerbtn" style="margin-top:120px;margin-left:400px; padding:8px; background:#00446D; border-radius:2px; color:white;">Done</button></div>
</div>
</div>
</form>
</body>
</html>
