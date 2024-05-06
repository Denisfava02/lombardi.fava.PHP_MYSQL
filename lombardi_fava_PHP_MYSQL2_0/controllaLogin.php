<?php
require_once "connection.php";
$nome_utente = $_POST["username"];
$password = $_POST["password"];
$tab_nome="utenti";

$nome_utente = stripslashes($nome_utente);
$password = stripslashes($password);
$nome_utente=mysqli_real_escape_string($conn, $nome_utente); //contiene il nome utente
$password=mysqli_real_escape_string($conn, $password);//contiene la password
$passmd5 = md5($password); //password crittografata in md5

$sql = "SELECT * FROM $tab_nome WHERE username='$nome_utente' AND password='$passmd5'";
$result=mysqli_query($conn, $sql);
$conta=mysqli_num_rows($result);

if($conta==1){
    while ($row = mysqli_fetch_array($result)){
        $ruolo = $row['ruolo'];
    }
    if($ruolo==1){
        echo "Accesso  riuscito utente admin <br />";
        session_start();
        $_SESSION['username'] = $nome_utente;
        $_SESSION['password'] = $passmd5;
        header("Location: Admin.php");

    }else{
        echo "Accesso  riuscito utente recensore <br />";
        session_start();
        $_SESSION['username'] = $nome_utente;
        $_SESSION['password'] = $passmd5;
        header("Location: homepage.php");
    }

} else {
    echo "<p class='testoSemplice>'Attenzione!Accesso non riuscito! </p>";
    //header("Location: reservedArea.html");
}?>
