<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once('./View/profile/menu_profile.php')
        ?>
        <div class="col-9">
            <div class="pf_right_wishlist">
                <?php

                if (isset($_SESSION['idkh'])) :


                ?>
                    <div class="tilte_wishlist">
                        <h3>Sản phẩm yêu thích</h3>
                        <p>Danh sách các sản phẩm mà bạn đã đánh dấu "yêu thích"</p>
                    </div>
                    <?php
                    if (isset($_SESSION['idkh'])) {
                        $idkhwl = $_SESSION['idkh'];
                    } else {
                        $idkhwl = "null";
                    }
                    // var_dump($idkhwl);
                    $wl = new wishlist();

                    // var_dump($wl->getAllwishlist($idkhwl)->fetchAll());
                    $getlistwl = $wl->getAllwishlist($idkhwl);
                    while ($item = $getlistwl->fetch()) :
                        $idhhwl = $item['idhh'];
                        // echo $idhhwl;
                        $tenhhwl = $wl->showTenhhwl($idhhwl)[0];
                        $hinhwl = $wl->showHinhwl($idhhwl)[0];
                        $mauwl = strtolower($wl->showMauwl($idhhwl)[0]);
                        $loaiwl = $wl->showLoaiwl($idhhwl)[0];
                        $maloaiwl = $wl->showMaloaiwl($idhhwl)[0];
                        $minPrice = $wl->getMinPrice($idhhwl)[0];
                        $maxPrice = $wl->getMaxPrice($idhhwl)[0];

                    ?>
                        <div class="tongquan_wishlist mb-3">
                            <div class="row ">
                                <div class="col-2">
                                    <img src=".\Content\image\product\<?php echo $hinhwl . $mauwl ?>.jpg" class="" alt="">
                                </div>
                                <div class="col-7">
                                    <div class="">
                                        <div class="wishlist_title">
                                            <h6>
                                                <a href="./index.php?action=sanpham&act=spct&id=<?php echo     $idhhwl  ?>"><?php echo $tenhhwl ?></a>
                                            </h6>
                                            <div class="wishlist_catalog">
                                                <a href="index.php?action=sanpham&act=tag&idtag=<?php echo $maloaiwl ?>"><?php echo $loaiwl ?></a>
                                                <!-- <a href="">Giải trí</a>, <a href="">Phần mềm</a> -->
                                            </div>
                                        </div>
                                        <div class="button_wishlist ">
                                            <div class="row">
                                                <div class="col-1">
                                                    <div class="wish_heartter">
                                                        <form method="post" action="index.php?action=wishlist&act=removeWl">
                                                            <?php
                                                            if (isset($_SESSION['idkh'])) {
                                                                $idkhwl = $_SESSION['idkh'];
                                                            } else {
                                                                $idkhwl = "null";
                                                            }
                                                            ?>
                                                            <input type="hidden" name="idhhremove" value="<?php echo $idhhwl; ?>">
                                                            <input type="hidden" name="idkhremove" value="<?php echo $idkhwl ?>">
                                                            <button type="submit" name="removeFromWishlist" style="background-color:transparent; border:none"><svg xmlns="http://www.w3.org/2000/svg" width=" 20" height="20" fill="red" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                                                                </svg></button>
                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="col-5">
                                                    <div class="wish_cart">
                                                        <a href="" class="d-flex align-items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                                                                <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
                                                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                                                            </svg>
                                                            <p class="mb-0 ms-2">Thêm vào giỏ</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 list_price mt-auto mb-auto">
                                    <div class="price_wishlist">
                                        <div class="d-flex justify-content-end" style="">
                                            <h6>Giá: </h6>
                                            <h6><?php echo number_format($minPrice) ?></h6>
                                            <h6><?php echo '-' . number_format($maxPrice) ?> </h6>
                                        </div>

                                        <!-- <div class="sale_wishlist d-flex justify-content-end">
                                        <p href="" class="seo me-2">-62%</p>
                                        <p class="m-0">280000đ</p>
                                    </div> -->
                                    </div>
                                </div>

                                <div class="col-1 mb-auto mt-auto">
                                    <div class="remove_wishlist d-flex justify-content-end ">
                                        <form method="post" action="index.php?action=wishlist&act=removeWl">
                                            <?php
                                            if (isset($_SESSION['idkh'])) {
                                                $idkhwl = $_SESSION['idkh'];
                                            } else {
                                                $idkhwl = "null";
                                            }
                                            ?>
                                            <input type="hidden" name="idhhremove" value="<?php echo $idhhwl; ?>">
                                            <input type="hidden" name="idkhremove" value="<?php echo $idkhwl ?>">
                                            <button type="submit" name="removeFromWishlist" style="background-color:transparent; border:none"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                </svg></button>
                                        </form>


                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php
                    endwhile;
                    ?>
                <?php
                else :
                    echo '<script>alert("Vui lòng đăng nhập trước khi thao tác!")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                endif;
                ?>
            </div>
        </div>
    </div>

</div>