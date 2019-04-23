<?php
session_start();

  include_once 'config.php';
  include_once 'query.php';  
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (isset($_POST['delete_id'])) {
        
        $id = $_POST['delete_id']; //sanitize
       
        $query = ("DELETE FROM `users` WHERE `users`.`id` = ${id}");
        $result = mysqli_query($con, $query);
        // die;
        header('Location: ' . $actual_link);
    }

    $findUser = "SELECT * FROM users";
    $findUserResult = mysqli_query($con, $findUser);

    if (isset($_POST['create_user'])) {
        while($userRow = mysqli_fetch_assoc($findUserResult)) {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            if($email === $userRow['email']) {
                $_SESSION['error'] = 'Email already exists';
            }
        }

        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = "INSERT INTO users (email, password) VALUES('$email', '$password')";
        $result = mysqli_query($con, $query);

        header('Location: ' . $actual_link); die;
    }

    $error = isset($_SESSION['error']) ? $_SESSION['error'] : false;
    unset($_SESSION['error']);

?>

<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <title>Admin Page</title>
</head>

<body>
    <header>
        <h1>Admin Page</h1>
    </header>

    <div class="table">
        <table>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>password</th>

            </tr>

            <?php if ($error) : ?>
                    <p><?php echo $error; ?></p>
            <?php endif; ?>

            <?php 
                    while($userRow = mysqli_fetch_assoc($findUserResult)) :                   
                ?>

            <tr>
                <td><?php echo $userRow['id']; ?></td>

                <td><?php echo $userRow['email']; ?></td>

                <td>
                    <?php echo $userRow['password']; ?>
                </td>

                <td>
                    <form method="POST">
                        <input type="hidden" name="delete_id" value="<?php echo $userRow['id']; ?>" value="1" />
                        <button type="submit">Delete</button>
                    </form>
                </td>

            </tr>
            <?php endwhile; ?>
        </table>

        <hr>

        <form method="POST">

            <input type="hidden" name="create_user">
            <input type="email" name="email">
            <input type="password" name="password">
            <button type="submit"> Create user </button>
        </form>
</body>

</html>