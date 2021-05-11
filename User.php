<?php

class User {
    public $id;
    public $nome;
    public $cognome;
    private $username;
    protected $email;
    public $dataNascita;
    public $eta;

    //costruttore
    public function __construct($_id, $_email){
        $this->id = $_id;
        
        $this->email = $_email;
    }

    //metodi
    public function setUsername($_username){
        $this->username = $_username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function returnEmail()
    {
        return $this->email;
    }

    public function setEta() {
        $this->eta = 2021 - $this->dataNascita;
    }

    public function getEta(){
        return $this->eta;
    }


}