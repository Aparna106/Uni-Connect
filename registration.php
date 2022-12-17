<?php
    @include '';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = md5($_POST['password']);
        $club = mysqli_real_escape_string($conn, $_POST['club']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string(@conn, $_POST('contact'));

        $select = "SELECT * FROM reg_form WHERE username='$_GET[name]' && password = '$_GET[password]'"
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) 0){

            echo "User already exists.";  

            else{
                $insert = "INSERT INTO reg_form(name, password, club, email, contact) VALUES ('$name', '$password', '$club', '$email', '$contact')";
                mysqli_query($conn, $insert)
                header('location:login.html')
            }
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
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <div class="form-reg">
        <form action="http://127.0.0.1/registration.php" method="post">
            <h3>REGISTRATION</h3>
            <!-- <label for="username">Username: </label> -->
            <input type="text" placeholder="Username" name="username" required><br><br>
            <!-- <label for="password">Password: </label> -->
            <input type="text" placeholder="Password" name="password" required><br><br>
            <!-- <label for="club">Club/Association: </label> -->
            <input type="text" placeholder="Club" name="club" required><br><br>
            <!-- <label for="email">E-Mail: </label> -->
            <input type="text" placeholder="E-Mail" name="email" required><br><br>
            <!-- <label for="contact">Contact No: </label> -->
            <input type="text" placeholder="Contact No." name="contact" required><br><br><br><br>
    
            <input type="submit" name="submit" value="register" class="form-btn"></button>
            <p>Already have an account? <a href="login.html">log in!</a></p>
        </form>
    </div>
</body>
</html>