<?php
$act = "addmember";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'addmember':
        include_once "View/addmember.php";
        break;
    case 'add':
        if (isset($_POST['submitAdd'])) {
            $username = $_POST['userText'];
            $password = $_POST['passText'];
            $saltF = "G4335#";
            $salfL = "F5567!";
            $passnew = md5($saltF . $password . $salfL);
            $email = $_POST['emailText'];
            $diachi = $_POST['dcText'];
            $sdt = $_POST['sdtText'];
            $role = $_POST['roleText'];
            $mb = new member();
            $mb->addKhachhang($username, $passnew, $email, $diachi, $sdt, $role);
            echo '<script>alert("Thêm tài khoản thành công")</script>';
            echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=member"/>';
        }
        break;
 
}
