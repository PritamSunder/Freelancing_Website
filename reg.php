<?php

$conn=mysqli_connect("localhost","root","","freelancer");
if(!$conn)
{
  echo 'Not connected to server';
}
if(!mysqli_select_db($conn,'freelancer'))
{
  echo 'Database not selected';
}

if(count($_POST)>0)
{
$nm=$_POST["name"];
$snm=$_POST["surname"];
$dob=$_POST["dob"];
$em=$_POST["email"];
$pw=$_POST["psw"];

$sql="INSERT INTO `reg`(`First Name`, `Last Name`, `DOB`, `email`, `password`) VALUES ('$nm','$snm','$dob','$em','$pw')";
$run=mysqli_query($conn,$sql);
if(!$run)
{
  echo 'Not inserted';
  header("refresh:2; url=reg.php");
}
else {
  echo 'registered successfully!!! Redirecting !!!';
  header("refresh:2; url=signin.php");
}
}
//header("refresh:2; url=signin.php");
?>




<!DOCTYPE html>
<html>
<head>
  <title>Freelancer's Community</title>
  <link rel="apple-touch-icon" sizes="180x180" href="icons\apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons\favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons\favicon-16x16.png">
  <link rel="manifest" href="icons\site.webmanifest">

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
  padding: 16px;
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
  background-color: #f1f1f1;
  text-align: center;
  margin-bottom: 50px;
}
/* Removes the clear button from date inputs */
input[type="date"]::-webkit-clear-button {
    display: none;
}

/* Removes the spin button */
input[type="date"]::-webkit-inner-spin-button {
    display: none;
}

/* Always display the drop down caret */
input[type="date"]::-webkit-calendar-picker-indicator {
    color: #f1f1f1;
}

/* A few custom styles for date inputs */
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
}
</style>
</head>
<body>

<form action="" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Fill in the details to create an account.</p>
    <hr>
    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First name" name="name" id="name" required>

    <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last name" name="surname" id="surname" required>
    <br>
    <label for="dob"><b>Date of Birth</b></label>
    <input type = "date" placeholder="Select Date" name="dob" id="dob" required>
    <br><br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>


    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
