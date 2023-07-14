
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shop Phone ĐìnhBa</title>
    <link rel="icon" href="img/logo/Logo-name.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link  rel="stylesheet" href="css/Tieude.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/left-content.css">
    <link rel="stylesheet" href="css/csssanpham/Sua.css">
</head>
<body>
    <div class="Sum">
        <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="?page=trangchu" class="a-light logo-home">HOME</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			<ul class="list-right">
            <li class="dang-ky" style="color:rgb(136, 208, 226)"><?php if(isset($_SESSION['ss_admin'])) { ?> 
            <?php echo $_SESSION['ss_admin'] ?></span>
            <?php } ?></li>
                <span>|</span>
				<li><a href="?page=logout" class="left a-light" style="color: red;">Đăng Xuất</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="index.html"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">ADMIN</span>
			<div class="search">
				<input type="search" class="search-box" placeholder="Bạn cần tìm gì ?">
				<a href="#" class="search-button">Search</a>
			</div>
		</div>
		<!-- end Phần header -->
        <div class="container">
            <!-- Banner-top -->
			<div class="banner">
        </div>
			<!-- end banner-top -->
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <p class="section-head">Sửa sản phẩm mới</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post" enctype="multipart/form-data">
                
                
                  
                
                <table >
                    <thead>
                <?php
                foreach ($user1 as $key => $value) { ?>
                    <tr>
                        <th> <h3>id_hãng</h3>
                        <input class="inp_upd" type="text" name="id" value="<?php echo $value['id'] ?>">
                     </th>
                     <th><h3>Ảnh sản phẩm</h3>
                        <input class="inp_upd" type="file" name="img" >
                        <th>
                        <img name="old_img" src="img/sanpham/<?php echo $value['img_link'] ?>" alt="" width="100px" height="100px">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    
                    
                        <tr>
                        <td><h3>Tên sản phẩm</h3>
                        <input class="inp_upd" type="text" name="name" value="<?php echo $value['name'] ?>">
                        </td>
                        <td><h3>Số lượng</h3>
                        <input class="inp_upd" type="text" name="amount" value="<?php echo $value['amount'] ?>">
                        </td>
                        
                        </tr>
                        <tr>
                        <td> <h3>Nội dung</h3>
                        <input class="inp_upd" type="text" name="content" value="<?php echo $value['content'] ?>">
                        </td>
                        <td>
                        <h3>Đơn giá</h3>
                        <input class="inp_upd" type="text" name="price" value="<?php echo $value['price'] ?>">
                        </td>
                        </tr>
                        
                    
                    
                    </tbody>
                   
                </table>
                <button  class="btn_upd"   name="btn_upd_new">Sửa</button><br>
                <?php } ?>
                <a  href="?page=dssanpham" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 18px ;  ">Quay lại</a>
              </form>
                  <!--End Form-->
              <!--End liên hệ-->
              </div>
        </div>
          <!--end section 2-->
          </div>
      <!--end container-->
    </div>
   

</body>
</html>
