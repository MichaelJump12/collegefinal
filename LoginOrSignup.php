<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>basic.html</title>
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
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <form method="post" action="/server_registration.php">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password_1" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="password_2" required>
                <hr>
                <p>By creating an account you agree to our <a href="/termsAndPrivacy.php">Terms & Privacy</a>.</p>
                <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo $error;         
                    }
                ?>
                <button type="submit" class="login_signup_buttons" name="reg_user" >Register</button>

                <div class="signin">
                    <p>Already have an account? <a href="/home.php">Sign in</a>.</p>
                </div>
                
            </form>


        </body>
    </div>

</html>