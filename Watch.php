
<html><body>
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

$Vid=$_GET['Vid'];
$FindVideos="SELECT*FROM videos WHERE Vid='$Vid' ";
$result=  mysqli_query($conn,$FindVideos);
if(mysqli_num_rows($result)>0)
{
    while ($row=  mysqli_fetch_assoc($result)){
        
        $VideoName=$row["VideoName"];
        $Link=$row['Link'];
    
   
    }
    
}

?>
     echo $Link;
    </body>
</html>