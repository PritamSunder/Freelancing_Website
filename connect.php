<?php

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"freelancer");
if(!$conn)
{
  echo 'Not connected to server';
}
if(!mysqli_select_db($conn,'freelancer'))
{
  echo 'Database not selected';
}
