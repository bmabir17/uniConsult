<!DOCTYPE html>
<html>
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
            <?php
                require 'connect.php';
            ?> 
            <h3>Admin View</h3> 
            <h4>Question-answer view, Add/Delete/Update Question-Answer</h4>
            <a href="addquestions.php" class="btn btn-success" role="button">Add questions</a>
            <br><br>

            <?php

                $keepCount = 1;
                $questionNumber = 1;
                while ( $keepCount <= 6) {
                    $answerNumber = 1;
                    $query1 = mysqli_query($con, "SELECT `question`, `Qid` FROM `question bank` WHERE `Did` = $keepCount");
                    $query2 = mysqli_query($con, "SELECT `Dname` FROM `department` WHERE `Did` = $keepCount");
                    $result2 = mysqli_fetch_assoc($query2);  
                    $keepDname = $result2['Dname'];
                    echo "<br>" . $keepDname . "-" . "<br>" . "<br>";
                    while($result1 = mysqli_fetch_array($query1)){ 
                        $keepQid = $result1['Qid'];
                        echo $questionNumber . ") " .$result1['question'] . "<br>" . "<br>";
                        $query3 = mysqli_query($con, "SELECT `ans`, `Aid`, `point` FROM `answer bank` WHERE `Qid` = $keepQid"); 
                        while($result3 = mysqli_fetch_array($query3)){ 
                            echo "&nbsp&nbsp&nbsp&nbsp"  . $answerNumber . ". " .$result3['ans'] . " = " . $result3['point'] . "<br>";
                            $answerNumber++;    
                        
                        }
                        $answerNumber = 1;
                        $questionNumber++;
                        ?>  <br>
                            <a href="deletequestions.php" class="btn btn-danger" role="button">Delete</a> 
                            <a href="editquestions.php" class="btn btn-primary" role="button">Edit</a> 
                            <br><br>
                        <?php
                        echo "<br>";
                        
                        
                    }

                    $keepCount++;
                }
            ?>   
                    
    
        </div>
    </body> 
    
<!--Footer-->
<?php
    include_once('footer.php');
?>

</html> 

                             
                              

                            
 