<?php

require 'connect.php';
session_start();

if(count($_POST)>0)
{

$uem=" ";
$upw=" ";
$uem=$_POST['email'];
$upw=$_POST['psw'];
$sql="SELECT * from `reg` WHERE `email`='$uem' AND `password`='$upw' ";
$run = mysqli_query($conn,$sql);
$row = mysqli_num_rows($run);
$rw=mysqli_fetch_array($run);
if(is_array($rw)){
$_SESSION["name"]=$rw["First Name"];
$_SESSION["surname"]=$rw["Last Name"];
$_SESSION["dob"]=$rw["DOB"];
$_SESSION["email"]=$rw["email"];
$_SESSION["password"]=$rw["password"];
$_SESSION["profession"]=$rw["Profession"];
$_SESSION["skills"]=$rw["Skills"];
$_SESSION["temp"]=$rw["Temp"];
}
else {
  echo "fetch unsuccessful";
}

if (empty($uem) || empty($upw))
{
  echo 'fields cannot be empty';
  header("refresh:5;url=signin.php");
}
else if($row<1){
echo 'username or password is wrong';
header("refresh:5;url=signin.php");
}
else{
echo 'login successful';
header("refresh:5;url=profile.php");
}
}



?>




<!DOCTYPE html>
<html>
<head>
<style>
body {
  margin-left: 400px;
  margin-right: 400px;
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to right top, #014872, #2c728d, #609ba4, #9bc4bf, #d7ede1);
  background-size: 150%;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 30px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}
.signin {
  padding: 1px;
  text-align: center;
  background-color: #f1f1f1;
  margin-bottom: 100px;
}
</style>
<title>Freelancer's Community</title>
<link rel="apple-touch-icon" sizes="180x180" href="icons\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons\favicon-16x16.png">
<link rel="manifest" href="icons\site.webmanifest">

</head>
<body>

<form action="" method="post">
  <div class="container">
    <h1>Sign In</h1>
    <p>Fill in the details to sign in.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>


    <button type="submit" class="registerbtn">Sign in</button>
  </div>

  <div class="container signin">
    <p>Don't have an account? <a href="reg.php">Sign Up</a>.</p>
    <p><a href="#">Forgot password?</a></p>
  </div>
</form>

</body>
</html>
