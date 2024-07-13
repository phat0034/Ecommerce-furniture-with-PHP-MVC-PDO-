<?php

if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'dangnhap':
        $user = "";
        $pass = '';
        if (isset($_POST['submit'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            //mã hóa $pass
            $saltF = "G4335#";
            $salfL = "F5567!";
            $passnew = md5($saltF . $pass . $salfL);
            $kh = new user();
            $logkh = $kh->logKhachHang($user, $passnew);
          
            if ($logkh) {
                //lưu giá trị vào trong session
                $_SESSION['idkh'] = $logkh['idkh'];
                $_SESSION['tenkh'] = $logkh['username'];
                $_SESSION['role'] = $logkh['role'];
                $role= $logkh['role'];
                var_dump($role);
                var_dump( $_SESSION['role'] );
                // echo "<script>alert('Đăng nhập thành công')</script>";

                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
            } else {
                echo "<script>alert('Đăng nhập không thành công')</script>";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
            }
        }
        break;
    case 'dangxuat':
        unset($_SESSION['idkh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
}

