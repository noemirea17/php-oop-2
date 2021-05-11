<?php

ini_set("display_errors", 1);

require_once 'User.php';

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