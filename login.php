<?php
@include 'eventSub.html'

$username="root";
$password="";
$server="127.0.0.1:5500";
$dbname="uniconn";

$conn=mysqli_connect($username, $password, $server, $dbname);

if(!$conn){
    die("Could not connect to the database");
}
echo "<br>Connected to the database";

$rs=mysqli_query($conn,"SELECT * FROM `reg_form` WHERE `username`='$_GET[name]' AND 'password' = '$_GET[password]'");
if(!$rs){
    die("Could not find the data in db");
}
while($row = $rs->fetch_assoc())
{
    echo "<br/>".$row['fname'];
    echo "<br/>".$row['lname'];
    echo "<br/>".$row['sem'];
    echo "<br/>".$row['total'];
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="form-reg">
        <form action="registration.php" method="post">
            <h3>Login</h3>
            <!-- <label for="username">Username: </label> -->
            <input type="text" placeholder="Username" name="username" required><br><br>
            <!-- <label for="password">Password: </label> -->
            <input type="text" placeholder="Password" name="password" required><br><br>
            
            <input type="submit" name="submit" value="login" class="form-btn"></button>
            <p>Don't have an account? <a href="register.html">Register now!</a></p>
        </form>
    </div>
</body>
</html>