<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->delete('admin_nhanvien', array('id'=>$id));
        header ('location: ?page=dsnhanvien');
    }
?>