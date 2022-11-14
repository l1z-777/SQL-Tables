<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Checking Set Values</title>
    </head>
    <body>

    <!--All PHP scripts need to go inside these tags-->
    <?php
        require("config-test.php");
        #IF-Else stament where a variable is initialised with 
        #a submitted value or with NULL if no value has been selected 
        if (isset($_POST['definition'])) {
            $definition = $_POST['definition'];
        }
        else {
            $definition = NULL;
        }
        #IF-Else statement to show appropriate responses:
        if ($definition != NULL) 
            
            echo 'You have picked ', $definition;



        else {
            echo 'Please select an answer from the list';
        }



    ?>
        <?php if (($definition != NULL )) : ?>
            <form method="POST" action="task-3-page.php"><br>
            <input type="submit" name="next_button" value="Next"><br></br>
            </form>
            <?php
                $_SESSION['definition'] = $definition;
            ?>
        <?php else : ?>
            <form method="POST" action="task-2-page.php">
            <input type="submit" name="Back" value="Back">
            </form>
        <?php endif; ?>
    </body>
</html>

