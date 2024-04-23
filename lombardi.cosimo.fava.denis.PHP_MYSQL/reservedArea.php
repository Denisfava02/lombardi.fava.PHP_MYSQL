<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Area Riservata</title>
    <link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>
<body class="blackBody">
    <div class="center">
        <a href="homepage.html"><img class="logo" src="europark.PNG" alt="Europark logo" /></a>
        <form action="reservedArea.php" method="post">
            <div>
        <p class="para">Username:</p>
        <input class="input" type="text" name="username" />
        <p class="para">Password:</p>
        <input class="input" type="password" name="password" />
        <button class="simpleButton1" type ="submit">Accedi</button>
        </div>
    </form>
    <div class="center"><p class="para">Non registrato? <a href="registrazioneUtente.php">Clicca qui per registarti</a></p></div>
    
    </div>
    
    <div class="footer">&copy; Centro Caravan Europark 2023</div>

    <?php
require_once "connection.php";
if(isset($_POST["username"]) && isset($_POST["password"])){
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
        header("Location: recensioni.php");
    }

} else {
    echo "<div class='center'><p class='para'>Attenzione!Accesso non riuscito! Username o password errati! </p></div>";
    //header("Location: reservedArea.html");
}
}

?>


</body>
</html>
