<?php
$server = 'localhost';

$user_name = 'root';

$pwd = '';

$dbname = 'ims';



$conn = new mysqli($server, $user_name, $pwd, $dbname);



//checking connection



if ($conn->connect_error) {

    die("Connection failed!: " .$conn->connect_error);

}



?>