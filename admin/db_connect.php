<?php
// KANNAN LOCAL
// $server = 'localhost';
// $user_name = 'root';
// $pwd = '';
// $dbname = 'ims';

// LIVE
$server = 'localhost';
$user_name = 'u630935968_imstvb';
$pwd = '1234@Ims';
$dbname = 'u630935968_ims';

// SAKINA LOCAL
// $server = 'localhost';
// $user_name = 'imstvb';
// $pwd = '1234@ims';
// $dbname = 'u123478_ims';


$conn = new mysqli($server, $user_name, $pwd, $dbname);



//checking connection



if ($conn->connect_error) {

    die("Connection failed!: " .$conn->connect_error);

}



?>