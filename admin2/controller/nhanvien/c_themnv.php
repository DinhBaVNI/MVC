
<?php
    if(isset($_POST['btn_them'])){
        
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $fullname = $_POST['full_name'];
        $lv = $_POST['lv'];

        $loi = array();
        if($username == ''){
            $loi['user'] = 'user must no để trống ';
        }
        if($password == ''){
            $loi['pass'] = 'pass must no để trống';
         }
         if($fullname == ''){
             $loi['full_name'] = 'full_name must no để trống ';
         }
         if($lv == ''){
            $loi['lv'] = 'lv must no để trống ';
        }
        if(!$loi){
            $db->insert('admin_nhanvien', array(
            'username'=>$username,
            'password'=>$password,
            'full_name'=>$fullname,
            'lv'=>$lv));
        }
    
        if(!$loi){
            header('location: ?page=dsnhanvien');
        }
    }
    
    require('view/nhanvien/v_themnv.php')
?>