<?php
include_once 'Mindex.php';
class procat extends main{
  public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function procat_list(){
        $results=$this->db->query("SELECT * FROM procat_tbl");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function procat_list_default(){
        $results=$this->db->query("SELECT * FROM procat_tbl where chid ='0'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_under_list_default($id){
        $results=$this->db->query("SELECT * FROM procat_tbl where chid ='$id'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_add($data){
        $this->db->query("insert into procat_tbl (title,chid) values ('$data[title]','$data[chid]')");
    }
    public function promaincat_list(){
        $results=$this->db->query("SELECT * FROM procat_tbl where chid='0'");
        return $results;
    }
    public function procat_delete($id){
        $this->db->query("delete from procat_tbl where id='$id'");
    }
    public function procat_showEdit($id){
        $results=$this->db->query("SELECT * FROM procat_tbl where id='$id'");
        $row=$results->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    public function procat_edit($data,$id){
       $this->db->query("update procat_tbl set title='$data[title]',chid='$data[chid]' where id='$id' ");
    }



}