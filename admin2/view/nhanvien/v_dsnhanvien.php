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
    <link rel="stylesheet" href="css/cssnhanvien/DSnhanvien.css">
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
			<a href="?page=trangchu"><img src="img/logo/Logo-name.jpg" alt="" width="120" height="90" class="logo" />
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
              <p class="section-head">Danh Sách Nhân Viên</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post">
                <p>Thông tin của nhân viên</p>
                
                  
                
                <table >
                    <thead>
                        <tr>
                        <th>Stt</th>
                        <th>Username</th>
                        <th>password</th>
                        <th>Full_name</th>
                        <th>Lv</th>
                        <th colspan="3">Setting</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($data_nhanvien as $key => $value) { ?>
                    <tbody>
                   
                        <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['username'] ?></td>
                        <td><?php echo $value['password'] ?></td>
                        <td><?php echo $value['full_name'] ?></td>
                        <td><?php echo $value['lv'] ?></td>
                        <td class="btn">
                            <a href="?page=Suanhanvien&id=<?php echo $value['id'] ?>">Sửa</a>
                            <a href="?page=Xoanhanvien&id=<?php echo $value['id'] ?>">Xóa</a>
                    </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
                
                <a href="?page=Themnv" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 16px; margin-right:10px ">Thêm</a>
                <a href="?page=trangchu" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 16px ">Quay lại</a>
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
