<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Dicono su di noi</title>
    <link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>

<body class="blackBody">
<?php 
session_start();

if(isset($_SESSION['username'])){
    

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='center'><p='para'>Benvenuto ".$_SESSION['username']." "."</p></div><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a><a href='logout.php'> <button class='simpleButton' type='submit' name='lo'>Logout</button></a></div></div> </div>";

}else{

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='reservedArea.php'><button class='simpleButton'>Login</button></a><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a></div></div> </div>";

} ?>


    <div class="colonnaGrande">
        <h1>Ringraziamenti</h1>
        <p class="testoSemplice">Alla vostra destra potete trovare alcune recensioni 
            lasciate da nostri clienti, tutto lo staff del <strong>Centro Caravan Europark</strong>
            vi ringrazia per le belle parole lasciate nei nostri confronti!
            <strong>Se anche tu vuoi lasciare una recensione clicca sul camper qui sotto</strong>
        </p>
        <div>
        <a href="recensioni.php"><img class="camper" src="camper.png" alt="camper felice" /></a></div>
        
    </div>
    <div class="colonnaGrandeScroll">
        <?php require_once "connection.php";
    $sql = "select * from recensioni where valutazione>= 3";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_array($result)){
                            
                            echo "<p class='testoSemplice'><strong>Nome :</strong> ".$row['nomeUtenteAssociato']."</p>";
                            echo "<p class='testoSemplice'><strong>Valutazione:</strong>";
                                for($i=0; $i<$row['valutazione']; $i++)
                                    echo "<span>&#9733;</span>";            //&#9733; è il codice per la stella piena
                                for($i=0; $i<(5-$row['valutazione']); $i++)
                                    echo "<span>&#9734;</span>";            //&#9734; è il codice per la stella vuota
                                "</p>";
                            echo "<p class='testoSemplice'><strong>Contenuto:</strong> ".$row['contenuto']."</p>";
                            echo "<p class='testoSemplice'><strong>Data:</strong> ".$row['data']."</p>";
                            echo "<hr />";

                        }
                    }?>
    </div>  
    
    <div class="footer">&copy; Centro Caravan Europark 2023</div>

</body>
</html>
