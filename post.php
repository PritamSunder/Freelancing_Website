<?php
require 'connect.php';
session_start();

if(count($_POST)>0)
{
  $tag=$_POST["tags"];
  $desc=$_POST["message"];
  $amt=$_POST["Amount"];
  $em=$_SESSION["email"];
  $nm=$_SESSION["temp"];
  $nm++;
  $_SESSION["temp"]++;
  $un=$_SESSION["name"].(string)$nm;
  $sql="INSERT INTO `bid`(`Host`, `Tag`, `Contract`, `Price`,`Unique`) VALUES ('$em','$tag','$desc','$amt','$un')";
  $run=mysqli_query($conn,$sql);
  $sql1="UPDATE `reg` SET `Temp`='$nm' WHERE `email`='$em' ";
  $run1 = mysqli_query($conn,$sql);
  if(!$run && !$run1)
  {
    echo 'Contract not inserted';
    header("refresh:2; url=post.php");
  }
  else {
    echo 'Contract posted successfully';
    header("refresh:2; url=profile.php");
  }
  $sql="UPDATE `reg` SET `Temp`='$nm' WHERE `email`='$em' ";
  $run = mysqli_query($conn,$sql);
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
  <form action="" method="post">
  <div class="container">
    <a href="profile.php" class="previous">&#8249; Back</a>
    <h1>Post a Contract:</h1>
    <hr>
    <label><b>Name:  <?php echo strtoupper($_SESSION["name"]) . " " . strtoupper($_SESSION["surname"]); ?></b></label><br><br>
    <label for="tags"><b>Choose a tag:</b></label>
     <select id="tags" name="tags">
       <option value="website">WebsiteDesign</option>
       <option value="ecommerce">eCommerce</option>
       <option value="software">SoftwareDesign</option>
       <option value="marketing">InternetMarketing</option>
       <option value="rendering">3DRendering</option>
       <option value="content">ContentWriting</option>
       <option value="datapro">DataProcessing</option>
       <option value="photoshop">Photoshop</option>
       <option value="php">PHP</option>
       <option value="graphic">GraphicDesign</option>
     </select>
    <br><br>
  <label><b>Description: </b></label><br>
  <textarea id="message" name="message" placeholder="Enter Description..." value="" rows="10" cols="30"></textarea>
  <br>
  <label><b>Amount:</b></label><br>
  <input type="number" name="Amount" id="Amount" placeholder="Enter Amount...">
     <br>
     <button type="submit" class="registerbtn">Post</button>
    </div>
  </form>
</body>
</html>
