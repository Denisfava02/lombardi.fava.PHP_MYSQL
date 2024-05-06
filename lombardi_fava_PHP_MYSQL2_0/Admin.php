<?php
session_start();
if(!isset($_SESSION['username'])){
    require_once "logout.php";
    header("Location: reservedArea.php");}
     
?>

<?php
require_once "connection.php";
$sql = "select avg(valutazione) as m from recensioni";
$result=mysqli_query($conn, $sql);
$media = 0.0;
if(!$result){
    echo "<p class='para'>Errore nella query!</p>";
}else{
    while($row = mysqli_fetch_array($result)){
          $media = number_format($row['m'],2); //visualizzo  fino alla 2 cifra decimale
    }

}

$tot = 0;
$sql = "select count(*) as t from recensioni"; //conto il totale delle recensioni presenti nel db
$result = mysqli_query($conn,$sql);
if($result) {
    while($row = mysqli_fetch_array($result)){
        $tot = $row['t'];
    }
}

$oggi = 0;
$sql = "select count(*) as o from recensioni where data = date(now())"; //conto le recensioni odierne
$result = mysqli_query($conn,$sql);
if($result){
    while($row = mysqli_fetch_array($result)){
        $oggi = $row['o'];
    }
}

//$prova = 1;                 
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
    
    
        <div class="center"><img class="logo" src="europark.PNG" alt="Europark logo" />
        <a href="logout.php" class="customLink"> <button class="simpleButton1" type="submit" name="lo">Logout</button></a></div>
            <div class="colonnaGrande">
                <h1><?php echo "Benvenuto ".$_SESSION['username'];?></h1>
                <p class="testoSemplice">Media Recensioni: <?php echo $media;?> STELLA/E</p>
                <p class="testoSemplice">Totale recensioni: <?php echo $tot;?> </p>
                <p class="testoSemplice">Recensioni di oggi: <?php echo $oggi?></p>
                <form name="scelta" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                

                 <div class="buttonContainer">
                
                 <button class="simpleButton" name = "tutte">Tutte</button>
                 <button class="simpleButton" name = "negative">Negative</button>
                 <button class="simpleButton" name = "positive">Positive</button> 
                 <button class="simpleButton" name = "elimina">Elimina</button> <br />

                 <select name = "el">
                 <?php
                    $sql1 = "  select  id,nomeUtenteAssociato,data from recensioni";
                    $result1 = mysqli_query($conn,$sql1); 
                    while ($row = mysqli_fetch_array($result1)){
                        
                        echo "<option value=\"". $row['id']." ".$row['nomeUtenteAssociato']." ".$row['data']."\">".$row['id']." ".$row['nomeUtenteAssociato']." ".$row['data']."</option> \n";
                    }
                    ?></select>
                    
                
                 </div>

                 <!--<div class="center"><button class="simpleButton" name = "tutte">Tutte le recensioni</button></div>-->
                
                
                </form>
            </div>
            <div class="colonnaGrandeScroll">
            <?php if(isset($_POST['elimina']) && isset($_POST['el']) && !empty($_POST['el'])){
                
                $id = $_POST['el']; $id = explode(' ',$_POST['el']);
                $sql = "delete from recensioni where id = $id[0]";
                $result = mysqli_query($conn,$sql);
                if($result) header("Refresh:0");
                else echo "Eliminazione non riuscita!";}?>
                <?php if(isset($_POST['tutte']) ){
                    $sql = "select * from recensioni";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_array($result)){
                            echo "<p class='testoSemplice'><strong>Id:</strong> ".$row['id']."</p>";
                            echo "<p class='testoSemplice'><strong>Nome utente:</strong> ".$row['nomeUtenteAssociato']."</p>";
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
                    } 
                }else{if(isset($_POST['negative'])){
                    $sql = "select * from recensioni where valutazione <= 2";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_array($result)){
                            echo "<p class='testoSemplice'><strong>Id:</strong> ".$row['id']."</p>";
                            echo "<p class='testoSemplice'><strong>Nome utente:</strong> ".$row['nomeUtenteAssociato']."</p>";
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
                    }
                }else{
                    if(isset($_POST['positive'])){
                        $sql = "select * from recensioni where valutazione >= 3";
                        $result = mysqli_query($conn,$sql);
                        if($result){
                            while($row = mysqli_fetch_array($result)){
                                echo "<p class='testoSemplice'><strong>Id:</strong> ".$row['id']."</p>";
                                echo "<p class='testoSemplice'><strong>Nome utente:</strong> ".$row['nomeUtenteAssociato']."</p>";
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
                        }
                    }else{ //se non premo nulla di default visualizzo tutte le recensioni
                        $sql = "select * from recensioni";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        while($row = mysqli_fetch_array($result)){
                            echo "<p class='testoSemplice'><strong>Id:</strong> ".$row['id']."</p>";
                            echo "<p class='testoSemplice'><strong>Nome utente:</strong> ".$row['nomeUtenteAssociato']."</p>";
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
                    } 
                    }

                }
            }?></div>
    <div class="footer">&copy; Centro Caravan Europark 2023</div>
</body>


</html>
