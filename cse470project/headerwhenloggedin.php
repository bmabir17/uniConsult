<!DOCTYPE html>
<?php
    session_start();
?>


<html lang="en">
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <meta charset="UTF-8">
        <title>CSE470 Project</title>
    </head>
<body>
	<!--Header-->
	 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
      	<div role="navbar-headder">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <!--  <a href="#" class="logo"><img src="img/2.jpg" alt="one"></a> -->
          <a class="navbar-brand" href="#">Pre-University Counseling</a>
        </div>
        <div class="navbar-collapse collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <!--  <li class="active"><a href="#">Home</a></li> -->
            <!--<li><a href="#">About</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span>You're logged in as <?php echo $_SESSION["name"]; ?></span></a></li>
            <li class="active"><a href="logout.php"><span>Logout</span></a></li>
          </ul>
          

        </div>

      	
        
      </div>
    </nav>

</body>

</html>
