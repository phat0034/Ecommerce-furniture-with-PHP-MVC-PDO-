<?php
$act = 'comment';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'comment':
        include_once "./View/profile/comment.php";
        break;
    case 'postcmt':
        if (isset($_POST['sendCmt'])) {
            $idkhcmt = $_POST['idkhcmt'];
            $idhhcmt = $_POST['idhhcmt'];
            $noidungcmt = $_POST['noidungcmt'];
            $cmt = new comment();
            $cmt->insertComment($idkhcmt, $idhhcmt, $noidungcmt);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=spct&id=' . $idhhcmt . '" />';
        }
        break;
    case 'removecmt':

        break;
}
