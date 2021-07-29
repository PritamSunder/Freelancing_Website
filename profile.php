<?php
define('TITLE',"My Profile");
include 'connect.php';
session_start();
if(!isset($_SESSION['email']))
{
    echo "login to your account";
    header("refresh:2;url=signin.php");
    exit();
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
<section style="background-color:white; background-size:auto" id="gapz">

<div class="splitscreen1">
<div class="left1">
<image alt=Photo src=images/default.jpg style="width:100px;height:100px; margin-left:20px;">
</div>
<div class="mid1">
<h3 style="margin-left:10px;font-size:28px;">Name  <?php echo strtoupper($_SESSION["name"]) . " " . strtoupper($_SESSION["surname"]); ?></h3>
</div>
<div class="right1">
<button type="button" style="margin-top:25px; padding:8px; background:#00446D; border-radius:2px; color:white;"><a href="profileupdate.php" id="whi"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></button>
</div>
</div>
<hr>
<div class="vertical">
<div class="splitscreen1">
<div class="left1">
<div id="gapx">
<h4 style="font-size:20px;"><b>Username:  <?php echo $_SESSION["name"]; ?> </b></h4>
<br>
<h4 style="font-size:20px;"><b>Date of Birth:  <?php echo $_SESSION["dob"];?></b></h4>
<br>
<h4 style="font-size:20px;"><b>Email:  <?php echo $_SESSION["email"];?></b></h4>
<br>
<h4 style="font-size:20px;"><b>Profession:   <?php echo $_SESSION["profession"];?></b></h4>
</div>
</div>
<div class="right1" id="gapx">
<div id="gapx">
<h4 style="font-size:20px;"><b>Skills:   <?php echo $_SESSION["skills"];?></b></h4>
<ul>
</ul>
</div>
</div>
</div>
</div>
</section>
<div class="splitscreen2">
<div class="left2">
<section style="background-color:white; background-size:auto; margin-bottom:50px;" id="gapy">
<h4 id="gapx"><b>My Applications:</b></h4>
<button type="button" style="margin-left:400px; padding:8px; background:#00446D; border-radius:2px; color:white;"><a href="contracts.php" id="whi">Apply</a></button>
<?php
$e1=$_SESSION["email"];
$sql="SELECT `Unique`,`Tag` FROM `bid` WHERE `Client`='$e1' ";
$run=mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
  if($count == 0){
    echo 'Apply for Applications';
  }
  else{
    while($row = mysqli_fetch_array($run))
    {
      $u=$row["Unique"];
?>
<a style="text-decoration:none;color:black;" href="details.php?uni=<?php echo $u ?>"><?php echo $row["Tag"]; ?></a>
<?php
    echo nl2br("\r\n",false);
    }
  }
?>

</section>
</div>
<div class="right2">
<section style="background-color:white; background-size:auto; margin-bottom:50px;" id="gapy">
<h4 id="gapx"><b>My Contracts:</b></h4>
<button type="button" style="margin-left:400px; padding:8px; background:#00446D; border-radius:2px; color:white;"><a href="post.php" id="whi">Post</a></button>
<br>
<?php
$e1=$_SESSION["email"];
$sql="SELECT `Unique`,`Tag` FROM `bid` WHERE `Host`='$e1' ";
$run=mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
  if($count == 0){
    echo 'No Contracts Available !';
  }
  else{
    while($row = mysqli_fetch_array($run))
    {
      $u=$row["Unique"];
?>
<a style="text-decoration:none;color:black;" href="details.php?uni=<?php echo $u ?> " ><?php echo $row["Tag"]; ?></a>
<?php
    echo nl2br("\r\n",false);
    }
  }
?>
</section>
</div>
</div>
</body>
</html>
