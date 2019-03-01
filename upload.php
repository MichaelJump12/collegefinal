<?php
    include_once 'config.php';
?>

<html>
<head><title>File uploaded</title></head>
<body>
<center>
<h3>File uploaded !! <h3>
<hr>
<?php

$target_dir = "uploads/files/";
$target_file_frontend = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_size = $_FILES["fileToUpload"]["size"];
$target_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;

if(isset($_POST["btn-submitFile"]))
{
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($target_file_size > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $query = "INSERT INTO files (filename, storagefile, filesize, filetype) VALUES ('$target_file_frontend', '$target_file', '$target_file_size', '$target_file_type')";

    if(!mysqli_query($con, $query)) {
        die('Error: File not uploaded');
    } else {
        echo "1 record added";
        header ("Location: collegeFinal.php");
    }

}

?> 

</body>
</html>