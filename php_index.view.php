<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>basic.html</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="assets/css/xamppPhpCss.css" />
</head>

<div class="container">

    <body>
        <header>
            <h1>
                <?php                   
                echo $greeting;  
            ?>
            </h1>
        </header>

        <div class="namesList">
            <?php
                foreach ($names as $names){
                    echo "<li>$names<br><br></li>";               
                }    
            ?>
        </div>

        <?php
        foreach ($person as $key => $feature) : ?>
        <li><strong><?= ucwords($key); ?></strong> <?=':', $feature; ?></li>
        <?php endforeach; ?>
        <br>
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title']; ?>
            </li>

            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>

            <li>
                <strong>Status: </strong>

                <?php
                    if ($task['completed']){
                        echo '&#9762';
                    }else {
                        echo 'incomplete';
                    }
                    ?>
            </li>
        </ul>
        <form>
            <input type="text" name="value">
            <input type="submit">
        </form>

        <?php
            @$Value=$_GET['value'];   
            echo ("You entered " .$Value);
        ?>

        <footer class="footer">
            <h3> Michael Kapranos &copy; <?php echo date("Y"); ?> </h3>
        </footer>

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

    if(isset($_GET['Width']) && isset($_GET['Height'])) {

        echo "<h1>Your screen resolution is ".$_GET['Width']." x ".$_GET['Height'].".</h1><br />";
}
     }

               // Resolution not detected
     

?>
        <h1>f</h1>
        <H1>F</H1>
        <H1>F</H1>
        <h1>f</h1>
        <H1>F</H1>
        <H1>F</H1>
        <H1>F</H1>
        <H1>F</H1>
        <H1>F</H1>
        <H1>F</H1>
    </body>
</div>

</html>