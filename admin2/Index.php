<?php
session_start();
include 'model/m_database.php';
	$db = new database();
	$db -> connect();	
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page='web_goc';
	}	


switch($page){
	case 'web_goc':
		include "controller/c_webgoc.php";
		break;
	case 'trangchu':
        include "controller/c_trangchu.php";
        break;
	case 'dangnhap':
        include "controller/c_dangnhap.php";
        break;
	case 'logout':
        include "controller/c_logout.php";
        break;
	case 'dsnhanvien':
        include "controller/nhanvien/c_dsnhanvien.php";
        break;
	case 'Themnv':
        include "controller/nhanvien/c_themnv.php";
        break;
	case 'Suanhanvien':
        include "controller/nhanvien/c_suanv.php";
        break;
	case 'Xoanhanvien':
        include "controller/nhanvien/c_xoanv.php";
        break;
	case 'dssanpham':
        include "controller/sanpham/c_dssanpham.php";
        break;
	case 'Themsp':
        include "controller/sanpham/c_themsp.php";
        break;
	case 'Themsp_new':
        include "controller/sanpham/c_themsp_new.php";
        break;
	case 'Suasp':
        include "controller/sanpham/c_suasp.php";
        break;
	case 'Suasp_new':
        include "controller/sanpham/c_suasp_new.php";
        break;
	case 'Xoasp':
        include "controller/sanpham/c_xoasp.php";
        break;
	case 'Xoasp_new':
        include "controller/sanpham/c_xoasp_new.php";
        break;
}
?>
