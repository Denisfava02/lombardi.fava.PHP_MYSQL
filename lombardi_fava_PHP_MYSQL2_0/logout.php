<?php
session_start();

$_SESSION = array();

session_destroy();
setcookie("PHPSESSID",'',time()-1,'/');

header("Location: homepage.php");
