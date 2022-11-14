<!DOCTYPE HTML>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HTML Form</title>
    </head>
    <body>
        <?php
        ?>

        <form action = "task-1-code.php" method = "POST">
        <dl>
            <b>Sign up today to join a course!</b>
            <dt><br><b>Name:</b></br> </dt>
                <dd><input type = "text" name = "name"></dd>
            <dt><b>Address:</b></dt>
                <dd><input type = "text" name = "address"></dd>
            <dt><b>Email:</b></dt>
                <dd><input type = "email" name = "email"></dd>
            <dt><b>Phone number:</b></dt>
                <dd><input type = "text" name = "phone_num"></dd>
                <input type = "hidden" name = "user" value = "'.$user.'">
                <input type = "hidden" name = "time" value = "'.$time.'">
        </dl>
        <p><input type = "reset"></p>
        <p><input type = "submit"></p>
        </form>



    </body>
</html>

