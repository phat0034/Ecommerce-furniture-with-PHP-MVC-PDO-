<?php
$act = 'wishlist';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'wishlist':
        include_once "./View/profile/wishtlist.php";
        break;
    case 'addtoWl':
        if (isset($_POST['addtoWl'])) {
            $idhhwl = $_POST['idhhwl'];
            $idkhwl = $_POST['idkhwl'];
            $wl = new wishlist();
            if (!isset($idkhwl) || $idkhwl == "null") {
                echo '<script>alert(
                    "Vui lòng đăng nhập để thực hiện thao tác này"
                )</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=spct&id=' . $idhhwl . '"/>';
            } else {
                if ($wl->checkWishlistItem($idhhwl, $idkhwl)) {
                    echo '<script>alert("Sản phẩm đã có trong danh sách yêu thích!")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=spct&id=' . $idhhwl . '"/>';
                } else {


                    $wl->insertWishlist($idhhwl, $idkhwl);
                    echo '<script>alert(
                    "Đã Thêm Vào Yêu Thích !"
                )</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=spct&id=' . $idhhwl . '"/>';
                }
            }
        }

        break;
    case 'removeWl':
        if (isset($_POST['removeFromWishlist'])) {
            $idhhremovewl = $_POST['idhhremove'];
            $idkhremovewl = $_POST['idkhremove'];
            $wl = new wishlist();
            if (!isset($idkhremovewl) || $idkhremovewl == "null") {
                echo '<script>alert(
                    "Vui lòng đăng nhập để thực hiện thao tác này"
                )</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            } else {
                $wl->removeFromWishlist($idkhremovewl, $idhhremovewl);
                echo '<script>alert(
                    "Đã Xóa Sản Phẩm Khỏi Danh Sách Yêu Thích !"
                )</script>';
                // var_dump(      $wl->removeFromWishlist($idkhremovewl, $idhhremovewl));
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=wishlist"/>';
            }
        }
        break;
}
