<?php
$act = "editprod";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'editprod':
        include_once "View/editprod.php";
        break;
    case 'edit_act':
        if (isset($_POST['submitEdit'])) {
            $id = 0;
            if (isset($_POST['idhh'])) {
                $id = $_POST['idhh'];
            }
            if (isset($_POST['colorProd']) &&  $_POST['colorProd'] == null) {
                echo '<script>alert("VUI LÒNG CHỌN MÀU LẠI!!")</script>';
                echo '<meta http-equiv="refresh" content="0;url=admin.php?action=product"/>';
            } else {
                $idmau = $_POST['colorProd'];
                $gia = $_POST['priceText'];
                $sale = $_POST['saleText'];
                $sl = $_POST['slText'];
                $nd = $_POST['noidungText'];
                $pd = new product();
                $pd->editHanghoa($id, $sl, $nd);
                $pd->editCTHH($id, $idmau, $gia, $sale);
                echo '<meta http-equiv="refresh" content="0;url=admin.php?action=product"/>';
            }
        }

        break;
    case 'remove':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $pd= new product();
            $pd->removeCTHH($id);
            $pd->removeHH($id);
            echo '<script>alert("Xóa thành công")</script>';
            echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=product"/>';
        }
        break;
        break;
}
