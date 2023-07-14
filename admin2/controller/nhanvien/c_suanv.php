<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->get('admin_nhanvien', array('id'=>$id));

        if (isset($_POST['btn_upd'])) {
        $id1 = $_POST['id'];
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $full_name = $_POST['full_name'];
        $lv = $_POST['lv'];
        

        $db->update('admin_nhanvien', array(
            'id' =>$id1,  
            'username'=>$username,
            'password'=>$password,
            'full_name'=>$full_name,
            'lv'=>$lv
              
        ),
        array('id' => $id)
    );
        header('location: ?page=dsnhanvien');
        }
    
    }
    require "view/nhanvien/v_suanv.php";
?>
        