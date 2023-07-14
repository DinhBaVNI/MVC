
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
        $_SESSION['ss_admin1'] = $user[0]['id'];
        header('location: ?page=trangchu');
    }
}

require('view/v_dangnhap.php')
?>
