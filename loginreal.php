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
            //read from database
            $query = "select * from users where user_name = $user_name";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }else
            echo "wrong username or password";
        }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="form-reg">
        <form method="post">
            <h3>Login</h3>
            <!-- <label for="username">Username: </label> -->
            <input class="username" type="text" placeholder="Username" name="username" required><br><br>
            <!-- <label for="password">Password: </label> -->
            <input class="password" type="text" placeholder="Password" name="password" required><br><br>
            
            <button><input class="login" type="submit" name="submit" value="login" class="form-btn"></button>
            <p>Don't have an account? <a href="signup.php">Register now!</a></p>
        </form>
    </div>
</body>
</html>