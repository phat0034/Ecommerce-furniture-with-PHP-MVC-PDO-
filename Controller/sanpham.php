<?php

$act = "sanpham";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'sanpham':
        include_once "./View/sanpham.php";
        break;
        // case 'sanphamkhuyenmai':
        //     include_once "./View/sanpham.php";
        //     break;
    case 'spct':
        include_once "./View/sanphamchitiet.php";
        break;
        // case 'timkiem':
        //     include_once "./View/sanpham.php";
        //     break;
    case 'tag':
        include_once "./View/sanpham.php";
        break;
    case 'search':
        include_once "./View/sanpham.php";
        break;
    case 'page':
        include_once "./View/sanpham.php";
        break;
}
