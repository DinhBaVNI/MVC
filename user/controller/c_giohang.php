<?php
    if (isset($_GET['page'])) {
        $page= $_GET['page'];
        switch ($page) {
            case 'addcart':
                $id = $_GET['id'];

                $product=$db->get('product', array('id' => $id));
                if (isset($_SESSION['cart'])) {
                    if (isset($_SESSION['cart'][$id])) {
                        $_SESSION['cart'][$id]['amount'] += 1;
                }else{
                    $_SESSION['cart'][$id]['id']        = $product[0]['id'];
                    $_SESSION['cart'][$id]['img_link']  = $product[0]['img_link'];
                    $_SESSION['cart'][$id]['name']      = $product[0]['name'];
                    $_SESSION['cart'][$id]['amount']        =   1;
                    $_SESSION['cart'][$id]['price']    = $product[0]['price'];
                }
            } else {
                    $_SESSION['cart'][$id]['id']        = $product[0]['id'];
                    $_SESSION['cart'][$id]['img_link']  = $product[0]['img_link'];
                    $_SESSION['cart'][$id]['name']      = $product[0]['name'];
                    $_SESSION['cart'][$id]['amount']        =   1;
                    $_SESSION['cart'][$id]['price']    = $product[0]['price'];
                }
            header('location: ?page=trangchu');
                break;
               

                case 'changecart':
                    $method = $_GET['method'];
                    $id = $_GET['id'];
                    switch ($method) {
                        case 'giam':
                            $_SESSION['cart'][$id]['amount'] -= 1;
                            if ($_SESSION['cart'][$id]['amount'] == 0) {
                                unset($_SESSION['cart'][$id]);
                            }
                            if (empty($_SESSION['cart'])) {
                                unset($_SESSION['cart']);
                            }
                            header('location: ?page=giohang');
                            break;
                        case 'tang':
                            $_SESSION['cart'][$id]['amount'] += 1;
                            header('location: ?page=giohang');
                            break;
                    }
                    break;
                case 'del':
                    if (isset($_GET['id'])) {
                        $product_id = $_GET['id'];
        
                        // Xóa Session ID của sản phẩm
                        unset($_SESSION['cart'][$product_id]);
                        if (empty($_SESSION['cart'])) {
                            unset($_SESSION['cart']);
                        }
                        header('location: ?page=giohang');
                    }
        
                    break;
        
        
        case 'addcart1':
            $id = $_GET['id'];

            $product1=$db->get('product_new', array('id' => $id));
            if (isset($_SESSION['cart1'])) {
                if (isset($_SESSION['cart1'][$id])) {
                    $_SESSION['cart1'][$id]['amount'] += 1;
            }else{
                $_SESSION['cart1'][$id]['id']        = $product1[0]['id'];
                $_SESSION['cart1'][$id]['img_link']  = $product1[0]['img_link'];
                $_SESSION['cart1'][$id]['name']      = $product1[0]['name'];
                $_SESSION['cart1'][$id]['amount']        =   1;
                $_SESSION['cart1'][$id]['price']    = $product1[0]['price'];
            }
            } else {
                $_SESSION['cart1'][$id]['id']        = $product1[0]['id'];
                $_SESSION['cart1'][$id]['img_link']  = $product1[0]['img_link'];
                $_SESSION['cart1'][$id]['name']      = $product1[0]['name'];
                $_SESSION['cart1'][$id]['amount']        =   1;
                $_SESSION['cart1'][$id]['price']    = $product1[0]['price'];
            }
            header('location: ?page=trangchu');
            break;

            case 'changecart1':
            $method = $_GET['method'];
            $id = $_GET['id'];
            switch ($method) {
                case 'giam':
                    $_SESSION['cart1'][$id]['amount'] -= 1;
                    if ($_SESSION['cart1'][$id]['amount'] == 0) {
                        unset($_SESSION['cart1'][$id]);
                    }
                    if (empty($_SESSION['cart1'])) {
                        unset($_SESSION['cart1']);
                    }
                    header('location: ?page=giohang');
                    break;
                case 'tang':
                    $_SESSION['cart1'][$id]['amount'] += 1;
                    header('location: ?page=giohang');
                    break;
            }
            break;
            case 'del1':
            if (isset($_GET['id'])) {
                $product_id = $_GET['id'];

                // Xóa Session ID của sản phẩm
                unset($_SESSION['cart1'][$product_id]);
                if (empty($_SESSION['cart1'])) {
                    unset($_SESSION['cart1']);
                }
                header('location: ?page=giohang');
            }

            break;

            case 'trangchu':
            header('location: ?page=trangchu');
                break;
            default:
            # code...
            break;
        }
    }
    // require "view/v_giohang.php";
?>
