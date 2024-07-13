<?php
$act = "editmember";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'editmember':
        include_once "View/editmember.php";
        break;
    case 'edit_act':
        if (isset($_POST['submitEdit'])) {
            $idkh = $_POST['idkh'];
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
            // Hiển thị hộp thoại xác nhận trên trình duyệt của người dùng
            $mb->updateKhachhang($idkh, $username, $passnew, $email, $diachi, $sdt, $role);
            // Tiếp tục xử lý dữ liệu sau khi xác nhận
            echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=member"/>';
        }
        break;
    case 'remove_act':
        if (isset($_GET['id'])) {
            $idkh = $_GET['id'];
            $mb = new member();
            $mb->removeKhachhang($idkh);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=member"/>';
        }
        break;
}
