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
            <h3>Faculty View</h3> 
            <h4>Student Answer View</h4>
            
        
            <?php

                $questionNumber = 1;
                $keepUserid = $_SESSION["userid"]; 
                $query1 = mysqli_query($con, "SELECT `Qid`, `Aid` FROM `user answer storage` WHERE `Uid` = $keepUserid");
                $result1 = mysqli_fetch_assoc($query1);
                $keepQid = $result1['Qid'];
                $keepAid = $result1['Aid'];
                while($result1 = mysqli_fetch_array($query1)){ 
                    $query2 = mysqli_query($con, "SELECT `question` FROM `question bank` WHERE `Qid` = $keepQid");
                    $result2 = mysqli_fetch_assoc($query2);  
                    $keepQuestion = $result2['question'];
                    echo "<br>" . $keepQuestion . "-" . "<br>" . "<br>";
                
                    
                }

                  
            ?>   
            
    
        </div>
    </body> 
    
<!--Footer-->
<?php
    include_once('footer.php');
?>

</html> 

                             
                              

                            
 