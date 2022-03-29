<?php
session_start();

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>

<fieldset style="background-color: #CAF6F5">
   <p> <h1 > Tutor  </h1> </p>
           <h3 align= "right">
          <hr>
        
            Logged in as <?php echo $_SESSION['nameDB']; ?>|
           <a href="t_logout.php">Logout</a>   
       </h3>  
       </fieldset>

    <fieldset style="background-color: #CAF6F5">
    

           
         <hr>

       
    <p align="center"><b> Students</b></p>

  <div class="container" align="center">
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon" style="height: 50; width: 200; background-color:#8D91BD; color: #F0F0F7; border-color: #8D91BD;"><b>Search</b></span>
     <input type="text" name="search_text" id="search_text" style="height: 50; width: 400; border-color: #8D91BD;" placeholder="Student name" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  </fieldset>
 </body>
</html>




<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"model/t_studentSearch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>