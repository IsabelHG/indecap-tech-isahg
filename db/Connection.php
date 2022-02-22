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
    $con=mysql_connect($sever,$user,$pass) or die ("Error al conectar a la db".mysql_error());
    mysql_select_db($db,$con);

    return $con;

}

}