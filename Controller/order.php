<?php

$act = "order";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'order':
        include_once "./View/profile/history_order.php";
        break;
        // case 'timkiem':
        //     include_once "./View/sanpham.php";
        //     break;
    case 'order_action':
        if (isset($_SESSION['idkh'])) {
            $makh = $_SESSION['idkh'];
            echo "makh:" . $makh . "</br>";
            $hd = new hoadon();
            $sohd = $hd->insertHoaDon($makh); //20
            var_dump($sohd);
            $_SESSION['masohd'] = $sohd;
            echo  $_SESSION['masohd'];
            $total = 0;
            //đẩy các sản phẩm trong giỏ hàng vào hóa đơn
            // var_dump($_SESSION['cart']);
            foreach ($_SESSION['cart'] as $key => $item) {
                var_dump($item);
                // var_dump($hd->insertCthoadon($sohd, $item['mahh'], $item['qty'], $item['mau'], $item['total']));

                $hd->insertCthoadon($sohd, $item['mahh'], $item['qty'], $item['mau'], $item['total']);
                $total += $item['total'];
            }
            //sau khi insert vào bảng cthoadon thì cập nhật lại tổng tiền cho bảng hóa đơn
            $hd->updateHoadon($sohd, $makh, $total);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=order"/>';
        } else {
            echo '<script>alert("Vui lòng đăng nhập trước khi thao tác")</script>';
            include_once "./View/profile/history_order_detail.php";
        }

        break;

    case 'cthd':
        include_once "./View/profile/history_order_detail.php";
        break;
}
//view đòi hỏi phải có thông tin của hóa đơn, cthoadon mới hiển thị lên duoc


// include_once './View/profile_history.php';
