<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: collegeFinal.php");
}
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>LoginOrSignup</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />
</head>

<body>
    <div class="container">

        <body>
            <header>
                <h1>Assignment 2</h1>
            </header>
            <hr>
            <div class="form">

                <form class=register-form method="post" action="/server_registration.php">
                <h1>Register</h1>
                    <p>Please fill in this form to create an account.</p>
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password_1" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password_2" required>
                    <hr>
                    <p>By creating an account you agree to our <a href="/termsAndPrivacy.php">Terms & Conditions</a>.</p>

                    <button type="submit" class="login_signup_buttons" name="reg_user">Register</button>
                    <p class="message">Already registered? <a href="#">Sign In</a></p>
                </form>

                <form method="post" action="/login.php">
                    <h1>Login</h1>
                    Enter in your email:
                    <input type="email" name="email" placeholder="Enter Email" required />
                    <br>
                    enter in your password:
                    <input type="password" name="password" placeholder="Enter Password" required />
                    <br>
                    <button type="submit" name="btn-login" class="login_signup_buttons">Log in here</button>
                    <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo $error;         
                    }
                    ?>
                    <p class="message">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>

        </body>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="Login_Signup.js">
    </script>
    <script src="test.js"> </script>
    </html>