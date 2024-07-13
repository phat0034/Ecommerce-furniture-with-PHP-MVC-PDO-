<?php
// update_price.php
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/PHP2/daihoang/');
include_once(ROOT_PATH . 'Model/hanghoa.php');
if (isset($_POST['color']) && isset($_POST['idhh'])) {
    $color = $_POST['color'];
    $idhh = $_POST['idhh'];
    $hh = new hanghoa();
    $idmau = $hh->getMauIdByTenMau($color);
    $salePrice = $hh->getSalebyIdnColor($idhh, $idmau)[0];
    if($salePrice<=0){
        $dongia = $hh->getDonGiaByIdAndMau($idhh, $idmau);
        echo number_format($dongia);
    }else{
        $dongia = $salePrice;
        echo number_format($dongia);
    }
  
}
