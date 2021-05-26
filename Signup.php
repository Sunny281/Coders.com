<?php
$servername="localhost";
$username="root";
$password="";
$DB_Name="sunny";
$conn=  mysqli_connect($password, $username, $servername,$DB_Name);

//$newLink=substr($Link,16)

if(!$conn)
{
  die("Faild to connect".  mysqli_connect_error());  
}
else
{
    echo 'connection successful';
}
require 'Db.php';
$username=$_POST['username'];
$fname=$_POST['fname'];

$lname=$_POST['lname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 

$S="INSERT INTO user(UserName,FirstName,LastName,Email,Password)VALUES('$username','$fname','$lname','$email','$pass')";
if(mysqli_query($conn,$S))
{
    echo 'succes';  
}
else
{
    echo 'error'.  mysqli_error($conn);
}

?>
