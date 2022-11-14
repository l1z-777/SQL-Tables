<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <!--All PHP scripts need to go inside these tags-->
        <?php
            require("config-test.php");
            #Form values are assigned to PHP variables for output
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone_num = $_POST['phone_num'];



            #Use IF-Else statements to intialise variables 
            #and to produce a response
            
            
            if (($name == NULL) || ($address == NULL) || ($email == NULL) || ($phone_num == NULL)) {
                $name = NULL;
                $address = NULL;
                $email = NULL;
                $phone_num = NULL;
                echo 'Error! Please go back and re-enter your details!';
            }
            if (($name != NULL) && ($address != NULL) && ($email != NULL) && ($phone_num != NULL)) {
                $name = $_POST['name'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $phone_num = $_POST['phone_num'];
            }


            #Statements to initialise variables if the
            #hidden form field values have been set
            $time = (!isset ($_POST['time'])) ? NULL: $_POST['time'];
            $user = (!isset ($_POST['user'])) ? NULL: $_POST['user'];

            date_default_timezone_set('UTC');
            $time = date('H:i, F j, Y');
            $user = $name;

            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['address'] = $address;
            $_SESSION['phone_num'] = $phone_num;
            $_SESSION['time'] = $time;

            #Statements to output valid data:
            if (($name != NULL) && ($address != NULL) && ($email != NULL) && ($phone_num != NULL) && ($time != NULL) && ($user != NULL)) {
                echo "<p>Hi <b> $name, </b> </p>";
                echo "<p>Please make sure your information is correct before proceeding to choose your course!</p>";
                echo "<p>Name: <b>$name</b></p>";
                echo "<p>Address: <b>$address</b></p>";
                echo "<p>Email: <b>$email</b></p>";
                echo "<p>Phone number: <b>$phone_num</b></p>";
                echo "<p>Recieved: <br> From ", "<b>".$user."</b>", " at ", "<b>".$time."<b>","</p>";
                echo "<br> Click the 'Next' button to proceed onto choosing a course or re-submit your personal information by clicking 'Re-Submit Info' button </br><br>";
            }
            
             if (($name != NULL) && ($address != NULL) && ($email != NULL) && ($phone_num != NULL) && ($time != NULL) && ($user != NULL)) : ?>
                <form method="POST" action="task-2-page.php">
                <input type="submit" name="next_button" value="Next"><br><br>
                </form>

                <form method="POST" action="task-1-page.php">
                <input type="submit" name="back_button" value="Re-Submit Info">
                </form>

            <?php else: ?>
                <form method="POST" action="task-1-page.php">
                <input type="submit" name="back_button" value="Back">
                </form>  
            <?php endif; ?>
    </body>
</html>
