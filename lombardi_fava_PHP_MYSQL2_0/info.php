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

echo "<div class='center'><a href='homepage.php'><img class='logo' src='europark.PNG' alt='Europark logo' /></a><div class='buttonContainer'><div><img class='gif' src='camperWithAuto.gif' alt='nice gif' /></div><div class='center'><a href='reservedArea.php'><button class='simpleButton'>Login</button></a><a href='info.php'><button class='simpleButton'>Informazioni</button></a><a href='leFigure.php'><button class='simpleButton'>Le figure di riferimento</button></a><a href='DiconoDiNoi.php'><button class='simpleButton'>Dicono di noi</button></a></div></div> </div>";

} ?>

                
    <div class="colonnaIdi3">
        <h1>Storia della nostra attività</h1>
         <p class="testoSemplice">
            Il Centro Caravan Europark nasce nelle campagne di <em>Borgo Hermada</em>, una piccola frazione
            facente parte del comune di <em>Terracina</em>, in provincia di <em>Latina</em>, dall'ingegno e 
            dal fiuto di Lombardi Cosimo e di suo figlio Lombardi Antonio. In pochi anni l'Europark è cresciuto
            quasi esponenzialmente, dai 2 capannoni del 1988 fino ai conclusivi 10 capannoni del 1995. Ad oggi è uno
            dei più grandi rimessaggi del Lazio, con circa all'attivo <strong>523</strong> mezzi fra roulottes, camper,
            barche, gommoni e carrelli tenda . Nel corso dei vari anni numerose sono state le marche passate per il rimessaggio, menzione 
            d'onore per Roller, Adria, Caravelair, Laika e moltre altre...
            
         </p>
         <img id="imageCamper" src="camper1.jpg" alt="contate su di noi" />

    </div>
    <div class="colonnaIdi3">
        <h1>Servizi</h1>
        <p class="testoSemplice">
            Offriamo numerosi servizi, siamo <strong>specializzati su roulottes,camper,carelli tenda,barche,gommoni.</strong> Non solo Offriamo 
            rimessaggio e manutenzione per il vostro mezzo, ma abbiamo anche un'officina operativa per lavori più importanti. Siamo anche un centro convenzionato
            Conver, ossia vendiamo verande e tende varie per tutte le esigenze di voi campeggiatori e non. Di seguito vengono mostrati alcuni dei nostri servizi
            ed il prezzario:
        </p>
        <ul>
            <li>Rimessaggio</li>
            <li>Manutenzione</li>
            <li>Lavori Vari</li>
            <li>Trasporto mezzo al campeggio o altra posizione entro 50km dalla sede</li>
        </ul>

        <h3>Prezzario</h3>
        <table class="priceTable" border="1"
        cellspacing="3" 
        cellpadding="5">
            <thead>
                <tr>
                    <th>Mezzo</th>
                    <th>Durata Contratto</th>
                    <th>Prezzo</th>
                    <th>Manutenzione</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Roulotte</td>
                    <td>1 anno</td>
                    <td>&euro; 285,00</td>
                    <td>Compresa</td>
                </tr>
                <tr>
                    <td>Camper</td>
                    <td>1 anno</td>
                    <td>&euro; 400,00</td>
                    <td>Compresa</td>
                </tr>
                <tr>
                    <td>Carrello tenda</td>
                    <td>1 anno</td>
                    <td>&euro; 150,00</td>
                    <td>Compresa</td>
                </tr>
                <tr>
                    <td>Barca</td>
                    <td>1 anno</td>
                    <td>&euro; 650,00</td>
                    <td>Compresa</td>
                </tr>
                <tr>
                    <td>Gommone</td>
                    <td>1 anno</td>
                    <td>&euro; 600,00</td>
                    <td>Compresa</td>
                </tr>
                

            </tbody>
            </table>

    </div>
    <div class="colonnaIdi3">
        <h1>Informazioni utili e contatti</h1>
        <p class="testoSemplice">Il rimessaggio è aperto tutti i giorni <strong>tranne la domenica</strong>
        dalle ore 07:00 fino alle 12.30 e dalle 14:30 fino alle 19:00</p>
        <p class="testoSemplice">
            Recapiti telefonici: 0773770132 <br /> 3385351831 <br /> 3393444567 <br />
            e-mail: info@centrocaravaneuropark.it <br /> antonio.lombardi@centrocaravaneuropark.it <br />sara.alonzi@centrocaravaneuropark.it <br />
            Il rimessaggio è situato in strada Macchiarella, 41 Borgo Hermada,Terracina(LT) 04019 <br />
            <strong>Clicca sull'immagine di sotto per visualizzare la nostra posizione Google Maps</strong>
        </p>
        <a href="https://maps.app.goo.gl/Fj7q8kNC7gyPWKoG6"><img id="gmapsImage" src="gmaps.png" alt="posizione" /></a>
        
        
        

    </div>
    

    <div class="footer">&copy; Centro Caravan Europark 2023</div>
</body>


</html>
