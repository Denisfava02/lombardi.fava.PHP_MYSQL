
<?php

if(isset($_POST['password']))
$passw =$_POST['password'];
else $passw="";
if(isset($_POST['passwordC']))
$pass1 =$_POST['passwordC'];
else $pass1="";
if(isset($_POST['username']))
$username =$_POST['username'];
else $username="";
?>

<?php
echo "<div class='center'><h1 style='color:white'>Inserisci nome utente e password</h1></div>";
        if(isset($_POST['r'])){
            if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['passwordC'])){
                $passw = $_POST['password'];
                $pass1 = $_POST['passwordC'];
                $pattern = '/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/'; //la password deve avere almeno un carattere,almeno 1 carattere speciale
                                                                //almeno una lettera maiuscola ed almeno un numero


                if(!preg_match($pattern, $passw)){
                    echo "<div class='center'><p class='para'>Attenzione!La password deve avere almeno un carattere speciale(! @ # $ % ^ & * -),almeno 1 carattere maiuscolo,almeno un numero ed almeno 8 caratteri!</p></div>";
                    $passw ="";
                    $pass1 = "";
                    $username=$_POST['username'];
                }else{
                    if($passw != $pass1){
                        echo "<div class='center'><p class='para'>Attenzione!Le Password non corrispondono!</p></div>";
                        $passw ="";
                        $pass1 = "";
                    }else{
                        //se sono qui posso inserire nel database l'utente
                        $username=$_POST['username'];
                        $passw=md5($_POST['password']);

                        require_once "connection.php";

                        $sql="insert into utenti(username,password,ruolo) values('$username','$passw',2)";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            session_start();
                            $_SESSION['username']=$username;
                            $_SESSION['password']=$pass;
                               header("Location:recensioni.php");
                        }else{ //se la query è fallita significa che è già presente un username uguale nel db
                              //essendo username dichiarato come unique all'interno del db
                            echo "<div class='center'><p class='para'>Attenzione!Cambiare username</p></div>";
                            $passw=$_POST['password'];
                            $pass1=$_POST['passwordC'];
                            $username="";

                        }
                        

                    }
                }  
        }else{
            if(empty($_POST['password']) && empty($_POST['username']) && empty($_POST['passwordC'])){
                echo "<div class='center'><p class='para'>Inserire i dati!</p></div>";
                $passw="";
                $username="";
                $username = "";
            } 
            if(empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['passwordC'])){
                echo "<div class='center'><p class='para'>Inserire Username!</p></div>";
                $passw=$_POST['password'];
                $pass1=$_POST['passwordC'];
                
            } 
            if(empty($_POST['password'])){
                echo "<div class='center'><p class='para'>Inserire Password!</p></div>";
                $pass1="";
                $username=$_POST['username'];
            } 
            if(!empty($_POST['password']) && empty($_POST['passwordC'])){
                echo "<div class='center'><p class='para'>Inserire conferma Password!</p></div>";
                $passw=$_POST['password'];
                $username=$_POST['username'];
            } 

            
        }
    
    
    }
        echo "<?xml version='1.0' encoding='UTF-8'?>";
    
        ?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head><title>Registrazione Utente</title>
<link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>
<body class="blackBody">
    <div class="center">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
         <label>Username</label> <br />  
        <input type="text" name = "username" size="100" value="<?php echo $username?>" /> <br /><br />
        <label>Password</label><br />
        <input type = "password" name = "password" size = "100" value="<?php echo $passw?>"><br /><br />
        <label>Conferma password</label><br />
        <input type = "password" name = "passwordC" size = "100" value="<?php echo $pass1?>">
        <button type = "submit" class="simpleButton1" name ="r">Registrati</button>
        <button type = "reset" class="simpleButton1">Annulla</button>
        
        </form>
    </div>
</body>

</html>