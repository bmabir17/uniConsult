<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CSE470 Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!--Header-->
  <?php
    include_once('header.php');
  ?>

    <div class="container">
      <div class="jumbotron text-center">
        <div class="row">
            <div class= "col-md-4">
                <a href="#" class="thumbnail"><img src="img/3.png" alt="one"></a>
                
                
            </div>
            <div class= "col-md-6 col-md-offset-1">
                <br>
                <h5>Adolescence is considered to be one of the most critical stages of human development.  
                At this stage adolescents are under pressure to choose their subjects according to 
                their career choice.Selection of subjects and career would go hand in hand.</h5>
                <h5>Lecturers 
                at preuniversiy colleges encounter with such situations where they should be in position 
                to help the students who are at the adolescent stage of development. Subject selection 
                depends on their career interests. Career interest may not be sufficient to choosing the career.</h5>
                <h5>In order to select a career besides interest, their potential or abilities and opportunities
                should also be taken into consideration.In order to help them in such career related decisions,
                we came up with this system. </h5>
                <br>
                <a href="login.php" class="btn btn-primary" role="button">Log in</a>
                <a href="register.php" class="btn btn-success" role="button">Sign Up</a>
       
                 
            </div>
                
        

        </div>
        
     </div>
    </div>
    <!--Footer-->
    <?php
    include_once('footer.php');
    ?>






    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>