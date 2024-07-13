<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dai Hoang Furniture</title>
    <link rel="icon" type="image/x-icon" href="./Content/image/home/logo dai hoang.png">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./Content/CSS/style.css">
    <link rel="stylesheet" href="./Content/CSS/productdetail.css">
    <link rel="stylesheet" href="./Content/CSS/productpage.css">
    <link rel="stylesheet" href="./Content/CSS/profile_page.css">
    <style>
        .cartShow {
            font-size: 35px;
            text-decoration: none;
            position: relative;
            color: #000;
            /* Đặt vị trí tương đối cho thẻ a */
        }

        .cartShow a {

            color: #fff;
            /* Đặt vị trí tương đối cho thẻ a */
        }

        .countCart {
            position: absolute;
            /* Đặt vị trí tuyệt đối cho thẻ countCart */
            top: 47%;
            /* Điều chỉnh vị trí top để lồng lên thẻ a */
            right: 20%;
            /* Điều chỉnh vị trí right để lồng lên thẻ a */
            background-color: transparent;
            /* Màu nền của hình tròn */
            color: white;
            /* Màu chữ bên trong hình tròn */
            border-radius: 50%;
            /* Tạo hình tròn */
            width: 20px;
            /* Điều chỉnh kích thước của hình tròn */
            height: 20px;
            /* Điều chỉnh kích thước của hình tròn */
            display: flex;
            /* Hiển thị các phần tử bên trong theo chiều ngang */
            justify-content: center;
            /* Căn giữa theo chiều ngang */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            font-size: 15px;
            /* Điều chỉnh kích thước chữ bên trong hình tròn */
            cursor: pointer;
        }
    </style>

</head>

