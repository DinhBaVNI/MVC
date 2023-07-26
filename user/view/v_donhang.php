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
    <link rel="stylesheet" href="css/donhang.css">
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
			<span class="ten-cua-hang">Shop Phone Online</span>
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
				
			</div>
			<!--End Thanh menu bên trái -->
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <p class="section-head">Đơn hàng của bạn</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post">
                <table class="table-gh">
                    <thead>
                        <tr>
                          
                            <th>Stt</th>
                            <th>Tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody class="Mycart">
                        <
                        <tr>
                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $_SESSION['ss_admin'] ?></td>
                            <td><?php echo $value['phone'] ?></td>
                            <td><?php echo $value['email'] ?></td>  
                            <td><?php echo $value['address'] ?></td>
                            <td><?php echo $value['amount'] ?></td>
                            <td><input type="button" value="Đang xác nhận"></td>
                        </tr>
                    
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
         
          <!--end container-->
    </div>
    <!-- <script src="js/gio-hang.js"></script> -->
</body>
</html>
