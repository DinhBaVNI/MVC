
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Shop Phone ĐìnhBa</title>
    <link rel="icon" href="img/logo/Logoname.jpg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link  rel="stylesheet" href="css/Tieude.css">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="stylesheet" href="css/left-content.css">
    <link rel="stylesheet" href="css/sign-up.css">
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
				<li><a href="?page=login" class="left a-light">Đăng Nhập</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->
		<div class="clearfix"></div>

        <!-- Phần header -->
		<div class="header">
			<a href="?page=trangchu"><img src="img/logo/Logoname.jpg" alt="" width="120" height="90" class="logo" />
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
                        
                        <input class="inp"  type="text" name="phone" placeholder="phone"><br>
                        <?php if (isset($loi['phone'])) { ?>
                        <span style="color: red"><?php echo $loi['phone']; ?></span>
                        <?php } ?><br>
                        
                        <input class="inp"  type="email" name="email" placeholder="email"><br>
                        <?php if (isset($loi['email'])) { ?>
                        <span style="color: red"><?php echo $loi['email']; ?></span>
                        <?php } ?><br>

                        <input class="inp"  type="date" name="date" ><br>
                        <?php if (isset($loi['date'])) { ?>
                        <span style="color: red"><?php echo $loi['date']; ?></span>
                        <?php } ?><br>

                        <input class="inp"  type="text" name="cmnd" placeholder="cmnd"><br>
                        <?php if (isset($loi['cmnd'])) { ?>
                        <span style="color: red"><?php echo $loi['cmnd']; ?></span>
                        <?php } ?><br>
                        
                            <button name="btn_sign" class="bt_n">ADD</button>
                            
                       
                        </tr>
                        
                </table>
                <a href="?page=trangchu" class="aho" style="">Quay lại</a>
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