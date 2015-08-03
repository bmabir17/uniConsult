<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSE470 Project</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

<!--Header-->
<?php
    include_once('headerwhenloggedin.php');
?>


</head>
<body>

<div class="container">
  <h2>Add questions to database: </h2>
  <p>Enter question, answers and corresponding points</p>
  <div class="row">
    <div class="col-md-4 ">
      <form role="form">
    <div class="form-group">
      <p>
        <label for="comment">Question:</label>
        <textarea class="form-control" rows="3" id="question" name="question"></textarea>
      </p>
      <p>
        <label for="comment">Option-1:</label>
        <textarea class="form-control" rows="1" id="option1" name="option1"></textarea>
        <label for="comment">Point:</label>
        <textarea class="form-control" rows="1" id="point1" name="point1"></textarea>
     
      </p>
      <p>
        <label for="comment">Option-2:</label>
        <textarea class="form-control" rows="1" id="option1" name="option2"></textarea>
        <label for="comment">Point:</label>
        <textarea class="form-control" rows="1" id="point1" name="point2"></textarea>
     
      </p>
      <p>
        <label for="comment">Option-3:</label>
        <textarea class="form-control" rows="1" id="option1" name="option3"></textarea>
        <label for="comment">Point:</label>
        <textarea class="form-control" rows="1" id="point1" name="point3"></textarea>
     
      </p>
      <p>
        <label for="comment">Option-4:</label>
        <textarea class="form-control" rows="1" id="option1" name="option4"></textarea>
        <label for="comment">Point:</label>
        <textarea class="form-control col" rows="1" id="point1" name="point4"></textarea>
     
      </p>

      
    </div>
    <button id="submit" name="submit" type="submit" class="btn btn-primary">Add</button>


  </form>

    </div>
  </div>
  
</div>

</body>
<!--Footer-->
<?php
    include_once('footer.php');
?>

</html>
