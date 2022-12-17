<?php
    @include 'config.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = md5($_POST['password']);
        $club = mysqli_real_escape_string($conn, $_POST['club']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string(@conn, $_POST('contact'));


        $select = "SELECT * FROM 'reg_form' WHERE username = '$_GET[name]' && password = '$_GET[password]'";
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
        
            $row = mysqli_fetch_array($result);
            header('location:eventSub.html');
        }
        else {
            error[] = 'Incorrect username or password';
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
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="form-reg">
        <form action="registration.php" method="post">
            <h3>Login</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>'; 
                    };
                };
            ?>
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