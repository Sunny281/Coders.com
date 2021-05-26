<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-image: url('img/book.jpg');
             background-size: cover;
            
            }
            
            
        </style>
    </head>
    <body>
       
 
        <form action="AddVideo.php" method="post" style="  height: 40%; width:100%; padding:10px; margin-top:200px; margin-bottom: 25px;">
               <center>
            <table style="text-align: center;" border="1"  >
                <tr ><td style="color:blueviolet;">VideoName</td><td><input type="text" name="VideoName" placeholder="VideoName">  </td></tr>
                    
                      
                      
            
           
            <tr><td style="color:blueviolet;">LanguageName</td><td style="color:black;"><select name="type">
               <option> Php</option>
                          <option> CLanguage</option>  
                          <option> C++</option>    
                          <option> Java</option>    
                          <option> JavaAdvance</option>   
                          <option> Html</option>    
                          <option> Css</option>    
                          <option> JavaScript</option>          
                          <option> Php</option>
                          <option>Python</option>     
                    </select></td></tr>
          
           
            <tr><td style="color:blueviolet;">Version</td><td><select name="VideoVersion" style="color:black;">
                 <option> Hindi</option>    
                          <option>English</option>            
                    </select></td></tr>
            
            <tr><td style="color:blueviolet;">Link</td><td style="color:blueviolet;"><input type="text" name="Link" placeholder="Link"></td></tr>
            
            <tr><td style="color:blueviolet;"><input type="submit" value="Upload" style="text-align: center; " ></td></tr>
            
            </table>
                       </center>
        </form>

   </body>
</html>


