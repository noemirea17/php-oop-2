<?php

require_once 'User.php';

class Admin extends User 
{
    public $ruolo;

    public function setRuolo($_ruolo)
    {
        $this->ruolo = $_ruolo;
    }

}