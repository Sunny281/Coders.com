
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

$FindVideos="SELECT*FROM videos WHERE LanguageName='JavaAdvance'and VideoVersion='English' ";
$result=  mysqli_query($conn,$FindVideos);
if(mysqli_num_rows($result)>0)
{
    while ($row=  mysqli_fetch_assoc($result)){
        $Vid= $row['Vid'];
        $VideoName=$row["VideoName"];
            $LanguageName =$row["LanguageName"];
       $row["Link"];
        echo "<a href='Watch.php?Vid=$Vid'><br></a>";
    }
   
}


$FindVideo="SELECT*FROM videos WHERE LanguageName='JavaAdvance'and VideoVersion='English' ";
$result=  mysqli_query($conn,$FindVideo);
if(mysqli_num_rows($result)>0)
{
    while ($row=  mysqli_fetch_assoc($result)){
        
        $VideoName=$row["VideoName"];
        $Link=$row['Link'];
     
   
    }
   
}

?>
<title><?php echo $VideoName;?></title>
<h3><?php echo $VideoName;?></h3>

<iframe width="300" height="200" src="https://www.youtube.com/embed/<?php echo $Link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


     
        
    </body>
</html>






