<?php

ini_set("display_errors", 1);

require_once 'User.php';

$user1 = new User('1', 'Fabio.Vitti@gmail.com');
echo 'Nome:'.$user1->nome = "Fabio";
echo '<br>';
echo 'Cognome:'.$user1->cognome = "Vitti";
echo '<br>';
echo 'Username:'.$user1->setUsername('FabVi97');
echo '<br>';
echo 'Anno di nascita:'.$user1->dataNascita = '1997';
echo '<br>';
echo 'Età:'.$user1->setEta();
echo '<br>';
echo 'Email:'.$user1->returnEmail();

var_dump($user1);