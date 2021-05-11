<?php

ini_set("display_errors", 1);

require_once 'User.php';
require_once 'Admin.php';

$user1 = new User('1', 'Fabio.Vitti@gmail.com');
$user1->nome = "Fabio";
$user1->cognome = "Vitti";
$user1->setUsername('FabVi97');
$user1->dataNascita = '1997';
$user1->setEta();
$user1->returnEmail();

echo 'Nome:'.$user1->nome = "Fabio";
echo '<br>';
echo 'Cognome:'.$user1->cognome = "Vitti";
echo '<br>';
echo 'Username:'.$user1->getUsername('FabVi97');
echo '<br>';
echo 'Anno di nascita:'.$user1->dataNascita = '1997';
echo '<br>';
echo 'Età:'.$user1->getEta();
echo '<br>';
echo 'Email:'.$user1->returnEmail();

var_dump($user1);


$ruolo1 = new Admin('2', 'Noemi.rea@libero.it');
$ruolo1->ruolo = 'Amministratore';
$ruolo1->nome = "Noemi";
$ruolo1->cognome = "Rea";
$ruolo1->setUsername('No97');
$ruolo1->dataNascita = '1997';
$ruolo1->setEta();
$ruolo1->returnEmail();

var_dump($ruolo1);

echo 'Nome:'.$ruolo1->nome = "Noemi";
echo '<br>';
echo 'Cognome:'.$ruolo1->cognome = "Rea";
echo '<br>';
echo 'Username:'.$ruolo1->getUsername('No97');
echo '<br>';
echo 'Anno di nascita:'.$ruolo1->dataNascita = '1997';
echo '<br>';
echo 'Età:'.$ruolo1->getEta();
echo '<br>';
echo 'Email:'.$ruolo1->returnEmail();
echo '<br>';
echo 'Ruolo:'.$ruolo1 = "Amministratore";
