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
            <h3>Know your interest in subject to be studied in university level with our question-answering session.</h3>
            <h4>Questioning Level - 2</h4> <?php

            //shows questions for level 2
            $questionNumber = 1;
            $sql = "SELECT `question`, `Qid` FROM `question bank` WHERE `question level` = 2";
            $query1 = mysqli_query($con, $sql);
            while ($result = mysqli_fetch_array($query1)) {
                $keepQid = $result['Qid'];
                echo $questionNumber . ". " . $result['question'] . "<br>";
                $query2 = mysqli_query($con, "SELECT `ans`, `Aid` FROM `answer bank` WHERE `Qid` = $keepQid");
                ?> 
                <form action="result.php" method="post"> <?php
                while ($result2 = mysqli_fetch_array($query2)) {
                    ?>
                    <input type="radio" name="question<?php echo $questionNumber ?>" value="<?php echo $result2['Aid']; ?>"> <?php
                    echo $result2['ans'];
                    echo'<br>';
                }

                $questionNumber++;
            }
            ?> <input type="submit" name="submit3">

            <?php

            //calculated answers for level 1
            if (isset($_POST['submit2'])) {

                $values1 = $_POST; //the value of the radio button, i don't know what to put here
                foreach ($values1 as $value) {
                    // echo $value;
                    $keepValue = $value;

                    $query3 = mysqli_query($con, "SELECT `Qid` FROM `answer bank` WHERE Aid = $value")or die(mysqli_error($con));
                    $result3 = mysqli_fetch_assoc($query3);
                    // echo $result3;
                    $keepQid1 = (int) $result3['Qid'];
                    // echo $keepQid1;
                    $query4 = mysqli_query($con, "INSERT INTO `user answer storage`(`Qid`, `Uid`, `Aid`) VALUES ($keepQid1, '1', $keepValue)")or die(mysqli_error($con));



                    $query5 = mysqli_query($con, "SELECT `Did` FROM `question bank` WHERE Qid = $keepQid1")or die(mysqli_error($con));
                    $result5 = mysqli_fetch_assoc($query5);
                    $keepDid = (int) $result5['Did'];
                    // echo $keepDid;    
                    $query6 = mysqli_query($con, "SELECT * FROM `points table` WHERE Did = $keepDid")or die(mysqli_error($con));
                    $rowcount = mysqli_num_rows($query6);
                    //   echo $rowcount;
                    $query7 = mysqli_query($con, "SELECT `Sid` FROM `user answer storage` ORDER BY Sid DESC LIMIT 1")or die(mysqli_error($con));
                    $result7 = mysqli_fetch_assoc($query7);
                    $keepSid = (int) $result7['Sid'];


                    if ($rowcount == 0) {
                        // echo 'Here';

                        $query8 = mysqli_query($con, "INSERT INTO `points table`(`Sid`, `Did`, `points`) VALUES ($keepSid, $keepDid, 0)")or die(mysqli_error($con));
                    }

                    //     $query9 = mysqli_query($con,"UPDATE `points table` SET `Sid`=(SELECT `Sid` FROM `user answer storage` ORDER BY `Sid` DESC LIMIT 1),`Did`=(SELECT `Did` FROM `question bank` WHERE Qid = (SELECT `Qid` FROM `user answer storage` ORDER BY `Sid` DESC LIMIT 1)),`points`=`points`+(SELECT `point` FROM `answer bank` WHERE `Aid` = (SELECT `Aid` FROM `user answer storage` ORDER BY `Sid` DESC LIMIT 1)) WHERE `Did` = (SELECT `Did` FROM `user answer storage` ORDER BY `Sid` DESC LIMIT 1)");

                    $query9 = mysqli_query($con, "SELECT `points` FROM `points table` WHERE `Did` = $keepDid");
                    $result9 = mysqli_fetch_assoc($query9);
                    $keepPreviousPoint = $result9['points'];
                    //echo $keepPreviousPoint;
                    $query10 = mysqli_query($con, "SELECT `point` FROM `answer bank` WHERE `Aid` = $keepValue");
                    $result10 = mysqli_fetch_assoc($query10);
                    $keepNewPoint = $result10['point'];
                    //echo $keepNewPoint + "";
                    $sum = $keepPreviousPoint + $keepNewPoint;
                    //echo $sum;
                    $query11 = mysqli_query($con, "UPDATE `points table` SET `Sid`= $keepSid,`Did`=$keepDid,`points`= $sum WHERE `Did` = $keepDid");
                }
            }
            ?>

                </form>
    


        </div>
    </body>

<!--Footer-->
<?php
    include_once('footer.php');
?>

</html> 





