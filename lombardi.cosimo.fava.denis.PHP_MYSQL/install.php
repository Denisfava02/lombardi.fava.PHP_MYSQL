<?php

$host ="localhost";
$user = "root";
$password = "admin";

$connessione = new mysqli($host,$user,$password);

if($connessione === false){
    die("Errore di connesione:".$connessione->connect_error);

}



$sql = "create database rimessaggio";

if($connessione->query($sql)===true){
      echo "Creazione db avvenuta con successo!\n";
}else{
    echo "Errore nella creazione del db!\n";
}


$sql = "use rimessaggio";
if($connessione->query($sql)===true){
    echo "Database selezionato correttamente\n";
}else{
  echo "Errore nella selezione  del db!\n";
}

//creazione tabella utenti
$sql = "create table utenti( id int not null auto_increment, username varchar(100) not null unique,password varchar(100) not null,ruolo int not null, primary key(id))";
if($connessione->query($sql)===true){
    echo "Tabella utenti creata correttamente\n";
}else{
  echo "Errore nella creazione della tabella utenti!\n";
}

/*Ora creo ed inserisco l'utente admin
avra come password: admin e come username:admin, è l'unico di ruolo 1 che puo' accedere alla sezione privata Admin.php*/
$u = "admin" ;
$p = md5("admin"); 
$sql = "insert into utenti(username,password,ruolo) values('$u','$p',1)";
if($connessione->query($sql)===true){
    echo "Admin inserito correttamente!\n";
}else{
  echo "Errore nell'inserimento dell'admin!\n";
}

//creazione della tabella recensioni
$sql = "create table recensioni(id int not null auto_increment,valutazione int not null,contenuto varchar(15000),nomeUtenteAssociato varchar(100) not null,data date, primary key(id))";
if($connessione->query($sql)===true){
    echo "Tabella recensioni creata correttamente \n";
}else{
  echo "Errore nella creazione della tabella recensioni!";
}

/*Nella pagina DiconoDiNoi vengono fatte visualizzare a qualsiasi utente
registrato e non, tutte le recensioni ritenute positive, dal  3 al 5,
ovviamente a db vuoto quella sezione di pagina non visualizzerà nulla, viene qui aggiunta 
una recensione "falsa" per non far vedere vuota quella sezione di pagina all'inizializzazione,
ovviamente ma mano che verranno aggiunte recensioni da parte degli utenti quella sezione
si popolerà sempre di più */
$sql = "insert into recensioni(valutazione,nomeUtenteAssociato,contenuto,data) values(5,'falsa','falsa',now())";
if($connessione->query($sql)===true){
    echo "Recensione falsa aggiunta \n";
    
}else{
  echo "Errore nell'inserimento della recensione falsa \n";
}?>

<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head><title>Installazione</title></head>
<a href="index.html">Clicca qui per far partire il sito</a>
   
    
</body></html>