<body>

    <!-- start #header -->
    <header>
        <div class="header_all">
            <div class="header_top">
                <div class="all_top">
                    <div class="headerinfor">
                        <div class="row align-items-center ">
                            <div class="col-lg-5 col-md-12 ">
                                <div class="top-icon  ">
                                    <img src="./Content/image/home/logo dai hoang.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 d-flex  d-lg-block">
                                <div class="row ">
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="top-bar-item d-flex">
                                            <div class="top-bar-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                            <div class="top-bar-text">
                                                <h3>Mở cửa vào</h3>
                                                <p>Thứ 2 - Thứ 6, 8:00 - 9:00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="top-bar-item d-flex">
                                            <div class="top-bar-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                            <div class="top-bar-text">
                                                <h3>Liên Hệ Qua</h3>
                                                <p>+0949616779</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="top-bar-item d-flex">
                                            <div class="top-bar-icon">
                                                <i class="bi bi-calendar"></i>
                                            </div>
                                            <div class="top-bar-text">
                                                <h3>Email</h3>
                                                <p>xaydungdaihoang@gmail.com </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-bar nav_sticky " id="nav_sticky">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="index.php?action=home">TRANG CHỦ</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="#">VỀ CHÚNG TÔI</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link " aria-current="page" href="./index.php?action=home#contactUs">LIÊN HỆ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " aria-current="page" href="./index.php?action=home#ourproject">CÁC DỰ ÁN</a>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="index.php?action=sanpham" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                SẢN PHẨM
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                $hanghoa = new hanghoa();
                                                $fetchType = $hanghoa->getListType();
                                                while ($itemType = $fetchType->fetch()) :
                                                    $idloai = $itemType[0];
                                                    $tenloai = $itemType[1];
                                                ?>
                                                    <li><a class="dropdown-item" href="index.php?action=sanpham&act=tag&idtag=<?php echo $idloai ?>"><?php echo $tenloai ?></a></li>

                                                <?php endwhile ?>
                                                <li><a class="dropdown-item" href="index.php?action=sanpham">Xem Tất Cả</a></li>
                                                <div></div>
                                            </ul>
                                        </li>
                                        <li class="nav-item login_popup">
                                            <?php

                                            if (isset($_SESSION['idkh'])) {
                                                echo '<div class="dropdown dropdown_login">
                                                      <button class="btn btn-secondary dropdown-toggle" type="button"
                                                              data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #030f27; border: none;">
                                                              Xin chào, ' . $_SESSION['tenkh'] . '
                                                      </button>
                                                      <ul class="dropdown-menu">';
                                                if ($_SESSION['role'] == 1 && isset($_SESSION['role'])) {
                                                    echo '<li><a class="dropdown-item" href="./admin/admin.php">ADMIN PANEL</a></li>';
                                                }
                                                echo '   <li><a class="dropdown-item" href="./index.php?action=account">QUẢN LÝ TÀI KHOẢN</a></li>
                                                         <li><a class="dropdown-item" href="./index.php?action=order">LỊCH SỬ ĐƠN HÀNG</a></li>
                                                         <li><a class="dropdown-item" href="./index.php?action=wishlist">DANH SÁCH YÊU THÍCH</a></li>
                                                         <li><a class="dropdown-item" href="index.php?action=dangnhap&act=dangxuat">ĐĂNG XUẤT</a></li>
                                                         </ul>
                                                         </div>';
                                            } else {
                                                echo '<p class="nav-link m-0 loginform_btn" href="" id="loginform_btn">ĐĂNG NHẬP / ĐĂNG KÝ</p>';
                                            }
                                            ?>


                                            <div class="all_form" id="login" style=" display: none;">
                                                <div class="loginform_popup d-flex" id="loginform_popup">
                                                    <div class="closeform" id="closeform">
                                                        <span class="">X</span>
                                                    </div>
                                                    <div class="login_form">
                                                        <form class="p-3" action="index.php?action=dangnhap&act=dangnhap" method="post">
                                                            <h4>ĐĂNG NHẬP</h4>
                                                            <div class="mb-1">
                                                                <label for="exampleInputEmail1" class="form-label" style="color:#fdbe33;font-size: 16px;">Tên
                                                                    Tài
                                                                    Khoản</label>
                                                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="exampleInputPassword1" class="form-label" style="color:#fdbe33;font-size: 16px;">Mật
                                                                    Khẩu</label>
                                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                                            </div>

                                                            <button type="submit" name="submit" class="btn btn-primary mt-2">Đăng
                                                                Nhập</button>

                                                            <div class="no_account">
                                                                <p>Bạn Chưa Có Tài Khoản ?<span id="signup_link">Đăng Ký
                                                                        Ngay</span></p>
                                                            </div>
                                                            <div class="forgot_account">

                                                                <span>Bạn Quên Mật Khẩu ?<a href="index.php?action=forgetpw">Khôi Phục
                                                                        Ngay</a></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="register_form">
                                                        <form class="p-3" action="index.php?action=dangky&act=dangky" method="post">
                                                            <h4>ĐĂNG KÝ</h4>
                                                            <div class="mb-1">
                                                                <label for="exampleInputEmail1" class="form-label" style="color:#fdbe33;font-size: 16px;">Tên Tài Khoản</label>
                                                                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="exampleInputEmail1" class="form-label" style="color:#fdbe33;font-size: 16px;">Địa Chỉ</label>
                                                                <input type="text" class="form-control" name="diachi" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="exampleInputPassword1" class="form-label" style="color:#fdbe33;font-size: 16px;">Email</label>
                                                                <input type="email" class="form-control" name="email" id="exampleInputPassword1">
                                                            </div>
                                                            <div class="mb-1">
                                                                <label for="exampleInputPassword1" class="form-label" style="color:#fdbe33;font-size: 16px;">Số
                                                                    Điện Thoại<i></i></label>
                                                                <input type="number" class="form-control" name="sodt" id="exampleInputPassword1">
                                                            </div>

                                                            <div class="mb-1">
                                                                <label for="exampleInputPassword1" class="form-label" style="color:#fdbe33;font-size: 16px;">Mật
                                                                    Khẩu</label>
                                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                                            </div>


                                                            <button type="submit" name="submit" class="btn btn-primary mt-2">Đăng
                                                                Ký</button>
                                                            <div class="have_account">
                                                                <p>Bạn Đã Có Tài Khoản ?<span id="signin_link">Đăng Nhập
                                                                        Ngay</span></p>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="me-3 cartShow">
                                        <div class="aCart"><a href=""><i class="bi bi-bag"></i></a></div>
                                        <span class="countCart"><?php
                                                                $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array(); // Kiểm tra và gán giá trị mặc định nếu không tồn tại
                                                                if (empty($cart)) {
                                                                    echo 0;
                                                                } else {
                                                                    echo count($cart);
                                                                }

                                                                ?></span>
                                    </div>
                                   
                                    <form class="d-flex" role="search" action="index.php?action=sanpham&act=search" method="get">
                                        <input name="action" value="sanpham" hidden>
                                        <input name="act" value="search" hidden>
                                        <input class="form-control me-2" name="s" type="search" placeholder="Tìm kiếm từ khóa..." aria-label="Search" value="<?php echo isset($_GET["s"]) ? $_GET["s"] : '' ?>">
                                        <button class="btn" type="submit" ><i class="bi bi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <main>
        <script>
            document.querySelector('.cartShow').addEventListener('click', function() {
                window.location.href = './index.php?action=giohang'; // Thay 'link_moi' bằng liên kết mà bạn muốn chuyển hướng đến
            });
        </script>
        <script src="/Content/Javascript/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>