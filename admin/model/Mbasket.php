<?php
include_once 'Mindex.php';
class basket extends main{
    public function basket_list($id){
        $results=$this->db->query("SELECT * FROM basket_tbl where user_id=$id" );
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function basket_add($user_id,$pro_id){
        $this->db->query("insert into basket_tbl (user_id,pro_id) values ('$user_id','$pro_id')");
    }
    public function basket_delete($id){
        $this->db->query("delete from basket_tbl where id='$id'");
    }


}