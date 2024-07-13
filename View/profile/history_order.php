<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once('./View/profile/menu_profile.php')
        ?>
        <div class="col-9">
            <div class="pf_right_history">
                <?php

                if (isset($_SESSION['idkh'])) :


                ?>
                    <div class="tilte_history">
                        <h3>Lịch sử đơn hàng</h3>
                        <p>Hiển thị thông tin các sản phẩm bạn đã mua</p>
                    </div>
                    <div class="tongquan_history">
                        <!-- <form action="">
                            <div class="input_history_all d-flex">
                                <div class="input_history d-flex">
                                    <div class="space4input">
                                        <input class="inputfloating" type="number" placeholder="">
                                        <span class="floating_input_history ">Mã đơn hàng</span>
                                    </div>
                                    <div class="space4input">
                                        <input class="inputfloating" type="number" placeholder="">
                                        <span class="floating_input_history ">Số tiền từ</span>
                                    </div>
                                    <div class="space4input">
                                        <input class="inputfloating" type="number" placeholder="">
                                        <span class="floating_input_history ">Số tiền đến</span>
                                    </div>
                                    <div class="space4input">
                                        <input class="inputfloating" type="date" placeholder="">
                                        <span class="floating_input_history ">Từ ngày</span>
                                    </div>
                                    <div class="space4input">
                                        <input class="inputfloating" type="date" placeholder="">
                                        <span class="floating_input_history ">Đến ngày</span>
                                    </div>

                                </div>
                                <div class="btn_history">
                                    <button name="submit" class="btn ">Lọc</button>
                                </div>
                            </div>
                        </form> -->
                        <?php
                        if (isset($_SESSION['idkh'])) {
                            $idkh = $_SESSION['idkh'];
                            $hd = new hoadon();
                            $gethd = $hd->gethdbyIdkh($idkh);
                        }
                        ?>
                        <div class="table_history">
                            <table>
                                <tr class="text-center">
                                    <th>Thời gian</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Sản phẩm</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Xem chi tiết</th>
                                </tr>
                                <?php
                                if (isset($_SESSION['idkh'])) {
                                    $idkh = $_SESSION['idkh'];
                                    $hd = new hoadon();
                                    $gethd = $hd->gethdbyIdkh($idkh);

                                    while ($item = $gethd->fetch()) {
                                        $ngaydat = $item['ngaydat'];
                                        $idhd = $item['idhd'];
                                        $thanhtien = number_format($item['tongtien']);
                                        $trangthai = $item['trangthai']; // Giả sử có trường trạng thái trong bảng
                                        $fetchcthd = $hd->getProductfromCTHDbyidhd($idhd);


                                        // var_dump($sanpham);
                                        echo '<tr>
                                    <td class="text-center">' . $ngaydat . '</td>
                                    <td class="text-center">' . $idhd . '</td>
                                    <td>';

                                        while ($nccthd = $fetchcthd->fetch()) {
                                            $idprocthd = $nccthd['idhh'];
                                            $cltchd = $hd->translateColor($nccthd['mausac']);
                                            $soluongmua  = $nccthd['soluongmua'];
                                            $nameprocthd = $hd->getNamebycthd($idprocthd);
                                            echo 'x' . $soluongmua . ' ' . $nameprocthd . ' - <strong>Màu:</strong> ' . $cltchd . '</br>';
                                        }


                                        echo '</td>
                                    <td class="text-center">' . $thanhtien . ' đ</td>
                                    <td class="text-center">';

                                        if ($trangthai == 0) {
                                            echo "Chưa xử lý";
                                        } else {
                                            echo "Đã hoàn tất";
                                        }

                                        echo '</td>
                                    <td class="text-center"><a href="./index.php?action=order&act=cthd&id=' . $idhd . '">Chi tiết</a></td>
                                  </tr>';
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                <?php
                else:
                    echo '<script>alert("Vui lòng đăng nhập trước khi thao tác!")</script>';
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home" />';
                endif;
                ?>
            </div>
        </div>
    </div>

</div>