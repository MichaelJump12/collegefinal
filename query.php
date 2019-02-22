<?php 

//Find Files
$findFiles = "SELECT * FROM files";
$findFilesResult = mysqli_query($con, $findFiles);


//filesize
$totalFileSizeQuery = mysqli_query($con, "SELECT * FROM files");
$totalFileSize = mysqli_fetch_array($totalFileSizeQuery, MYSQLI_ASSOC);


?>
