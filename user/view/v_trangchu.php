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
    <link rel="stylesheet" href="css/san-pham.css">
    <link rel="stylesheet" href="css/footer.css">
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
                <li style="color:red">
                <?php 
                    if (isset($_SESSION['ss_admin'])){?>
                     <?php echo $_SESSION['ss_admin']; ?>
                    
                <?php }?>
                </li>
				<li class="dang-nhap"><a href="?page=logout">Đăng Xuất</a></li>
                <span>|</span>
				<li><a href="?page=giohang" class="left a-light">GIỎ HÀNG <span>0</span></a></li>
			</ul>
		</div>
        
            
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="?page=trangchu"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
			</a>
			<span class="ten-cua-hang">Shop phone online</span>
			<div class="search">
				<input type="search" class="search-box" placeholder="Bạn cần tìm gì ?">
				<a href="#" class="search-button">Search</a>
			</div>
		</div>
		<!-- end Phần header -->
        <div class="container" >
            <!-- Banner-top -->
			<div class="banner">
        </div>
			<!-- end banner-top -->
            <!-- Thanh menu bên trái -->
			<div class="menu-ben-trai" style="font-size: 20px; ">
				<ul>
					<li class="title">Danh Mục Sản Phẩm</li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/logo-dt.jpg" width="40px" height="40px">Điện thoại</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/Logo-mt.jfif" width="40px" height="40px">Máy tính bàn</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/phu-kien.jpg" width="40px" height="40px">Phụ Kiện</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/Lt.jfif" width="40px" height="40px">Laptop</a></li>
					<li><a href="#"><img class="icon-mobile" src="img/danhmuc/may-anh.jfif "width="40px" height="40px">Máy ảnh</a></li>
				</ul>
			</div>
			<!--End Thanh menu bên trái -->
        </div>
        <!--khung chứa sản phẩm-->
        
        
			<div class="khung-chua-san-pham">
                <!--Phần section 1-->
                <div class="section">
                    <!--Thanh tiêu đề-->
                    <p class="section-head">SẢN PHẨM NỔI BẬT</p>
                    <!--End Thanh tiêu đề-->
                    <form action="" method="post">
                    <!--Hộp 1-->
                    <?php foreach ($data_nhanvien as $key => $value) { ?>
                    <div class="product-box">
                        <a class="box" href="Thong-tin-sp.html">
                            <div class="hinh-sp" style="width: 200px; height: 230px">
                                <div><img src="../img/sanphamdb/<?php echo $value['img_link'] ?>" alt="Lỗi ảnh"width="200px" height="200px"></div>
                            </div>
                            <p class="ten-sp"><?php echo $value['name'] ?></p>
                            <p class="gia-tien"><?php echo $value['price'] ?><span class="gia-cu">5.000.000đ</span></p>
                           
                        </a>
                        <button class="them" style="float: right;"><a href="?page=addcart&id=<?php echo $value['id'] ?>">Add</a></button>
                    </div>
                    <?php } ?>
                    <!--end Hộp 1-->
                    </form>
                </div>    
                <!--end section 1-->
                <!--start section 2-->
                 <!--Thanh tiêu đề-->
                 <p class="section-head">SẢN PHẨM MỚi</p>
                 <!--End Thanh tiêu đề-->
                 <!--Hộp 1-->
                 <form action="" method="post">
                 <?php foreach ($data_nhanvien1 as $key => $value) { ?>
                 <div class="product-box">
                    <a class="box" href="#">
                        <div class="hinh-sp" style="width: 200px; height: 230px">
                            <div><img src="../img/sanphamnew/<?php echo $value['img_link'] ?>" alt="Lỗi ảnh"width="200px" height="200px"></div>
                        </div>
                        <p class="ten-sp"><?php echo $value['name'] ?></p>
                        <p class="gia-tien"><?php echo $value['price'] ?><span class="gia-cu">5.000.000đ</span></p>                     
                    </a>
                    <button class="them" style="float: right;"><a href="?page=addcart1&id=<?php echo $value['id'] ?>">Add</a></button>
                </div>
                <?php } ?>
                </form>
                 <!--end Hộp 1-->
                
             </div>    
             <!--end section 2-->
             
            </div>
            <!--end khung chứa sản phẩm-->
            <!--Phần chân trang-->
        
		<div class="footer"></div>
		<!--end Phần chân trang-->
        </div>
<script src="js/gio-hang.js"></script>
</body>
</html>