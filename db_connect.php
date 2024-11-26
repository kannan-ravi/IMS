<?php
$server = 'localhost';

$user_name = 'imstvb';

$pwd = '1234@ims';

$dbname = 'u123478_ims';



$conn = new mysqli($server, $user_name, $pwd, $dbname);



//checking connection



if ($conn->connect_error) {

    die("Connection failed!: " .$conn->connect_error);

}



?>