<?php
@include 'config.php';

session_start();
if(!issest())

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Submission Form</title>
    <link rel="stylesheet" href="eventSub.css">
</head>
<body>
    <h3>EVENT SUBMISSION FORM</h3>
    <div class="form-eventSub">
        <form action="eventSub.php" method="post">
            <div class="container-left">
                <form action="" method="get">
                    
                </form>
            </div>
            <div class="container-right">

            </div>
        </form>
    </div>
    
</body>
</html>