<?php
$act = "";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        //gửi qua đây những thông tin trên form ( input, select )
        $tenkh = '';
        $dc = '';
        $sodt = '';
        $user = '';
        $pass = '';
        $email = '';
        if (isset($_POST['submit'])) {
            $dc = $_POST['diachi'];
            $sodt = $_POST['sodt'];
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $role = "";
            if ($role == "") {
                $role = 0;
            }
            //mã hóa $pass
            $saltF = "G4335#";
            $salfL = "F5567!";
            $passnew = md5($saltF . $pass . $salfL);
            // controller yêu cầu model phải insert vào database
            $kh = new user();
            $exists = $kh->checkKhachHang($user, $email);
            // var_dump($exists);

            if ($exists) {
                echo '<script> alert("Tên đăng nhập hoặc email đã tồn tại. Vui lòng thử lại."); </script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                exit;
            } else {
                $kq = $kh->insertKhachHang($user, $passnew, $email, $dc, $sodt, $role);
                if ($kq) {
                    echo '<script> alert("dang ky thanh cong"); </script>';
                    $logkh = $kh->logKhachHang($user, $passnew);
                    if ($logkh) {
                        //lưu giá trị vào trong session
                        $_SESSION['idkh'] = $logkh['idkh'];
                        $_SESSION['tenkh'] = $logkh['username'];
                        $_SESSION['role'] = $logkh['role'];
                    }
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                } else {
                    echo '<script> alert("dang ky khong thanh cong"); </script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                }
            }
        }
        break;
}
