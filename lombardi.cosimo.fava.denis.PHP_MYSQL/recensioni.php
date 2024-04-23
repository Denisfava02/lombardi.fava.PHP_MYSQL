<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: reservedArea.php");}
?>




<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head><title>Recensioni</title>
        <link rel="stylesheet" href="foglioDiStile.css " type="text/css" /></head>
    <body class="blackBody">
        <div class="center"><a href="homepage.html"><img class="logo" src="europark.PNG" alt="Europark logo" /></a></div>
        <div class="center">
            <form action="recensioni.php">
                <div>
                
                <select name="valutazione" id="valutazione">
                    <option>Come valuti la tua esperienza?</option>
                    <option value="1">1 STELLA
                    </option>
                    <option value="2">2 STELLE </option>
                    <option value="3">3 STELLE</option>
                    <option value="4">4 STELLE</option>
                    <option value="5">5 STELLE</option>
                </select><br /><br />
                <label>Recensione:</label><br />
                <textarea name="message" id="message" cols="100" rows="50"></textarea><br /><br />
                
                
                <button class="simpleButton1" type="submit">Invia Recensione</button>
                
            </div>
            </form>
            <a href="logout.php" class="customLink"> <button class="simpleButton1" type="submit" name="lo">
            Logout</button></a>
             


        </div>
        <div class="footer">&copy; Centro Caravan Europark 2023</div>
        
    </body>
</html>


