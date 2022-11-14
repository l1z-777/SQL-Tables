<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sending Hidden Data</title>
    </head>
    <body>
        <?php
        require "config-test.php";
        #Use IF-Else statements to intialise variables 
        #and to produce a response
        if (!empty ($_POST['comment'])) {
            $comment = $_POST['comment'];
        }
        else {
            $comment = NULL;
            echo 'Error! Please go back and enter a comment!'; ?>
            <form method="POST" action="task-3-page.php">
            <input type="submit" name="back_button" value="Back">

        <?php }
        #Statements to initialise variables if the
        #hidden form field values have been set
        $time = (!isset ($_POST['time'])) ? NULL: $_POST['time'];
        $user = (!isset ($_POST['user'])) ? NULL: $_POST['user'];

        #Statements to output valid data:
        if (($comment != NULL)) {
            echo "<p>Feedback recieved! Thank you ". $_SESSION['name'] . "! You will recieve more information about the course you enrolled on, at ". $_SESSION['email'] . "<br><i> \"$comment\"<br><i><br></p>";
            $_SESSION['comment'] = $comment;
            $sql1 = "INSERT INTO user_choice (name, address, email, phone_number, timestamp, course_chosen, comments)
            VALUES ('{$_SESSION['name']}', '{$_SESSION['address']}', '{$_SESSION['email']}', '{$_SESSION['phone_num']}', '{$_SESSION['time']}', '{$_SESSION['definition']}', '{$_SESSION['comment']}')";
            if (mysqli_query($link, $sql1)) {
                echo "New record has been added successfully !";
            } else {
                echo "Error: " . $sql1 . ":-" . mysqli_error($link);
            }
            mysqli_close($link);
        }
        ?>

    </body>
</html>

