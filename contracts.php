<?php
require 'connect.php';
session_start();

 $sql="SELECT `Unique`,`Tag`,`Price` FROM `bid` WHERE `Client`=''";
 $run=mysqli_query($conn,$sql);
 $count = mysqli_num_rows($run);

    if($count == 0){

     echo 'No Contracts Available !';
    header("refresh:2;url=profile.php");
   }


    else{

?>

<!DOCTYPE html>
<html>
<head>
<title>FeeLancer's Community</title>
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
<li class='active'><a href="#">Contracts</a></li>
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
<?php }while(1){ ?>
<div class="parent-wrapper">
  <div class="parent">
    <?php if($row = mysqli_fetch_array($run)){
      $u=$row["Unique"];
      $t=$row["Tag"];
      $p="Rs. ".(string)$row["Price"];
      ?>
    <div class="child"><section> <h4><?php echo "Contract by ".$u; ?></h4><p><?php echo $t; ?></p><p><?php echo $p; } else { break; } ?></p> <button class="button button0"><a href="apply.php?uni=<?php echo $u ?>" id="whi" >Bid</a></button></section></div>
    <?php if($row = mysqli_fetch_array($run)){
      $u=$row["Unique"];
      $t=$row["Tag"];
      $p="Rs. ".(string)$row["Price"];?>
    <div class="child"><section> <h4><?php echo "Contract by ".$u; ?></h4><p><?php echo $t; ?></p><p><?php echo $p; } else { break; } ?></p> <button class="button button0"><a href="apply.php?uni=<?php echo $u ?>" id="whi" >Bid</a></button></section></div>
    <?php if($row = mysqli_fetch_array($run)){
      $u=$row["Unique"];
      $t=$row["Tag"];
      $p="Rs. ".(string)$row["Price"];?>
    <div class="child"><section> <h4><?php echo "Contract by ".$u; ?></h4><p><?php echo $t; ?></p><p><?php echo $p; } else { break; } ?></p> <button class="button button0"><a href="apply.php?uni=<?php echo $u ?>" id="whi" >Bid</a></button></section></div>
  </div>
</div>
<?php } ?>
</body>
</html>
