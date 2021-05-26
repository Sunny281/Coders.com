
<html>
    <head>
        <title>html Compiler</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <style>
            body{
           background:linear-gradient(lightseagreen,blue);
             
                
            }
                .header{
                  
                    
                }
                .menu{
                    height: 45px;
                               background:linear-gradient(lightseagreen,blue);
                }
                .content{
                    height:0px;
                    background: #fff;
                    
                }
                #browser{
                    width: 100%;
                    border:3px solid blue;
                    float: right;
                    height: 200px;
                    background-color: white;
                        
                }
                #editor{
                   width: 100%;
                    border: 2px blue;
                    background:linear-gradient(lightseagreen,black);
                    height: 450px;
                    resize: none;
                    margin: 0px;
                      color:white;
                      font-size: 18px;
                }
                .menu input[type="button"]{
                    margin: 5px;
                    width: 120px;
                    height: 35px;
                   background: linear-gradient(lightseagreen,black);
                }
               
    
       
                 
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="header"> </div>
               
                           
                    <div class="content"></div>
                      <textarea id="editor"></textarea>
                       <div id='myHead' class="menu">
                    <input type="button" value="Run" onclick="myTRY()"/>
                       </div>
                      
                        <div id="browser"> </div>
                          
                       
                   
                
            </div>
                
        <script type="text/javascript">
            
        function myTRY()
        {
            var code=document.getElementById("editor").value;
            document.getElementById("browser").innerHTML=code;
        }
            
        </script>
    </body>
    
</html>

