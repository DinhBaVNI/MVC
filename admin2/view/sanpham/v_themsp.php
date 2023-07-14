
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
    <link rel="stylesheet" href="css/csssanpham/them.css">
</head>
<body>
    <div class="Sum">
        <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="Trangchu.html" class="a-light logo-home">HOME</a></li>
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
              <p class="section-head">Thêm sản phẩm nổi bật</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post" enctype="multipart/form-data">
                
                <table >
                        <tr>
                        <input  class="inp" type="text" name="catalog_id" placeholder="Id_hãng"><br>
                        <?php if (isset($loi['catalog_id'])) { ?>
                        <span style="color: red"><?php echo $loi['catalog_id']; ?></span>
                        <?php } ?><br>

                        <input  class="inp" type="file" name="img"><br>

                        <input  class="inp" type="text" name="name" placeholder="Tên sản phẩm"><br>
                        <?php if (isset($loi['name'])) { ?>
                        <span style="color: red"><?php echo $loi['name']; ?></span>
                        <?php } ?><br>
                        
                        <input  class="inp" type="text" name="amount" placeholder="Số lượng"><br>
                        <?php if (isset($loi['amount'])) { ?>
                        <span style="color: red"><?php echo $loi['amount']; ?></span>
                        <?php } ?><br>
                        
                        <input class="inp"  type="text" name="price" placeholder="Đơn Giá"><br>
                        <?php if (isset($loi['price'])) { ?>
                        <span style="color: red"><?php echo $loi['price']; ?></span>
                        <?php } ?><br>
                        
                        <input class="inp"  type="text" name="content" placeholder="Miêu tả"><br>
                        <?php if (isset($loi['content'])) { ?>
                        <span style="color: red"><?php echo $loi['content']; ?></span>
                        <?php } ?><br>
                            <button name="btn_them" class="bt_n">ADD</button>
                            
                       
                        </tr>
                        
                </table>
                <a href="?page=dsnhanvien" class="aho" style="">Quay lại</a>
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
</body>
</html>