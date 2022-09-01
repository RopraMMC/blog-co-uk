<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./register_form.css">
    <title>Ropra • Blog</title>
    <link rel="icon" type="image/x-icon" href="Studio-Project.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ====== Fontawesome CDN Link ====== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>
<body>
<?php include "header.php"; ?>
    <div class="register-page">
        <div class="register-content">
            <div class="form-container">
                <h1 class="topic-text">Register Now</h1>
                <p>Sign up for completely free today!</p>
                <form action="" method="POST">
                    <div class="input-box">
                        <input type="text" name="Name" placeholder="Enter Your First And Last Name">
                    </div>
                    <div class="input-box">
                        <input type="text" name="Email" placeholder="Enter Your Email">
                    </div>
                    <div class="input-box">
                        <input text="password" name="Password" placeholder="Enter Your Password">
                    </div>
                    <div class="input-box">
                        <input text="password" name="cPassword" placeholder="Confirm Your Password">
                    </div>
                    <div class="button">
                        <input type="submit" value="Register Now">
                    </div>
                    <div class="login-text">
                        <p>Already have an account? <a href="login.php">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
</body>