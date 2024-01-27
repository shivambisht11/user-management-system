<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "login";


// crtete a connection
$conn = mysqli_connect($server, $username,$password,$database);

if (!$conn){
    die("Sorrry we failed to conect: ". mysqli_connect_error());
}
// else{
//     echo"Connection was successful <br>";
// }

?>