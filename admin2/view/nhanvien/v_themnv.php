
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
    <link rel="stylesheet" href="css/cssnhanvien/them.css">
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
              <p class="section-head">Thêm thông tin của nhân viên</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post">
                
                <table >
                        <tr>
                           
                        <input  class="inp" type="text" name="user" placeholder="Username"><br>
                        <?php if (isset($loi['user'])) { ?>
                        <span style="color: red"><?php echo $loi['user']; ?></span>
                        <?php } ?><br>
                        <input  class="inp" type="password" name="pass" placeholder="Password"><br>
                        <?php if (isset($loi['pass'])) { ?>
                        <span style="color: red"><?php echo $loi['pass']; ?></span>
                        <?php } ?><br>
                        
                        <input  class="inp" type="text" name="full_name" placeholder="Full_name"><br>
                        <?php if (isset($loi['full_name'])) { ?>
                        <span style="color: red"><?php echo $loi['full_name']; ?></span>
                        <?php } ?><br>
                        
                        <input class="inp"  type="text" name="lv" placeholder="lv"><br>
                        <?php if (isset($loi['lv'])) { ?>
                        <span style="color: red"><?php echo $loi['lv']; ?></span>
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