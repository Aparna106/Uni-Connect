<?php
$username="root";
$password="";
$server="127.0.0.1:5500";
$dbname="uniconn";

$conn=mysqli_connect($username, $password, $server, $dbname);

if(!$conn){
    die "Server is not connected";
}
echo "Server is connected";

if(isset($_POST['submit'])){

    $name=mysqli_real_escape_string($conn)
}

