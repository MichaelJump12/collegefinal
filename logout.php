<?
session_start();
session_unset();
session_destroy();

var_dump("test");
die;

header("Location: /collegeFinal.php");
exit();
?>