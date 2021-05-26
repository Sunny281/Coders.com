<?php

 $_GET['Vid'];
 $_GET['VideoName'];
 $_GET['LanguageName'];
 $_GET['VideoVersion'];
 $_GET['Link'];
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
?>
<html>
    <head>
         <style>
            body{
                background-image: url('img/book.jpg');
             background-size: cover;
            
            }
            
            
        </style>
    </head>
    <body>
     
            
        <?php
        if($_GET['submit']){
            $Vid=$_GET['Vid'];
           $Video=$_GET['VideoName'];
            $LanguageName= $_GET['LanguageName'];
           $Version=$_GET['VideoVersion'];
            $Link= $_GET['Link'];
            $sql="UPDATE videos SET VideoName='$Video',LanguageName='$LanguageName',VideoVersion='$Version',Link='$Link' WHERE Vid='$Vid'";
            $data=mysqli_query($conn,$sql);

if($data){
    echo 'Record Updated';
}
else{
    echo 'Record Not Updated';
}
        }
        else
        {
            'Submit Button Not Press';
        }
        ?>
    </body>
    
</html>