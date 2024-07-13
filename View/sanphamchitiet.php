    <div class="detail_product_all">
        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hh = new hanghoa();
            $itemcthh = $hh->getCthh($id);
            // var_dump($itemcthh);
            $idloai = $itemcthh['maloai'];
            $tenloai = $itemcthh['tenloai'];
            $tenhh = $itemcthh['tenhh'];
            $mota = $itemcthh['mota'];
        }

        ?>

        <div class="row">

            <div class="col-6">
                <input type="hidden" name="idhh" value="<?php echo $id; ?>" />
                <div class="img_detail">
                    <?php
                    $hinh = $hh->getHinhCTHH($id)->fetch();

                    $mau = $hh->getMauCthanghoa($id);
                    $hinh = $hh->getCthanghoaHinh($id);
                    $only1Color = $mau->fetch();
                    // var_dump($only1Color);
                    $lowerColor = strtolower($only1Color['tenmau']);
                    // echo $lowerColor;
                    ?>
                    <img src=".\Content\image\product\<?php echo $hinh[0] . $lowerColor ?>.jpg" alt="" id="productImage" value="./Content/image/product/<?php echo $hinh[0] ?>">

                </div>
            </div>
            <div class="col-6">
                <div class="product_detail">
                    <form method="post" action="index.php?action=giohang&act=addtocart" id="addToCartForm">
                        <input type="hidden" name="idhh" value="<?php echo $id; ?>">
                        <input type="hidden" name="tenhh" value="<?php echo $tenhh; ?>">
                        <input type="hidden" name="idmau" id="idmau" value="<?php $idmaunotnull = $hh->getMauCthanghoa($id)->fetch();
                                                                            $dongia = $hh->getDonGiaByIdAndMau($id, $idmaunotnull['idmau']);
                                                                            echo ($idmaunotnull['idmau']);
                                                                            // echo($dongia); 
                                                                            ?>">


                        <div class="part1">
                            <h3><?php
                                echo $tenhh;
                                ?></h3>
                            <p class="loai"><strong>LOẠI:</strong><a href=""><?php echo $tenloai ?></a></p>
                            <p class="description"><?php echo $mota ?></p>
                            <p class="color">Màu sắc:</p>
                            <ul>
                                <?php
                                $fetchitmau = $hh->getMauCthanghoa($id);
                                while ($itmau = $fetchitmau->fetch()) :
                                    $colorcthh = strtolower($itmau['tenmau']);
                                    $colorid = $itmau['idmau'];
                                ?>
                                    <li><a class="pickcolor" data-color-id="<?php echo  $colorid ?>" href="#" value="<?php echo $colorcthh ?>" onclick="getColor('<?php echo $colorcthh ?>')"></a></li>
                                <?php
                                endwhile;
                                ?>
                            </ul>
                            <div class="amount">
                                <label for="soluong">Số lượng:</label>
                                <input type="number" name="soluong" id="soluong" min="1" value="1">
                            </div>
                            <p class="" style="font-size:30px;font-weight:700">Giá: <span class="price" id="dongia" value=""><?php if($hh->getSalebyIdnColor($id, $colorid)[0]<=0){
                                echo number_format($hh->getPricebyIdnColor($id, $colorid)[0]);
                            }else{
                                echo number_format($hh->getSalebyIdnColor($id, $colorid)[0]);
                            } ?> </span> đ</p>
                            <input type="hidden" name="mau" id="mau" value="">
                            <p class="stock">TÌNH TRẠNG: <strong>CÒN HÀNG</strong></p>
                            <div class="cart my-3">
                                <button class="add2Cart w-100">THÊM VÀO GIỎ</button>
                            </div>


                    </form>
                    <form action="index.php?action=wishlist&act=addtoWl" method="post">
                        <div class="addwish d-flex">
                            <?php
                            if (isset($_SESSION['idkh'])) {
                                $idkhwl = $_SESSION['idkh'];
                            } else {
                                $idkhwl = "null";
                            }
                            ?>
                            <input type="hidden" name="idhhwl" value="<?php echo $id; ?>">
                            <input type="hidden" name="idkhwl" value="<?php echo $idkhwl ?>">
                            <input type="hidden" name="idmauwl" id="idmau" value="<?php $idmaunotnull = $hh->getMauCthanghoa($id)->fetch();
                                                                                    $dongia = $hh->getDonGiaByIdAndMau($id, $idmaunotnull['idmau']);
                                                                                    echo ($idmaunotnull['idmau']);
                                                                                    // echo($dongia); 
                                                                                    ?>">
                            <button class="w-50" name="addtoWl"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                                THÊM VÀO YÊU THÍCH
                            </button>

                            <button class="w-50"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3" />
                                </svg> CHIA SẺ</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>


    </div>
    <div class="comment_all my-5">
        <div class="row">
            <div class="col-6">
                <h3>Bình Luận</h3>
                <div class="comment_input w-100 ">
                    <?php
                    // if(isset($_SESSION['idkh'])){
                    //     echo '  <div class=" post_place d-flex">
                    //     <div class="" style="">
                    //         <img src="./black.jpg" alt="" class="avatar">
                    //     </div>
                    //     <div class="w-100" style="  margin-left: 15px;">
                    //         <form action="">
                    //             <textarea class="comment_textarea" placeholder="Nhập bình luận"></textarea>
                    //             <div class="sendButton w-100  position-relative" style="height: 40px;">
                    //                 <button name="sendCmt" class="text-end position-absolute " style="right: 0; top: 10%;">Gửi</button>
                    //             </div>
                    //         </form>
                    //     </div>
                    // </div>';
                    // }
                    // else{
                    //     echo '<div class="disableComment w-100  ">
                    //     <p class="">Bạn cần phải <a href="">đăng nhập</a> để để lại bình luận</p>
                    // </div>';
                    // }

                    ?>
                    <?php

                    if (isset($_SESSION['idkh'])) {
                        echo '<div class=" post_place d-flex">
                        <div class="" style="">
                            <img src="./Content/image/avatar/default-avt.webp" alt="" class="avatar">
                        </div>
                        <div class="w-100" style="  margin-left: 15px;">
                            <form action="index.php?action=comment&act=postcmt" method="post">
                                <?php

                                ?>
                                <input type="hidden" name="idkhcmt" value="' . $_SESSION['idkh'] . '">
                                <input type="hidden" name="idhhcmt" value=" ' . $_GET['id'] . ' ">

                                <textarea class="comment_textarea" name="noidungcmt" placeholder="Nhập bình luận" value=""></textarea>
                                <div class="sendButton w-100  position-relative" style="height: 40px;">
                                    <button name="sendCmt" class="text-end position-absolute " style="right: 0; top: 10%;">Gửi</button>
                                </div>
                            </form>
                        </div>

                    </div>';
                    } else {
                        echo '  <div class="disableComment w-100  ">
                        <p class="">Bạn cần phải đăng nhập để bình luận</p>
                    </div>';
                    }
                    ?>


                </div>
                <div class="border">

                </div>
                <?php
                $cmt1 = new comment();
                $allcmt = $cmt1->getComment($id);

                while ($itemcmt = $allcmt->fetch()) :
                    $idkhcmt = $itemcmt['idkh'];
                    $tenkhcmt = $cmt1->getnameCmtbyIdkh($idkhcmt);
                ?>
                    <div class="comment_row d-flex">
                        <div class="">
                            <img src="./Content/image/avatar/default-avt.webp" alt="" class="avatar">
                        </div>

                        <div class="comment_content w-100">
                            <div class="nameAndTime d-flex justify-content-between w-100">
                                <h6><?php echo $tenkhcmt[0] ?></h6>
                                <p style="margin: 0;"><?php echo $itemcmt['ngaytao'] ?></p>
                            </div>
                            <p> <?php echo $itemcmt['noidung'] ?></p>
                        </div>

                    </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
    <div class="another_product mt-5">
        <!-- <div class="best_seller">
            <div class="title">
                <h2>Các sản phẩm nổi bật khác</h2>
            </div>

            <div class="row">
                <div class="col">
                    <img src="" alt="">
                    <h3>NGÓI TRÁNG MEN CAO CẤP TITAN002
                    </h3>
                    <p>100000 đ</p>
                </div>
                <div class="col">
                    <img src="" alt="">
                    <h3>NGÓI TRÁNG MEN CAO CẤP TITAN002
                    </h3>
                </div>
                <div class="col">
                    <img src="" alt="">
                    <h3>NGÓI TRÁNG MEN CAO CẤP TITAN002
                    </h3>
                </div>
                <div class="col">
                    <img src="" alt="">
                    <h3>NGÓI TRÁNG MEN CAO CẤP TITAN002
                    </h3>
                </div>


            </div>
            <div class="viewMore">
                <a href="" class="text-center ">XEM THÊM</a>
            </div>
        </div> -->
        <div class="same_type">
            <div class="title">
                <h2>Các sản phẩm liên quan</h2>
            </div>

            <div class="show_Product d-flex flex-wrap">
                <?php
                $hh = new hanghoa();

                $result = $hh->getHangHoasameType($idloai);

                while ($item = $result->fetch()) :
                    $idhh = $item['idhh'];
                    $cthh = $hh->getCthanghoaId($idhh);
                    $mau = $hh->getMauCthanghoa($idhh);
                    $minPrice = $hh->getMinPrice($idhh)[0];
                    $maxPrice = $hh->getMaxPrice($idhh)[0];
                    $minSale = $hh->getMinSale($idhh)[0];
                    $maxSale = $hh->getMaxSale($idhh)[0];
                ?>
                    <!-- fecth từ đây -->
                    <div class="card" style="width: 250px; ">
                        <?php
                        // var_dump($fectchh);
                        $hinh = $hh->getCthanghoaHinh($idhh);
                        $only1Color = $mau->fetch();
                        $lowerColor = strtolower($only1Color[1]);
                        ?>
                        <img src=".\Content\image\product\<?php echo $hinh[0] . $lowerColor ?>.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['tenhh'] ?></h5>
                            <?php
                            if ($minSale > 0) {
                                echo '<p class="card-text sale"><span >' . number_format($minPrice, 0, ".", ",") . '</span> -
                                        <span>' . number_format($maxPrice, 0, ".", ",") . '</span> đ
                                    </p>
                                    <p class="card-text-sale "><span class="firstPrice">' . number_format($minSale, 0, ".", ",") . '</span> -
                                        <span>' . number_format($maxSale, 0, ".", ",") . '</span> đ
                                    </p>';
                            } else {
                                echo '   
                                     <p class="card-text active"><span class="firstPrice">' . number_format($minPrice, 0, ".", ",") . '</span> - <span>
                                     ' . number_format($maxPrice, 0, ".", ",") . '</span> đ</p>';
                            }
                            ?>
                            <div class="color_Product">
                                <ul>
                                    <?php
                                    $fetchmau = $hh->getMauCthanghoa($idhh);
                                    while ($itmau = $fetchmau->fetch()) {
                                        echo ' <li><a href="index.php?action=sanpham&act=spct&id=' . $idhh . '" value="' . $itmau['tenmau'] . '"></a></li>';
                                    }

                                    ?>
                                </ul>
                            </div>
                            <div class="more_infor d-flex justify-content-end">
                                <a href="index.php?action=sanpham&act=spct&id=<?php echo $idhh ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <div class="viewMore w-75">
                <a href="index.php?action=sanpham&act=tag&idtag=<?php echo $idloai ?>" class="text-center">XEM THÊM</a>
            </div>
        </div>
    </div>
    </div>
    <script>
        const pickcolor = document.querySelectorAll('.pickcolor');
        pickcolor.forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
                const color = link.getAttribute('value');
                changeImage(color);
                updatePrice(color);
                console.log(updatePrice(color));
            });
        });

        function changeImage(color) {
            const productImage = document.getElementById('productImage');
            const urlImage = productImage.getAttribute('value');
            const imagePath = `${urlImage}${color}.jpg`;
            productImage.src = imagePath;
        }

        function updatePrice(color) {
            const idhh = document.querySelector('input[name="idhh"]').value;
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    const newPrice = this.responseText;
                    document.getElementById('dongia').innerHTML = newPrice;
                }
            };
            xhttp.open('POST', 'Controller/update_price.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send(`color=${color}&idhh=${idhh}`);
        }

        function getMauId(color) {
            // Ánh xạ màu sắc với idmau
            const mauIds = {
                'white': 1,
                'black': 2,
                'grey': 3,
                'red': 4,
                'blue': 5,
                'green': 6,
                'purple': 7,
                'yellow': 8
            };
            return mauIds[color] || null;
        }

        function changeColor() {
            var links = document.querySelectorAll(".pickcolor"); // chỉ tác động vào các liên kết trong phần chọn màu

            links.forEach(function(link) {
                var color = link.getAttribute("value");

                // Thiết lập màu nền tùy thuộc vào giá trị màu
                if (color === "white") {
                    link.style.backgroundColor = "#F5F5F5";
                } else if (color === "red") {
                    link.style.backgroundColor = "#FF6961";
                } else if (color === "green") {
                    link.style.backgroundColor = "#93E9BE";
                } else if (color === "black") {
                    link.style.backgroundColor = "#212121";
                } else if (color === "grey") {
                    link.style.backgroundColor = "#949494";
                } else if (color === "yellow") {
                    link.style.backgroundColor = "#FCFC69";
                } else if (color === "brown") {
                    link.style.backgroundColor = "#C46200";
                } else if (color === "blue") {
                    link.style.backgroundColor = "#32CBF1";
                }
            });
        }

        function changeColorotherProd() {
            var links = document.querySelectorAll(".show_Product ul li a");

            links.forEach(function(link) {
                var color = link.getAttribute("value");
                if (color === "White") {
                    link.style.backgroundColor = "#F5F5F5";
                } else if (color === "Red") {
                    link.style.backgroundColor = "#FF6961";
                } else if (color === "Green") {
                    link.style.backgroundColor = "#93E9BE";
                } else if (color === "Black") {
                    link.style.backgroundColor = "#212121";
                } else if (color === "Grey") {
                    link.style.backgroundColor = "#949494";
                } else if (color === "Yellow") {
                    link.style.backgroundColor = "#FCFC69";
                } else if (color === "Brown") {
                    link.style.backgroundColor = "#C46200";
                } else if (color === "Blue") {
                    link.style.backgroundColor = "#32CBF1";
                }
            });
        }
        // var pcl =document.getElementsByClassName("pickcolor")
        // pcl.addEventListener("click", function() {
        //     document.getElementById("idmau").value = mau;
        //     console.log(mau);
        // });


        function getColor(mau) {
            document.getElementById("idmau").value = getMauId(mau);

            console.log(getMauId(mau));
        }
        window.onload = function() {
            changeColor();
            changeColorotherProd();
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>