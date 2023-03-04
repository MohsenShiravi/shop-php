<?php
require_once 'admin/model/Mbasket.php';

$basket = new basket();
switch($action){
    case 'detail':
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $result=$basket->basket_list($user_id);
        }
        else{
            header("location:index.php?c=user&a=login");
        }

        break;
    case 'add':
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            $pro_id=$_GET['pro_id'];
            $basket->basket_add($user_id,$pro_id);
            header("location:index.php?c=basket&a=detail");
        }
        else{
            header("location:index.php?c=user&a=login");
        }

        break;
    case 'delete':
        $id=$_GET['id'];
        $basket->basket_delete($id);
        header("location:index.php?c=basket&a=detail");

        break;
}
require_once 'view/'.$controller."/".$action.'.php';