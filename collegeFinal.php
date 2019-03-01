<?php
 session_start();
if (!isset($_SESSION['email'])) {
    header("Location: LoginOrSignup.php");
}
    include_once 'config.php';
    include_once 'query.php';    
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>UploadAFile</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />

</head>

<div class="containerCollegeFinal">

    <body>
        <header>
            <h1>Assignment 2</h1>
        </header>
        <?php
        if(!isset($_GET['screen_check']))
        {
            echo "<script language='JavaScript'>
            <!-- 
            document.location=\"$PHP_SELF?screen_check=done&Width=\"+screen.width+\"&Height=\"+screen.height;
            //-->
            </script>";
        }
        else 
        {           
            if (isset($_GET['Width']) && isset($_GET['Height'])) {       
                echo "<h1><center>The resolution of the screen in use is ".$_GET['Width']." x ".$_GET['Height'].".</center></h1><br />";       
            }
        }
        $agent = $_SERVER["HTTP_USER_AGENT"];
        echo $_SERVER['HTTP_USER_AGENT'];
        $browser = get_browser();
        print_r($browser);

        if (preg_match('/Chrome[\/\s](\d+\.\d+)/', $agent) ) {
            echo  "<br><br><br>"
            ."You're using Chrome";
          }
       ?>


        <?php

            // configuration
            $url = 'http://domain.com/backend/editor.php';
            $file = '/path/to/txt/file';

            // check if form has been submitted
            if (isset($_POST['text']))
            {
                // save the text contents
                file_put_contents($file, $_POST['text']);

                // redirect to form again
                header(sprintf('Location: %s', $url));
                printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
                exit();
            }

            // read the textfile
            // $text = file_get_contents($file);

        ?>


        <h3> FILE UPLOADING </h3>
        <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Filename:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required />

            <br>
            <input type="submit" name="btn-submitFile" value="Submit" />
        </form>

        <div class="table">
            <table>
                <tr>
                    <th>Filename</th>
                    <th>Filesize</th>
                    <th>Filetype</th>
                    <th>Download File</th>
                </tr>
                <?php 
                    while($fileRow = mysqli_fetch_assoc($findFilesResult)) {
                    include_once 'filesize.php';
                ?>
                <tr>
                    <td><?php echo $fileRow['filename']; ?></td>
                    <td><?php echo $fileRow['filesize']; ?></td>
                    <td><?php echo $fileRow['filetype']; ?></td>
                    <td><a href="<?php echo $fileRow['storagefile']; ?>" target="blank">Download</a></td>
                </tr>
                <?php } ?>
            </table>
            <p class="message"><a href="/randomGame.php">Random game</a></p>
        </div>
        <footer class="footer">
            <h3> Michael Kapranos &copy; <?php echo date("Y"); ?> </h3>
            <p><a href="/logout.php"> Log out, back to login page</a></p>
        </footer>
    </body>
</div>

</html>