<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css\a_style-1.css">
  <style type="text/css">
   .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
  </style>
</head>
<body>
 
	
	<div class="container ">
		
  <form style="border:5px; border-style:solid; border-color:#201772; padding: 1em;"
    <div class="row">
  	
    <div class="col-4"><img src="asset/a_image/p-1.png" height="100" width="100"><h style="color:#201772"><b>E LEARNING</b></h></div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#201772" href="a_welcome.php"><b>HOME</b></a></h></span>
      </div>
    </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#201772" href="a_about.php"><b>ABOUT</b></a></h>
      </div>
  </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <h ><a style="color:#201772" href="a_course.php"><b>COURSE</b></a></h>
      </div>
  </div>

    <div class="col-2" align="center"><br>
      <div id="ab">
        <div class="dropdown">
        <h ><a style="color:#201772" href=""><b>LOG IN</b></a></h>
         <div class="dropdown-content">
    <a href="s_login.php">Student</a>
    <a href="i_login_view.php">Instructor</a>
    <a href="t_login.php">Tutor</a>
    <a href="a_login.php">Admin</a>
  </div>
  </div>
      </div>
    </div>
 </form>
</div>


</body>
</html>