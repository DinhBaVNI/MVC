
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
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
    <div class="Sum">
        <!-- Thanh công cụ -->
		<div class="nav fixed-top">
			<ul class="list-left">
				<li><a href="Trangchu.php" class="a-light logo-home">HOME</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Liên hệ</a></li>
			</ul>
			
		</div>
		<!-- end Thanh công cụ -->
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="index.html"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
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
            
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <p class="section-head">Đăng Nhập Với Chúng Tôi</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              
              
              <form action="" method="post">
              <input type="text" class="inp_t" name="user" placeholder="Tên đăng nhập"/><br>
              
              <?php if (isset($loi['user'])) { ?>
               <span style="color: red"><?php echo $loi['user']; ?></span>
              <?php } ?><br>
    
              <input type="password" class="inp_t"  
              name="pass" placeholder="Mật khẩu"><br>
              
              <?php if (isset($loi['pass'])) { ?>
               <span style="color: red"><?php echo $loi['pass']; ?></span>
              <?php } ?><br>

                <button class="btn-lg" name="btn_admin" style="padding: 5px; margin-bottom: 10px">Đăng nhập</button>
            </form>
            <a href="?page=web_goc">Quay lại</a>
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