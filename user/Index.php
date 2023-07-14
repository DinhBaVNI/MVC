<?php
session_start();
include 'model/m_conncet.php';
	$db = new database();
	$db -> connect();	
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page='Wen_goc';
	}	



switch($page){
	case 'Wen_goc':
		include "controller/c_wen_goc.php";
		break;
	case 'trangchu':
		include "controller/c_trangchu.php";
		break;
	case 'login':
		include "controller/c_dangnhap.php";
		break;
	case 'sign_up':
		include "controller/c_dangki.php";
		break;
	case 'logout':
		include "controller/c_logout.php";
		break;
	case 'tt_sanpham':
		include "controller/c_tt_sanpham.php";
		break;
	case 'giohang':
		include "view/v_giohang.php";
		break;
	case'addcart':
        include "controller/c_giohang.php";
        break;
	case'changecart':
        include "controller/c_giohang.php";
        break;
	case'del':
        include "controller/c_giohang.php";
        break;
	case'addcart1':
        include "controller/c_giohang.php";
        break;
	case'changecart1':
        include "controller/c_giohang.php";
        break;
	case'del1':
        include "controller/c_giohang.php";
        break;
	case'thongtinkh':
        // include "controller/c_giohang.php";
		include "view/v_thongtinkh.php";
        break;
	case'donhang':
        include "controller/c_giohang.php";
        break;
	case 'thanhtoan':
		include "controller/c_thanhtoan.php";
}	
?>