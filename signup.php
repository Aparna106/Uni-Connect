<?php
session_start();
    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something posted
    $user_name=$_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users(user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($conn, $query);

        header("Location: loginreal.php");
        die;
    }
    
    else
    {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Registration</title>
    <link rel="stylesheet" href="stylereg.css">
</head>
<body>
    <div class="form-reg">
        <form method="post">
            <h1>REGISTRATION</h1>
            <!-- <label for="username">Username: </label> -->
            <input class="username" type="text" placeholder="Username" name="username" required><br><br>
            <!-- <label for="password">Password: </label> -->
            <input class="password" type="text" placeholder="Password" name="password" required><br><br>
            <!-- <label for="club">Club/Association: </label> -->
            <input class="club" type="text" placeholder="Club" name="club" required><br><br>
            <!-- <label for="email">E-Mail: </label> -->
            <input class="email" type="text" placeholder="E-Mail" name="email" required><br><br>
            <!-- <label for="contact">Contact No: </label> -->
            <input class="contact" type="text" placeholder="Contact No." name="contact" required><br><br><br><br>
    
            <button><input type="submit" name="submit" value="Register" class="form-btn"></button>
            <p>Already have an account? <a href="loginreal.php">log in!</a></p>
        </form>
    </div>
</body>
</html>