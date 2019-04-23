<?php
session_start();
$fileName = $_GET['filename'];
include_once 'config.php';

include_once 'query.php'; 
//check file is in database
     //echo and die

$fileContents = file_get_contents('uploads/files/' . $fileName);
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$findFile = "SELECT * FROM files";
$findFileResult = mysqli_query($con, $findFile);
if (isset($_POST['file_contents'])) {

    while($fileRow = mysqli_fetch_assoc($findFileResult)) {
        $file = mysqli_real_escape_string($con, (isset($_POST['filename'])));
        if($file =! $fileRow['filename']) {
            $_SESSION['error'] = 'file doesnt exists';
        }
    }


    $fileContents = $_POST['file_contents'];
    file_put_Contents("uploads/files/".$fileName, $fileContents);
    
   echo("worked");
   
    // header('Location: ' . $actual_link);

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
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />
    <title>Document</title>
</head>

<body>
<?php if ($error) : ?>
                    <p><?php echo $error; ?></p>
            <?php endif; ?>
    <form method="POST">
        <div class="textContents">
            <textarea class="textContents" name="file_contents"><?php echo $fileContents ?></textarea>
        </div>
        <button class="textSubmit" type="submit">Edit</button>
    </form>
</body>

</html>