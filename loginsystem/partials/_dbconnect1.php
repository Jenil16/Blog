<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "svit";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}


$sql="Select * from svit";
$query=mysqli_query($con, $sql);


echo '<div class="class">jenil</div>';



?>