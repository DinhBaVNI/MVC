
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
    <link rel="stylesheet" href="css/csssanpham/Dssanpham.css">
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
              <p class="section-head">Danh Sách Sản Phẩm</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              <form action="" method="post">
                
                
                  
                
                <table >
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Img_link</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Content</th>
                        <th colspan="3">Setting</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                    <tr>
                        <td colspan=6 style="padding-left:260px"><?php echo "<h2>Sản Phẩm Nổi bật</h2>" ?></td>
                    </tr>
                    <?php
                    foreach ($data_sanpham as $key => $value) 
                     { ?>
                        <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td>
                            <img src="../img/sanphamdb/<?php echo $value['img_link'] ?>" alt="" width="100px" height="100px">
                         
                        </td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['amount'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['content'] ?></td>
                        <td class="btn">
                            <a  href="?page=Suasp&id=<?php echo $value['id'] ?>">Sửa</a>
                            <a onclick="del()" href="?page=Xoasp&id=<?php echo $value['id'] ?>">Xóa</a>
                        </td>
                        </tr>
                    
                    <?php } ?>
                    
                    <tr >
                        <td colspan=6 style="padding-left:260px"><?php echo "<h2>Sản Phẩm Mới</h2>" ?></td>
                    </tr>
                    <?php
                    foreach ($data_sanpham1 as $key => $value) 
                     { ?>
                    
                   
                        <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td>
                            <img src="../img/sanphamnew/<?php echo $value['img_link'] ?>" alt="" width="100px" height="100px">
                         
                        </td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['amount'] ?></td>
                        <td><?php echo $value['price'] ?></td>
                        <td><?php echo $value['content'] ?></td>
                        <td class="btn">
                            <a href="?page=Suasp_new&id=<?php echo $value['id'] ?>">Sửa</a>
                            <a onclick=" del()" href="?page=Xoasp_new&id=<?php echo $value['id'] ?>">Xóa</a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                </table>
                
               
              </form>
             
                  <!--End Form-->
              <!--End liên hệ-->
              </div>
              <a href="?page=Themsp" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 18px; padding-left:480px ">Thêm Sp Nổi Bật</a>
              <a href="?page=Themsp_new" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 18px; padding-left:30px ">Thêm Sp Mới</a>
                <a href="?page=trangchu" style="color: rgb(255, 1, 1);text-decoration: none;font-size: 18px ; padding-left:30px ">Quay lại</a>
        </div>
          <!--end section 2-->
          </div>
      <!--end container-->
    </div>
   
    <script>
    function del() {
        return confirm ("Bạn có chắc chắn muốn xóa sản phẩm này !");
    }
</script>
</body>
</html>
