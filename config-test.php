<?php
#Set up your database credentials - this is kept to a mimimun here, with MySQL defaul settings in place
#User is 'root', no password has been set
#NOTE: You may need to change the name of the database, depending on the project you are working on
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'my_db');
 
#Here we are are creating a connection to the MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

#Validation to check if connection is succesfull - an error is returned if not.
if($link === false){
    die("ERROR: Connection could not be established. " . mysqli_connect_error());
}

$query = "CREATE TABLE IF NOT EXISTS user_choice
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name TEXT,
    address TEXT,
    email TEXT,
    phone_number TEXT,
    timestamp TEXT,
    course_chosen TEXT,
    comments TEXT
)";

mysqli_query($link, $query);

?>