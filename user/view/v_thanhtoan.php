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
    <link rel="stylesheet" href="css/ThanhToan.css">
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
				<li class="dang-ky"><a href="?page=sign_up">Đăng ký</a></li>
			</ul>
		</div>
		<!-- end Thanh công cụ -->
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
        <div class="container">
            <!-- Banner-top -->
			<div class="banner">
        </div>
			<!-- end banner-top -->
           
        </div>
        <div class="khung-chua-san-pham">
            <div class="section">
              <!--Thanh tiêu đề-->
              <p class="section-head">Thanh Toán Đơn Hàng</p>
              <!--End Thanh tiêu đề-->
              <!--Form-->
              
              
              <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" name="frmthanhtoan" method="post"
                action="#">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>
                </div>
                    

                <div class="row">
                <div class="col-md-80 order-md-1">
                        <h4 class="md-3">Thông tin khách hàng</h4>
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="kh_ten" id="kh_ten">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_gioitinh">Giới tính</label>
                                <input type="text" class="form-control" name="kh_gioitinh" id="kh_gioitinh">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="kh_diachi" id="kh_diachi">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="kh_dienthoai" id="kh_dienthoai">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="email" class="form-control" name="kh_email" id="kh_email">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_ngaysinh">Ngày sinh</label>
                                <input type="date" class="form-control" name="kh_ngaysinh" id="kh_ngaysinh">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_cmnd">CMND</label>
                                <input type="text" class="form-control" name="kh_cmnd" id="kh_cmnd">
                            </div>

                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="httt_ma" type="radio" class="custom-control-input" required=""
                                    value="3">
                                <label class="custom-control-label" for="httt-3">Ship COD</label>
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                        </h4>
                        <?php
                        $thanhtien = 0;
                        if (isset($_SESSION['cart'])) { 
                            foreach ($_SESSION['cart'] as $key => $value){
                        $thanhtien += $value['amount'] * $value['price'];                                              
                        ?>
                        
                        <ul class="list-group mb-5">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                    <h6 class="my-0"><?php echo $value['name'] ?></h6>
                                    <span class="text-muted"><?php echo $value['amount'] ?></span>
                                    <span>X</span>
                                    <span class="text-muted"><?php echo $value['price'] ?></span>
                                    <span>=</span>
                                <span class="text-muted"><?php echo $value['amount'] * $value['price'] ?></span>
                                </div>
                            </li>
                        </ul>
                            <?php  } }?>
                        <?php
                        $thanhtien1 = 0;
                        if (isset($_SESSION['cart1'])) { 
                            foreach ($_SESSION['cart1'] as $key => $value){
                        $thanhtien1 += $value['amount'] * $value['price'];                                              
                        ?>
                        
                        <ul class="list-group mb-5">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                    <h6 class="my-0"><?php echo $value['name'] ?></h6>
                                    <span class="text-muted"><?php echo $value['amount'] ?></span>
                                    <span>X</span>
                                    <span class="text-muted"><?php echo $value['price'] ?></span>
                                    <span>=</span>
                                <span class="text-muted"><?php echo $value['amount'] * $value['price'] ?></span>
                                </div>
                            </li>
                        </ul>
                            <?php  } }?>
                            <div style="font-size:20px; margin-bottom: 20px">
                            <span>Tổng thành tiền:</span>
                            <span ><?php echo $thanhtien + $thanhtien1 ?></span>
                            </div>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div>

                    
                        <hr class="mb-4">
                        
                    </div>
                </div>
                
            </form>
            
        </div>
        <!-- End block content -->
    </main>
                  <!--End Form-->
              <!--End liên hệ-->
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnDatHang">Đặt
                            hàng</button>
              </div>
             

        </div>
          <!--end section 2-->
          </div>
      <!--end container-->
    </div>
</body>
</html>