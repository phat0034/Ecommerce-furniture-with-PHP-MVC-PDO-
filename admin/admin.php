<?php
session_start();
spl_autoload_register("myModelClassLoader");
function myModelClassLoader($className)
{
    $path = 'Model/';
    include_once $path . $className . '.php';
}
// Kiểm tra quyền truy cập

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dai Hoang Furniture</title>
    <link rel="icon" type="image/x-icon" href="../Content/image/home/logo dai hoang.png">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Content/Css/profile_page.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php
    // Nội dung trang admin
    ?>
    <!-- header -->
    <!-- hiển thị nội dung -->
    <div class="">
        <div class="row">

            <?php
          
            if (isset($_SESSION['role']) && $_SESSION['role'] == 1 && isset($_SESSION['tenkh'])) {
                // Nếu quyền là 1, tiếp tục xử lý và hiển thị nội dung trang admin
                $ctrl = "product";
                // điều phối đến những controller khác thông qua biến action
                if (isset($_GET['action'])) {
                    $ctrl = $_GET['action']; // trang sản phẩm
                }
                include_once "Controller/$ctrl.php";
            } else {
                // Nếu không phải quyền admin, điều hướng tới trang chủ
                echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
            }

            ?>
        </div>
    </div>
    <!-- hiển thị footer -->
    <?php
    // include_once "View/footer.php";
    ?>
    <script src="./Content/Javascript/index.js"></script>
</body>

</html>