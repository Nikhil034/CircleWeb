
<?php session_start();

//session is destroy when click on logout

session_destroy();
header("location:http://localhost/CircleWeb/index.php");
?>