<?php
// unset($_SESSION['cart']);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'giohang':
        include_once "./View/cart.php";
        break;
    case 'addtocart':
        //nhận thông tin 1 món hàng cần mua
        //nhận đc mahh,mau,size,soluong
        $id = 0;
        $soluong = 0;
        if (isset($_POST['idhh'])) {
            $id = $_POST['idhh'];
            // echo $id;
            $idmau = $_POST['idmau'];
            $soluong = $_POST['soluong'];

            //đem toàn bộ thông tin vào giỏ hàng
            $gh = new giohang();
            $gh->addCart($id, $idmau, $soluong);
            // echo ' <script>alert("Thêm vào giỏ hàng thành công!!")</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=spct&id='. $id.'"/>';
        }
        break;
}
