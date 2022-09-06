<?php

@include 'config.php';

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select =  "SELECT * FROM user_form where email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {
        $error[] = 'user already exists!';
    }else{
        if ($pass != $cpass){
            $error[] = 'passwords not matched';
        }else {
            $insert = "INSERT INTO user_form(name, email, password) VALUES('$name', '$email', '$pass')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
}

?>

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
    <div class="random">
        <div class="register-page">
            <div class="register-content">
                <div class="form-container">
                    <h1 class="topic-text">Register Now</h1>
                    <p>Sign up for completely free today!</p>
                    <form action="" method="POST">
                        <?php
                        if(isset($error)) {
                            foreach ($error as $error) {
                                echo '<span class="error-msg">' . $error . '</span>';
                            }
                        }
                        ?>
                        <div class="input-box">
                            <input type="text" name="Name" placeholder="Enter Your First And Last Name">
                        </div>
                        <div class="input-box">
                            <input type="text" name="Username" placeholder="Enter Your Username">
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
                        <br>
                        <div class="login-text">
                            <p>Already have an account? <a href="login.php">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>