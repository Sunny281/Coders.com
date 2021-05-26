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
        
        <form action="Uhelper.php" method="get" style="height: 40%; width:100%; padding:10px; margin-top:200px; margin-bottom: 25px;">
               <center>
            <table style="text-align: center;" border="1"  >
                <tr><td>VideoId</td><td><input type="number" name="Vid" readonly="true"value="<?php echo $_GET['Vid']; ?>" required="false"  >  </td></tr>
                <tr ><td style="color:blueviolet;">VideoName</td><td><input type="text" name="VideoName" value="<?php echo$_GET['VideoName']; ?>" placeholder="VideoName">  </td></tr>
                    
                      
                      
            
            <tr><td style="color:blueviolet;">Link</td><td style="color:blueviolet;"><input type="text" name="LanguageName" value="<?php echo $_GET['LanguageName'];?>"placeholder="Link"></td></tr>
            
            <tr><td style="color:blueviolet;">Link</td><td style="color:blueviolet;"><input type="text" name="VideoVersion" value="<?php echo $_GET['VideoVersion'];?>"placeholder="Link"></td></tr>
            
           
            <tr><td style="color:blueviolet;">Link</td><td style="color:blueviolet;"><input type="text" name="Link" value="<?php echo $_GET['Link'];?>"placeholder="Link"></td></tr>
            
            <tr><td style="color:blueviolet;"><input type="submit" name="submit" value="Update" style="text-align: center; " ></td></tr>
            
            </table>
                       </center>
        </form>

    </body>
    
</html>


