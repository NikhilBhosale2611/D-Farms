<?php 

$server = "localhost";
$user = "id15474335_comp";
$pass = "Bhosale#0101";
$database = "id15474335_company";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>