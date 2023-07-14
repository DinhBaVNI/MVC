<?php
        $data_sanpham=$db->get('product', array());
        $data_sanpham1=$db->get('product_new', array());
    require 'view/sanpham/v_dssanpham.php';
?>