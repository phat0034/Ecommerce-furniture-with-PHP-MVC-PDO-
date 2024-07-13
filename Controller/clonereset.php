<?php
$act = "resetpass";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'resetpass':
        include_once "./View/profile/resetpassword.php";
        break;
    case 'rscf':
        if (isset($_POST['changepass'])) {
            $email = $_POST['custEmail'];
            $currentPass = $_POST['currentPass'];
            $newPass = $_POST['newPass'];
            $saltF = "G4335#";
            $salfL = "F5567!";
            $mhcurrentPass = md5($saltF . $currentPass . $salfL);
            $mhnewPass = md5($saltF . $currentPass . $salfL);
            $user = new user();
            $hashedCurrentPass = $user->checkPassbyEmail($email)[0]; // Assuming this method returns the hashed password

            if ($mhcurrentPass === $hashedCurrentPass) {
               
                if ($user->changePasswNewpass($hashedNewPass, $email)) {
                    echo '<script>alert("Đổi Mật Khẩu Thành Công!")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=resetpass"/>';
                    exit();
                } else {
                    echo '<script> alert("Đã xảy ra lỗi khi cập nhật mật khẩu!")</script>';
                }
            } else {
                echo '<script> alert("Mật Khẩu Hiện Tại Không Chính Xác!")</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=resetpass"/>';
                exit();
            }
        }
        echo "fail";
        break;
}
