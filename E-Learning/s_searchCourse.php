<?php

session_start();

?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <fieldset style="background-color: #C1E483">
  <br><i> <h1 align="center" style="color: blue"> LEARNING CS </i> </h1> 
          <h3 align= "right">
        
        
          Logged in as <?php echo $_SESSION['nameDB'] ; ?>|
          <a href="s_logout.php">Logout</a> <span style="color: #C1E483;">*</span>
              <hr>        
          </h3>  
       
      
    
       <h2> <u> Account </u> </h2> <span style="color: #C1E483;"> ***********</span> 
           
       <h4>
       
           <ul>
                <li><a href="s_dashboard.php"> Dashboard </a></li>
                <li><a href= "s_viewProfile.php"> View Profile </a> </li>
                <li><a href="s_editProfile.php"> Edit Profile </a></li>
                <li><a href="s_changePassword.php">Change Password </a> </li>
                 <li><a href="s_searchCourse.php">Courses</a></li>
                <li><a href="s_logout.php">Logout</a></li>
     
        </ul> 
       
        </h4>
  <div class="container" align="center">
    <p><b><h2>Available Courses</h2></b></p><br><br>
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon" style="height: 50; width: 200; background-color:#D5D8DC; color: #031111; border-color: #33FCFF;"><b>Search</b></span>
     <input type="text" name="search_text" id="search_text" style="height: 50; width: 400; border-color: #33FCFF;" placeholder="Search course" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div align="center">
    
        <h4> <span style="color: rgb(140, 140, 140);"> Copyright ©  <?php echo date(2021);?> <span/> <h4/> 
      
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
   url:"model/s_searchCourse.php",
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