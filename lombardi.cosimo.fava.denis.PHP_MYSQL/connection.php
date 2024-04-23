<?php
$host="localhost";
$username_1="root";
$pass="admin";
$db="rimessaggio";


$conn=mysqli_connect($host, $username_1, $pass);
mysqli_select_db($conn, $db) or die('Accesso al database non riuscito: ' . mysqli_error());