<?php
session_start();
include_once 'config.php';
// initializing variables

// ........... $errors = array(); 
$regErrors = "";

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
 
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password_1']);
  $confirmPassword = mysqli_real_escape_string($con, $_POST['password_2']);

if($password == $confirmPassword) {
    $query = "INSERT INTO users (email, password) VALUES('$email', '$password')";
    $result = mysqli_query($con, $query);
    if($result) {
      
      header('location: LoginOrSignup.php');
    } else { ?>
      <script type='text/javascript'>
        alert('Email exists');
      </script>
    <?php 
    header('location: LoginOrSignup.php');
    }
} else { ?>
  <script type='text/javascript'>
  alert('passwordss not match');
  </script>
<?php 
  header('location: LoginOrSignup.php');

}
}
 


