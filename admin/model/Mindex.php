<?php
class main{
  public function __construct()
    {
        global $db;

        $this->db=$db;
    }

    public function uploaderImage()
    {
        
    }


   /*   public function menu_list(){
        $results=$this->db->query("SELECT * FROM menu_tbl");
        return $results;
    }
    public function news_list(){
        $results=$this->db->query("SELECT * FROM news_tbl where status='1'");
        return $results;
    }*/

}