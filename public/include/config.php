<?php
$db=new PDO("mysql:host=localhost;dbname=shop","root","", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

@session_start();
class db{
    public function __construct()
    {
        global $db;

        $this->db=$db;
    }
}

