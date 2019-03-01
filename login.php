<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// SELECT * FROM users where USERNAME=$username AND WHERE password=password
//Find Files
$query = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
$conn = mysqli_connect("localhost","root","","collegeFinal");
$result = mysqli_query($conn, $query);
$error = "username/password incorrect";

if ($rowcount = mysqli_num_rows($result)) {     
    
    $_SESSION["email"] = $email;
    header("Location: loginSpinner.php");
} else {

    
    $_SESSION["error"] = $error;
    header("Location: LoginOrSignup.php" );
}

?>