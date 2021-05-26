<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
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
    
}

$FindVideos="SELECT*FROM videos WHERE LanguageName='C++'and VideoVersion='Hindi' ";
$result=  mysqli_query($conn,$FindVideos);
if(mysqli_num_rows($result)>0)
{
    while ($row=  mysqli_fetch_assoc($result)){
        $Vid= $row['Vid'];
        $VideoName=$row["VideoName"];
            $LanguageName =$row["LanguageName"];
       $row["Link"];
       
    }
   
}


$FindVideo="SELECT*FROM videos WHERE LanguageName='C++' and VideoVersion='Hindi' ";
$result=  mysqli_query($conn,$FindVideo);
if(mysqli_num_rows($result)>0)
{
    while ($row=  mysqli_fetch_assoc($result)){
        
        
        $Link=$row['Link'];
     
   echo" <h7 style=font-size:0;margin:4px;>"; echo $Link; echo " < /h7>";
    }
   
}

?>


     
        
    </body>
</html>




