<div class="profile_all">
    <div class="row mt-4">
        <?php

        include_once "allmenu.php"

        ?>
        <?php
        if (isset($_GET['id']) && isset($_GET['status'])) {
            $idstatus = $_GET['id'];
            $statuss = $_GET['status'];
            $order= new order();
            $order->updateStatushd($idstatus,$statuss);
            echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=order"/>';
        }
        ?>
        <div class="col-9">
            <div class="pf_right_history">
                <div class="tilte_history">
                    <h3>Quản lí đơn hàng</h3>
                    <p>Hiển thị / Quản lí thông tin các đơn hàng của cửa hàng</p>
                </div>
                <div class="tongquan_history">
                    <!-- <form action="">
                        <div class="input_history_all d-flex">
                            <div class="input_history d-flex">
                                <div class="space4input">
                                    <input class="inputfloating" type="number" placeholder="abc">
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
                                    <input class="inputfloating" type="date" placeholder="" value="">
                                    <span class="floating_input_history ">Đến ngày</span>
                                </div>

                            </div>
                            <div class="btn_history">
                                <button name="submit" class="btn ">Lọc</button>
                            </div>
                        </div>
                    </form> -->
                    <!-- <div class="addProd_admin d-flex justify-content-end">
                        <a href=" " class="   ">
                            <div class="contentaddProd d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                                <p class="my-auto"> Thêm sản phẩm</p>
                            </div>

                        </a>
                    </div> -->
                    <div class="table_history">
                        <table>
                            <tr class="text-center">
                                <th>ID ORDER</th>
                                <th>USERNAME</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>TỔNG TIỀN</th>
                                <th>THỜI GIAN TẠO</th>
                                <th>Trạng thái</th>
                                <th>THAO TÁC</th>
                            </tr>
                            <?php
                            $order = new order();
                            $fetchallOrder =  $order->getAllOrder();
                            while ($item = $fetchallOrder->fetch()) :
                                $idhd = $item['idhd'];
                                $idkh = $item['idkh'];
                                $ngaydat = $item['ngaydat'];
                                $tonghd = $item['tongtien'];
                                $trangthai = $item['trangthai'];
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $idhd ?> </td>
                                    <td class="text-center">
                                        <?php
                                        echo $order->getUsernamebyIdkh($idkh)[0]
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $fetchcthd = $order->getorderbyidhd($idhd);
                                        while ($cthd = $fetchcthd->fetch()) :
                                            $idhhcthd = $cthd['idhh'];
                                            $soluongcthd = $cthd['soluongmua'];
                                            $tenmaucthd = $cthd['mausac'];
                                            $thanhtiencthd = $cthd['thanhtien']
                                        ?>
                                            <div class="row ">
                                                <div class="col-9 justify-content-end">
                                                    <p><?php echo $order->getnameHanghoabyidhh($idhhcthd)[0] ?></p>
                                                </div>
                                                <div class="col-3 justify-content-end">
                                                    <?php echo 'x' . $soluongcthd ?>
                                                </div>
                                            </div>
                                        <?php
                                        endwhile;
                                        ?>
                                    </td>
                                    <td> <?php
                                            $fetchcthd = $order->getorderbyidhd($idhd);
                                            while ($cthd = $fetchcthd->fetch()) :
                                                $idhhcthd = $cthd['idhh'];
                                                $soluongcthd = $cthd['soluongmua'];
                                                $tenmaucthd = $cthd['mausac'];
                                                $thanhtiencthd = $cthd['thanhtien']
                                            ?>
                                            <p><?php echo number_format($thanhtiencthd) ?> đ</p>
                                        <?php
                                            endwhile ?>
                                    </td>
                                    <td><?php echo number_format($tonghd) . ' đ' ?></td>
                                    <td><?php echo $ngaydat ?></td>
                                    <td><?php
                                        if ($trangthai == "0") {
                                            echo 'Chưa hoàn tất';
                                        }
                                        if ($trangthai == "1") {
                                            echo 'Đã hoàn tất';
                                        }
                                        if ($trangthai == "2") {
                                            echo 'Hủy đơn hàng';
                                        }
                                        ?></td>
                                    <td class="p-2">
                                        <select onchange="status_update(this.options[this.selectedIndex].value,<?php echo $idhd ?>)" id="statusSelect" class="" style="background-color: transparent;font-weight: 700;">
                                        <option >Trạng Thái</option>
                                            <option value="0">Chưa hoàn tất</option>
                                            <option value="1">Đã hoàn tất</option>
                                            <option value="2">Hủy đơn hàng</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php
                            endwhile;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function status_update(value, id) {
        let url = "./admin.php?action=order"
        window.location.href = url + "&id=" + id + "&status=" + value;
    }
</script>