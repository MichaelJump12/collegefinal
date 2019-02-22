<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />
    <title>Document</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Assignment 2</h1>
            <p>The log in page.</p>
        </header>

        <form method="post" action="/login.php">
            Enter in your email:
            <input type="email" name="email" placeholder="Enter Email" required />
            <br>
            enter in your password:
            <input type="password" name="password" placeholder="Enter Password" required />
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo $error;         
                    }
                ?>
            <br>
            <button type="submit" name="btn-login" class="login_signup_buttons">Log in here</button>

        </form>
        <br>
        <div class="signin">
            <p>Dont have an account? <a href="/LoginOrSignup.php">Sign up</a>.</p>
        </div>

        <footer class="footer">
            <h3> Michael Kapranos &copy; <?php echo date("Y"); ?> </h3>
        </footer>

    </div>

</body>

</html>