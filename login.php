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
$loginemail=$_POST['loginemail'];

 $loginpassword=$_POST['loginpassword'];
 

$S="SELECT * FROM user where Email='$loginemail'and Password= '$loginpassword' ";
if(mysqli_query($conn,$S))
{
    echo 'login Successfully'; 
    header("location:afterlogin.php");
}
else
{
    echo 'invalid usename And Password'.  mysqli_error($conn);
}

?>
