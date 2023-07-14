
<?php
    if(isset($_POST['btn_sign'])){
        
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $fullname = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $loi = array();
        if($username == ''){
            $loi['user'] = 'user must no empty ';
        }
        if($password == ''){
            $loi['pass'] = 'pass must no empty';
        }
        if($fullname == ''){
             $loi['full_name'] = 'full_name must no empty ';
        }
        if($phone == ''){
            $loi['phone'] = 'phone must no empty ';
        }
        if($email == ''){
            $loi['email'] = 'email must no empty ';
        }
        
        if(!$loi){
            $db->insert('usser', array(
            'username'=>$username,
            'password'=>$password,
            'full_name'=>$fullname,
            'phone'=>$phone,
            'email'=>$email));
        }
    
        if(!$loi){
            header('location: ?page=login');
        }
    }
    
    require('view/v_dangki.php')
?>