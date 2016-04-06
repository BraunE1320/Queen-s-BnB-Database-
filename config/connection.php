<?php
// used to connect to the database
$host = "localhost";
$db_name = "cisc332_2";
$username = "cisc332"; // use your own username and password if different from mine
$password = "cisc332password";

try {
    $con = new mysqli($host,$username,$password, $db_name);
}
 
// show error
catch(Exception $exception){
    echo "Connection error: " . $exception->getMessage();
}

?>
