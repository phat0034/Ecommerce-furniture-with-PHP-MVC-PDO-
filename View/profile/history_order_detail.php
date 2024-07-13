<!-- icon boostrap -->
<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once('./View/profile/menu_profile.php');
        $id = 0;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $hd = new hoadon();

            $ngaytao = $hd->getallofHD($id)['ngaydat'];
            $trangthai = $hd->getallofHD($id)['trangthai'];
            $tongtien = $hd->getallofHD($id)['tongtien'];
            $idkh = 0;
            if (isset($_SESSION['idkh'])) {
                $idkh = $_SESSION['idkh'];
            }
            $tenkh = $hd->getEmailbycthd($idkh)[0];
            $diachi = $hd->getAddressbycthd($idkh)[0];
        }
        ?>
        <div class="col-9">
            <div class="pf_right_history">
                <?php

                if (isset($_SESSION['idkh'])) :


                ?>
                    <div class="tilte_history" f>
                        <h3>Chi tiết đơn hàng #<?php echo $id ?></h3>
                        <p>Hiển thị thông tin các sản phẩm bạn đã mua</p>
                    </div>
                    <div class="tongquan_history" style="font-size: 20px;">
                        <div class="row h-100 w-100 " style="border-bottom: 1px solid #000;">
                            <div class="col-6 ">
                                <h6 style="font-size: 27px;">Thông tin đơn hàng</h6>
                                <div class="">
                                    <div><strong>Mã đơn hàng:</strong> #<?php echo $id ?></div>
                                    <div><strong>Ngày tạo:</strong> <?php echo $ngaytao ?></div>
                                    <div><strong>Trạng thái đơn hàng: </strong><span class="fe"><?php if ($trangthai == 0) {
                                                                                                    echo "Chưa xử lý";
                                                                                                } else {
                                                                                                    echo "Đã hoàn tất";
                                                                                                }
                                                                                                ?></span></div>
                                    <div><strong>Người nhận: </strong><?php echo $tenkh ?></div>
                                </div>
                                </p>
                            </div>
                            <div class="col-6 ">
                                <div class="jb Pe">
                                    <h6 style="font-size: 27px;">Giá trị đơn hàng</h6>
                                    <div class="Me">
                                        <div class="d-flex ">
                                            <div><strong>Địa chỉ giao hàng: </strong></div>
                                            <div><?php echo $diachi ?></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div><strong>Tổng cộng</strong></div>
                                            <div><?php echo number_format($tongtien) ?>đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part2_detail mt-4" style="font-size: 20px;">
                            <div class="hdnkey mb-3 text-end"><a href="" target="_blank" rel="noreferrer"><button type="button" class="">Xuất hóa đơn <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                                        </svg></button></a></div>




                            <?php
                            $allcthd = $hd->getAllofCTHD($id);
                            while ($item = $allcthd->fetch()) :
                                $mausaccthd = $hd->translateColor($item['mausac']);
                                $thanhtien = $item['thanhtien'];
                                $soluongcthd = $item['soluongmua'];
                                $tenhh = $hd->getNamebycthd($item['idhh']);
                                $hinh = $hd->getImagebycthd($item['idhh'])[0];
                                $mausacforimage = strtolower($item['mausac']);
                            ?>
                                <div class="row my-3">
                                    <div class="col-3">
                                        <img src="./Content/image/product/<?php echo $hinh . '/' . $mausacforimage ?>.jpg" alt="" class="" style="height:150px;width:150px">
                                    </div>
                                    <div class="col-9">
                                        <div class="infor_of_product">
                                            <div class=" d-flex justify-content-between" style="font-size: 40px">
                                                <h6 class="" style="font-size: 20px"><a href="./index.php?action=sanpham&act=spct&id=<?php echo $item['idhh']  ?>" style="text-decoration: none; color: #000;"><?php echo $tenhh  ?></a>
                                                </h6>
                                                <h6 class="" style="font-size: 20px"><strong>Số lượng: </strong><?php echo $soluongcthd ?></h6>
                                                <h6 class="" style="font-size: 20px"><?php echo number_format($thanhtien) ?>đ</h6>
                                            </div>
                                            <div class="text_infor_product">
                                                <div class="">
                                                    <div class="">
                                                        <div class=""><strong>Màu: </strong><?php echo $mausaccthd ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
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