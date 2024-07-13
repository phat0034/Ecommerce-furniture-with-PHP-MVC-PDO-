<?php

// include_once "Model/connect.php";
// include_once "Model/hanghoa.php";
//spl_autoload , sẽ load lên những file class hướng đối tượng
//cách 1:
session_start();
include_once './Model/class.phpmailer.php';
spl_autoload_register("myModelClassLoader"); //
function myModelClassLoader($className)
{
    $path = 'Model/';
    include_once $path . $className . '.php';
}
//cách 2
// set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
// spl_autoload_extensions('.php');
// spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dai Hoang Furniture</title>
    <link rel="icon" type="image/x-icon" href="./Content/image/home/logo dai hoang.png">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Content/CSS/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php
    include_once "View/header.php";


    ?>
    <!-- header -->
    <!-- hiên thi noi dung -->

    <div class="">
        <div class="row">
            <?php
            $ctrl = "home";
            //inde điều phối đến những controller khác thông qua biến action
            if (isset($_GET['action'])) {
                $ctrl = $_GET['action']; //trang sanpham
            }
            include_once "Controller/$ctrl.php";


            ?>


        </div>
    </div>
    <!-- hiên thị footer -->
    <?php
    include_once "View/footer.php";


    ?>
    <script src="./Content/Javascript/index.js"></script>
</body>

</html>