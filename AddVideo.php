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
$VideoVersion=$_POST['VideoVersion'];
$VideoName=$_POST['VideoName'];

$type=$_POST['type'];
 $Link=$_POST['Link'];

$S="INSERT INTO videos(VideoName,LanguageName,VideoVersion,Link)VALUES('$VideoName','$type','$VideoVersion','$Link')";
if(mysqli_query($conn,$S))
{
    echo 'succes';  
}
else
{
    echo 'error'.  mysqli_error($conn);
}

?>
