<?php 

    $thanhtoan = $db ->get ('usser', array());

    
        if (isset($_POST['btn_upd'])) {
        $full_name = $_POST['full_name'];
        $phone  =  $_POST['phone'];
        $email   = $_POST['email'];
        $address =  $_POST['address'];
        $price = $_POST['amount'];
        $oder_id = 1;
        $oder = $db->get('oder', array());
        foreach ($oder as $key => $value) {
            $oder_id += $value['id'];
        }
        
        $thanhtien = 0;
        foreach ($_SESSION['cart'] as $key => $value){
        $thanhtien += $value['amount'] * $value['price'];   
        
        $db->insert('oder_detail', array(
            'oder_id'=>$oder_id,
            'product_id'=>$value['id'],
            'qty'=>$value['amount'],
            'price'=>$value['price'],
            'amount' => $thanhtien
        ),);
    }
        $thanhtien1 = 0;
        foreach ($_SESSION['cart1'] as $key => $value){
        $thanhtien1 += $value['amount'] * $value['price']; 

        $db->insert('oder_detail_new', array(
            'oder_id'=>$oder_id,
            'product_new_id'=>$value['id'],
            'qty'=>$value['amount'],
            'price'=>$value['price'],
            'amount' => $thanhtien1
        ),);
    }

        $db->insert('oder', array(
            'full_name'=>$full_name,
            'phone'=>$phone,
            'email'=>$email,
            'address'=>$address,
            'amount' => $price 
        ),
    );

        unset($_SESSION['cart']);
    header('location: ?page=trangchu');
}
       
        


        

require "view/v_thanhtoan.php";
?>