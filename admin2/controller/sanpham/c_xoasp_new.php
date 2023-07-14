<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->delete('product_new', array('id'=>$id));
        header ('location: ?page=dssanpham');
    }
?>