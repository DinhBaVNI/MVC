<?php
    $data_nhanvien=$db->get('product', array()); 
    $data_nhanvien1=$db->get('product_new', array()); 
    require 'view/v_trangchu.php'
?>