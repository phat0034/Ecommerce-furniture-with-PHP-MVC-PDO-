<?php
if (isset($_POST['strangerSubmit'])) {
    $name = $_POST['strangerName'];
    $email = $_POST['strangerEmail'];
    $sdt = $_POST['strangerFNum'];
    $noidung = $_POST['strangerDM'];
    $user = new user();
    $checkNoidung = $user->checkNoidungspam($noidung)[0];
    if ($checkNoidung > 0) {
        echo '<script>alert("Chúng tôi đã nhận được thông tin của bạn,xin đừng spam!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    } else {
        $user->insertSupport($name, $email,  $sdt, $noidung);
        echo '<script>alert("Gửi biểu mẫu thành công!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
    }
}
