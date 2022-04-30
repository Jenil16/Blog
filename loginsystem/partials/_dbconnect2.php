<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "feedback";

$coni = mysqli_connect($server, $username, $password, $database);
if (!$coni){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>