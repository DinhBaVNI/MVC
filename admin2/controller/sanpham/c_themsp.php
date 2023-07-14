
<?php
    if(isset($_POST['btn_them'])){
        
        $catalog_id = $_POST['catalog_id'];          
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $price = $_POST['price'];
        $content = $_POST['content'];

        
        $image = $_FILES['img']['name'];
        $image_temp=$_FILES['img']['tmp_name'];
      
        move_uploaded_file($image_temp, '../img/sanphamdb/'.$image); 

        $loi = array();
        if($catalog_id== ''){
            $loi['catalog_id'] = 'Cotalog_id must no để trống ';
        }
        if($name == ''){
            $loi['name'] = 'Name cart must no để trống ';
        }
        if($amount == ''){
            $loi['amount'] = 'Amount must no để trống';
         }
         if($price == ''){
             $loi['price'] = 'Price must no để trống ';
         }
         if($content == ''){
            $loi['content'] = 'Price must no để trống ';
        }
        
        
        if(!$loi){
            $db->insert('product', array(
                'catalog_id' =>$catalog_id,
                'img_link'=>$image,
                'name'=>$name,
                'amount'=>$amount,
                'price'=>$price,
                'content' =>$content));
        }
        
        if(!$loi){
            header('location: ?page=dssanpham');
        }
    }
    
    require('view/sanpham/v_themsp.php')
?>
