<?php
include_once 'Mindex.php';
class user extends main{
    public function user_add($data){
        //$this->db->query("insert into user_tbl (name,email,password,status,vc) values ('$data[name]','$data[email]','$password','0','0')");
        $this->db->query("insert into user_tbl (name,email,password,status,vc) values ('$data[name]','$data[email]','$data[password]','0','0')");
        $id=$this->db->lastInsertId();
        return $id;
    }
    public function user_login($data){
        $results=$this->db->query("SELECT * FROM user_tbl where email='$data[email]'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }




}