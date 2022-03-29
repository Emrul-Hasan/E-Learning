<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

 </head>
 <body>

    <?php
  include('a_A-top.php');
  ?>
  <div class="container" align="center">
      <div class="row">
        <div class="col-4">
        </div>
          <div class="col-4">
            <?php
            include('a_A-link.php');
            ?><br>
          </div>

         </div>
        <div class="col-8" style="background-color: #CDE6B8"><br>
            <div class="form-group">
                <div class="input-group">

                  <span class="input-group-addon" style="height: 50; width: 200; background-color:#201772; color: #DAE1E3; border-color: #201772;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search</b></span>
                  <input type="text" name="search_text" id="search_text" style="height: 50; width: 400; border-color: #201772;" placeholder="Search by instructor details" class="form-control" />
                </div>
            </div><br/>
            <div id="result"></div><br>
        </div> <br>
        <a href="a_registration_view.php">Add instructor</a>
    </div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"model/a_instructor.php",
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