<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>RUET OJ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/ruet.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>

        <style>
            body{
              background:linear-gradient(lightseagreen,blue);

width:100%;
            }
            #ss{
color: white;  

            }
            
            </style>



</head>
<body>
    <h2 style="text-align:center;">Check Your Code</h2>

<form action="compile.php" id="form" name="f2" method="POST" >
    <label for="lang"><h4>Choose Language</h4></label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>
<option value="python2.7">python</option>
<option value="python3.2">python</option>


</select>

<label for="ta"><h4>Write Your Code</h4></label>
<textarea class="form-control" name="code" rows="10"id="ss" cols="50"style="background:linear-gradient(lightseagreen,black);"></textarea>
<label for="in"><h4>Enter Your Input</h4></label>
<textarea class="form-control"  name="input" rows="4" id="ss"  placeholder="FIRSTLY ENTER A INPUT THAN RUNCODE" cols="50" style="background:linear-gradient(lightseagreen,black);  "></textarea><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out"><h4>Output</h4></label>
<textarea id='div' class="form-control" id="ss" name="output" rows="4" style="color: black;" cols="40"></textarea><br><br>







  



</body>
</html>


