<?php

$act = "account";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'account':
        include_once "./View/profile/account.php";
        break;
    case 'edit_prf':
        if (isset($_POST['idkh'])) {
            $idkh = $_POST['idkh'];
            if ($idkh == 'null') {
                echo '<script>alert("Vui lòng đăng nhập!")</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
            } else {
                if (isset($_POST['changeProfile'])) {
                    //lấy thông tin cũ, nếu null thì trả về thông tin cũ
                    $user = new user();
                    $fkhachhang = ($user->getAllfromKhachhang($idkh))->fetch();
                    $emailold = $fkhachhang['email'];
                    $sdtold = $fkhachhang['sodienthoai'];
                    $diachiold = $fkhachhang['diachi'];
                    //

                    $email = $_POST['changeEmail'];
                    $sdt =  $_POST['changeNumb'];
                    $diachi =  $_POST['changeAddress'];
                    if ($email == null) {
                        $email = $emailold;
                    }
                    if ($sdt == null) {
                        $sdt = $sdtold;
                    }
                    if ($diachi == null) {
                        $diachi = $diachiold;
                    }
                    $user = new user();
                    // var_dump($user->updateProfile($email, $diachi, $sdt, $idkh));
                    echo '<script>alert("Thay đổi thành công!")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=account" />';
                }
            }
        } else {
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
        }


        break;
}
