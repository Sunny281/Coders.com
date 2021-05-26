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
    echo '';
}

$S="SELECT*FROM videos";
$data=mysqli_query($conn,$S);
$total=  mysqli_num_rows($data);
if($total!=1)
{
  
?>
<html>
    <head>
        <style>
            body{
                background-image: url('img/book.jpg');
             background-size: cover;
            
            }
            table{
                margin-left: 30%;
            }
            
        </style>
    </head>
    <body>
    
<table border="1">
  
    <tr>
        <th>VideoId</th>
           <th>VideoName</th>
                <th>LanguageName</th>
                     <th>VideoVersion</th>
                          <th>Link</th>
                             <th>Edit</th>
        
    </tr>
    <?php
    while($result=  mysqli_fetch_assoc($data))
    {
    echo "<tr><td>".$result['Vid']."</td><td>".$result['VideoName']."</td><td>".$result['LanguageName']."</td><td>".$result['VideoVersion']."</td><td>".$result['Link']."</td><td><a href='UpdateVideos.php?Vid=$result[Vid]&VideoName=$result[VideoName]&LanguageName=$result[LanguageName]&VideoVersion=$result[VideoVersion]&Link=$result[Link]'>Edit</a></td></tr>";
    }
    
}
else{
echo 'No Record Found';
}
    ?>
   
</table>
    </body>
</html>