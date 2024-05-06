<?php
session_start();

     
?>



<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Centro Caravan Europark</title>
    <link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>
<body class="blackBody">
    
    
<?php 

if(isset($_SESSION['username'])){
    

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='center'><p='para'>Benvenuto ".$_SESSION['username']." "."</p></div><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a><a href='logout.php'> <button class='simpleButton' type='submit' name='lo'>Logout</button></a></div></div> </div>";

}else{

echo "<div class='center'><a href='homepage.html'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='reservedArea.php'><button class='simpleButton'>Login</button></a><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a></div></div> </div>";

} ?>
                
                <div class="slider_container">
                    <div class="slider">
                      <div class="slide one">
                        <img src="nightCamper.jpg" alt="" />
                        <span class="caption"> Vivi i tuoi sogni </span>
                      </div>
                      <div class="slide two">
                        <img src="fear.png" alt="Senza paura" />
                        <span class="caption"> Senza Paura </span>
                      </div>
                      <div class="slide three">
                        <img src="vistaMare.jpg" alt="Vista mare dal Tempio di Giove" />
                        <span class="caption"> Agro Pontino </span>
                      </div>
                      <div class="slide four">
                        <img src="avventure.jpg" alt="avventura" />
                        <span class="caption"> Avventura </span>
                      </div>
                      <div class="slide five">
                        <img src="fel.jpg" alt="felicità" />
                        <span class="caption"> Felicità </span>
                      </div>
                      
                    </div>
                </div>
                
                <p class="testoSemplice"><br />Facilmente raggiungibile da Roma Latina e Frosinone, a pochi chilometri da Terracina, Sabaudia e San felice circeo. Al centro di questo ipotetico triangolo si trova il Centro Caravan Europark, una struttura adibita a RIMESSAGGIO per custodire nel migliore dei modi Camper, Roulotte, Barche, Carrelli .
                    La struttura si estende su una superficie di 6.000 mq a Terracina nella zona di Borgo hermada, comodamente raggiungibile e facilmente transitabile. La struttura è illuminata e dotata di moderni sistemi di antifurto e dispone di piazzole coperte e non, dispone di 600 posti.
                    Lo stabile è di recente costruzione, quindi dispone di tutte quelle caratteristiche che le norme richiedono. la necessità di garantire una alta qualità nel proporsi come ideale struttura di rimessaggio di Camper, Roulotte, Barche. <br />
                    
                    </p>
                <p id="simple"><strong>I nostri prezzi sono vantaggiosi vi aspettiamo!</strong></p>
            </div>
                

    
    
    
    <div class="footer">&copy; Centro Caravan Europark 2023</div>
</body>


</html>
