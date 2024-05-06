<?php
session_start();

     
?>


<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>
    <title>Le Figure</title>
    <link rel="stylesheet" href="foglioDiStile.css " type="text/css" />

</head>

<body class="blackBody">
    
<?php 

if(isset($_SESSION['username'])){
    

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='center'><p='para'>Benvenuto ".$_SESSION['username']." "."</p></div><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a><a href='logout.php'> <button class='simpleButton' type='submit' name='lo'>Logout</button></a></div></div> </div>";

}else{

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='reservedArea.php'><button class='simpleButton'>Login</button></a><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a></div></div> </div>";

} ?>
    
    <div class="colonnaGrande">
        <h1 >Antonio Lombardi</h1>
        <p class="testoSemplice">
           Antonio Lombardi nasce a <a href="https://it.wikipedia.org/wiki/Terracina">Terracina(LT)</a> il 12/12/1974.Insieme a suo padre <em>Cosimo</em>,
           esattamente nel <strong>1988</strong> fonda il Centro Caravan Europark situato nei possedimenti del vecchio podere
           ONC dove è cresciuto da piccolo. Da quel momento in poi la sua passione per questo mondo non è mai diminuita , tutt'ora dopo oltre
           30 anni d'esperienza non smette mai di imparare e di sperimentare nuove tecniche. Insieme a Sara Alonzi(proprietaria) gestisce il rimessaggio.<br />
           <strong>Titoli conseguiti nel corso del tempo:</strong>
        </p>
        <ul>
            <li>Manutentore esperto(1990)</li>
            <li>Manutentore esperto 2° livello(1992)</li>
            <li>Attrezzista specializzato(1993)</li>
            <li>Attrezzista specializzato(1993)</li>
        </ul>
        <p class="testoSemplice"><em>and still growing...</em></p>
        <p class="testoSemplice"><strong>Numero di telefono: </strong>3385351831</p>
        <p class="testoSemplice"><strong>E-mail:</strong>antonio.lombardi@centrocaravaneuropark.it</p>
        <img class="Image" src="fotoUomo.jpg" alt="Antonio Lombardi" />

    </div>

    <div class="colonnaGrande">
        <h1>Sara Alonzi</h1>
        <p class="testoSemplice">
        Sara Alonzi nasce a <a href="https://it.wikipedia.org/wiki/Terracina">Terracina(LT)</a> il 1/07/1976. A 19 anni, nel 1995, conosce Antonio e 
        esattamente quattro anni dopo si sposano. Ad oggi Sara, oltre ad essere una stupenda mamma, è anche la <strong>proprietaria</strong>
        del centro, con il passare del tempo la sua intelligenza ed anche la sua voglia di fare le hanno permesso di organizzare e gestire al meglio
        le varie risorse ed attività dell'Europark.</p>
        <p class="testoSemplice"><strong>Numero di telefono: </strong>3393444567</p>
        <p class="testoSemplice"><strong>E-mail:</strong>sara.alonzi@centrocaravaneuropark.it</p>
        <img class="Image" src="fotoDonna.jpg" alt="Sara Alonzi" />
    </div>


    <div class="footer">&copy; Centro Caravan Europark 2023</div>

</body>
</html>
