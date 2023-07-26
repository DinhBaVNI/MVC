
<?php
    
if(isset($_SESSION['ss_admin'])){
    header('location: ?page=trangchu');
}
?>
<?php
if(isset($_POST['btn_user'])){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $loi = array();
    if($username == ''){
       $loi['user'] = 'username must no để trống';
    }
    if($password == ''){
        $loi['pass'] = 'pass must no để trống ';
    }
    if(!$loi){
        $user = $db -> get('usser', array('username' => $username));
        if(empty($user)){
            $loi['user'] = 'Username không tồn tại';
        }else{

        if($password!=$user[0]['password']){
            $loi['pass'] = 'Sai password';
        }
    }
}
    if(!$loi){
        $_SESSION['ss_admin'] = $user[0]['full_name'];
        $_SESSION['ss_phone'] = $user[0]['phone'];
        $_SESSION['ss_email'] = $user[0]['email'];
        $_SESSION['ss_address'] = $user[0]['address'];
        header('location: ?page=trangchu');
    }
}

require('view/v_dangnhap.php')
?>
