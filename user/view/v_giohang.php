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
    <link rel="stylesheet" href="css/Giohang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="?page=trangchu" class="a-light logo-home">HOME</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			<ul class="list-right">
            <li>
                <?php 
                    if (isset($_SESSION['ss_admin'])){?>
                     <?php echo $_SESSION['ss_admin']; ?>
                    
                <?php }?>
            </li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="?page=trangchu"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">Online electronics shopping</span>
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
            <!-- Thanh menu bên trái -->
			<div class="menu-ben-trai" >
				<ul>
					<li class="title">Giỏ Hàng Của Bạn</li>
					<li><a href="?page=thongtinkh">Thông Tin Của Bạn</a></li>
					<li><a href="#">Đơn Hàng</a></li>
					
				</ul>
			</div>
			<!--End Thanh menu bên trái -->
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post">
                <table class="table-gh">
                    <thead>
                        <tr>
                          
                            <th>Sản phẩm</th>
                            <th>Tên</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Thành tiền</th>
                            <th>Chọn</th>
                        </tr>
                    </thead>
                    <tbody class="Mycart">
                    
                    <?php
                        $thanhtien = 0;
                        if (isset($_SESSION['cart'])) { 
                            foreach ($_SESSION['cart'] as $key => $value){
                        $thanhtien += $value['amount'] * $value['price'];                                              
                        ?>
                        <tr>  
                        
                        </tr>
                        <tr>
                            
                            <td><img src="../img/sanphamdb/<?php echo $value['img_link'] ?>" width="100px" height="100px" alt=""></td>
                            <td><?php echo $value['name'] ?></td>
                            <td>
                            <a href='?page=changecart&method=giam&id=<?php echo $value['id'] ?>'><i class='fa fa-minus' style='padding:10px'></i></a>
                            <?php echo $value['amount'] ?>
                            <a href='?page=changecart&method=tang&id=<?php echo $value['id'] ?>'><i class='fa fa-plus' style='padding:10px'></i></a>
                            </td>
                            <td><?php echo $value['price'] ?></td>
                            <td><?php echo $value['amount'] * $value['price'] ?></td>
                            <td><a href="?page=del&id=<?php echo $value['id'] ?>" data-sp-ma="2">
                            <i class="fa fa-trash" aria-hidden="true"></i>Xóa</a></td>
                            
                        </tr>
                    
                        <?php } } ?>
                        <?php
                        $thanhtien1 = 0;
                        if (isset($_SESSION['cart1'])) { 
                            foreach ($_SESSION['cart1'] as $key => $value){
                        $thanhtien1 += $value['amount'] * $value['price'];                                              
                        ?>

                        <tr>
                            
                            <td><img src="../img/sanphamnew/<?php echo $value['img_link'] ?>" width="100px" height="100px" alt=""></td>
                            <td><?php echo $value['name'] ?></td>
                            <td>
                            <a href='?page=changecart1&method=giam&id=<?php echo $value['id'] ?>'><i class='fa fa-minus' style='padding:10px'></i></a>
                            <?php echo $value['amount'] ?>
                            <a href='?page=changecart1&method=tang&id=<?php echo $value['id'] ?>'><i class='fa fa-plus' style='padding:10px'></i></a>
                            </td>
                            <td><?php echo $value['price'] ?></td>
                            <td><?php echo $value['amount'] * $value['price'] ?></td>
                            <td><a href="?page=del1&id=<?php echo $value['id'] ?>" data-sp-ma="2">
                            <i class="fa fa-trash" aria-hidden="true"></i>Xóa</a></td>
                            
                        </tr>
                    
                        <?php } } ?>

                        
                        
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                    
                </table>
                
              </form>
             
                  <!--End Form-->
              <!--End liên hệ-->
              </div>
        </div>
          <!--end section 2-->
               
          </div>
          <div class="Sum">
          <span>Tổng tiền:</span>
          <span style="margin-right: 50px"><?php echo $thanhtien + $thanhtien1 ?></span>
          <a href="?page=thanhtoan">Thanh toán</a>
          </div>
          <!--end container-->
    </div>
    <!-- <script src="js/gio-hang.js"></script> -->
</body>
</html>
