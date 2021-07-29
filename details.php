<?php
include 'connect.php';
$un=$_GET['uni'];
$sql="SELECT * from `bid` WHERE `Unique`='$un'";
$run = mysqli_query($conn,$sql);
$rw = mysqli_fetch_array($run);
if (!$run && !$rw)
{
  echo 'Unable to access Contract';
  header("refresh:5;url=profile.php");
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
<link rel = "stylesheet" href="css\style_contract.css">
</head>
<style>
  a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 16px;
}

  .previous {
    background-color: #2D5488;
    color: white;
}
</style>
<body>
     <div class="container1">
    <h1><?php echo $rw["Unique"]; ?></h1>
    <hr>
    <label><b>Host: <?php echo $rw["Host"]; ?> </b></label><br><br>
    <label><b>Client: <?php echo $rw["Client"]; ?></b></label><br><br>
    <label for="tags"><b>Tag: <?php echo $rw["Tag"]; ?></b></label>
     <br><br>
  <label><b>Description: <?php echo $rw["Contract"]; ?></b></label><br>
  <br>
  <label><b>Amount: <?php echo $rw["Price"]; ?></b></label><br>
     <br>
     <a href="profile.php" class="previous">&#8249; Back</a>

    </div>
</body>
</html>
