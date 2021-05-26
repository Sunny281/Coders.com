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

?>
