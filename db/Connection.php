<?php

class Connection{

    public $user;
    public $pass;
    public $server;
    public $db;

function connect() {
    
    $this->user="root";
    $this->pass="";
    $this->server="localhost";
    $this->db="indecap_tech";
    $con= new mysqli($this->server,$this->user,$this->pass,$this->db);

    return $con;

}

}