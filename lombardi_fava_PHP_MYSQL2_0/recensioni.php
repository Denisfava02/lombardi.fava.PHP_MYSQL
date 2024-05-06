<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
if(!isset($_SESSION['username'])){
    require_once "logout.php";
    header("Location: reservedArea.php");}
     
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head><title>Recensioni</title>
        <link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>
    <body class="blackBody">
    
    

    <div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a>

  
        <div class="center">
            
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div>
                <?php
                if(isset($_POST['contenuto'])&&empty($_POST['contenuto'])){
                    echo "<div class='center'><p class='para'>Attenzione! Devi inserire il contenuto</p></div>";
                }else{
                    if(isset($_POST['valutazione']) ){
                        $val = $_POST['valutazione'];
                        $recensione = $_POST['contenuto'];
                        $user = $_SESSION['username'];

                        require_once "connection.php";
                        $sql = "insert into recensioni(valutazione,contenuto,nomeUtenteAssociato,data) values($val,'$recensione','$user',now())";
                        $result=mysqli_query($conn, $sql);
                        if($result)
                        echo "<div class='center'><p class='para'>Inserimento riuscito!</p></div>";
                        else
                        echo "<div class='center'><p class='para'>Inserimento non riuscito!</p></div>";
                    }
                }
                ?>
      
                <label>Valutazione(da 1 a 5 stelle):</label><br />

                <?php
                if(isset($_POST['valutazione'])) $val = $_POST['valutazione'];
                else $val = "";
                ?>
                
                
                <select name="valutazione">
         <option value="1" <?php if(isset($_POST['valutazione']) && $_POST['valutazione'] == 1) echo 'selected="selected"'; ?>>&#9733;&#9734;&#9734;&#9734;&#9734;</option>
         <option value="2" <?php if(isset($_POST['valutazione']) && $_POST['valutazione'] == 2) echo 'selected="selected"'; ?>>&#9733;&#9733;&#9734;&#9734;&#9734;</option>
         <option value="3" <?php if(isset($_POST['valutazione']) && $_POST['valutazione'] == 3) echo 'selected="selected"'; ?>>&#9733;&#9733;&#9733;&#9734;&#9734;</option>
         <option value="4" <?php if(isset($_POST['valutazione']) && $_POST['valutazione'] == 4) echo 'selected="selected"'; ?>>&#9733;&#9733;&#9733;&#9733;&#9734;</option>
         <option value="5" <?php if(isset($_POST['valutazione']) && $_POST['valutazione'] == 5) echo 'selected="selected"'; ?>>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
         </select>
          <?php //echo $_POST["valutazione"]; di debug
          if(isset($_POST['valutazione']))
          $val = $_POST['valutazione']?>


          </select>
               
                </select><br /><br />
                <label>Recensione:</label><br />
                <textarea name="contenuto" id="contenuto" cols="100" rows="50"></textarea><br /><br />
                
                
                <button class="simpleButton1" type="submit">Invia Recensione</button>
                
                
            
            </form>
            
            </div>
            <div class='center'><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' />
        </div><div class='center'><a href='info.php'><button class='simpleButton'>Informazioni</button></a>
        <a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a>
        <a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a>
        <a href="logout.php"><button class='simpleButton'>Logout</button></a></div></div> </div>
             


        </div>
        <div class="footer">&copy; Centro Caravan Europark 2023</div>
        
    </body>
</html>


