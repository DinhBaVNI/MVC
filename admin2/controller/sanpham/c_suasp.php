<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $user=$db->get('product', array('id'=>$id));

        if (isset($_POST['btn_upd'])) {
        $id1 = $_POST['id'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];
        $content = $_POST['content'];
    
       
        $image = $_FILES['img']['name'];
        $image_temp=$_FILES['img']['tmp_name'];
      
       
        if($image_temp != "")
        {
            move_uploaded_file($image_temp, "../img/sanphamdb/$image" ); 
            $db->update('product', array(
                'id' =>$id1,  
                'img_link'=> $image,
                'name'=>$name,
                'amount'=>$amount,
                'price'=>$price,
                'content' =>$content
                  
            ),
            array('id' => $id));  
        }else
        {
            $db->update('product', array(
                'id' =>$id1, 
                'name'=>$name,
                'amount'=>$amount,
                'price'=>$price,
                'content' =>$content
                  
            ),
            array('id' => $id));
        }
     
        header('location: ?page=dssanpham');
         }
        
    }
    require "view/sanpham/v_suasp.php";
?>
        