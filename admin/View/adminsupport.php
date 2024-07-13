<div class="profile_all">
    <style>
        table {
            width: 100%;
        }

        table td {
            word-wrap: break-word;
        }
    </style>
    <?php
    if (isset($_GET['id']) && isset($_GET['status'])) {
        $idstatus = $_GET['id'];
        $statuss = $_GET['status'];
        $custom = new support();
        $custom->updateStatuscs($idstatus, $statuss);
        echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=support"/>';
    }
    ?>
    <div class="row mt-4">
        <?php include_once "allmenu.php" ?>
        <div class="col-9">
            <div class="pf_right_history">
                <div class="tilte_history">
                <h3>Quản lí hỗ trợ khách hàng</h3>
                <p>Hiển thị / Quản lí thông tin các đơn cần hỗ trợ từ khách hàng</p>
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
                        <table class="w-100">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>HỌ TÊN</th>
                                <th>EMAIL</th>
                                <th>SỐ ĐIỆN THOẠI</th>
                                <th>THỜI GIAN TẠO</th>
                                <th>NỘI DUNG</th>
                                <th>Trạng thái</th>
                                <th>THAO TÁC</th>
                            </tr>
                            <?php
                            $sp = new support();
                            $fetchSupport = $sp->getAllsupport();



                            while ($item = $fetchSupport->fetch()) :
                                $id = $item['idht'];
                                $tenkh = $item['tenkh'];
                                $sdt = $item['sdt'];
                                $email = $item['email'];
                                $noidung = $item['noidung'];
                                $ngaytao = $item['ngaytao'];
                                $trangthai = $item['trangthai'];

                            ?>
                                <tr class="text-center">
                                    <td><?php echo $id ?></td>
                                    <td class="text-center">
                                        <p><?php echo $tenkh ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $email ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $sdt ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $ngaytao ?></p>
                                    </td>
                                    <td>
                                        <p class="text-start"><?php echo $noidung ?></p>
                                    </td>

                                    <td><?php
                                        if ($trangthai == "0") {
                                            echo 'Chưa hoàn tất';
                                        }
                                        if ($trangthai == "1") {
                                            echo 'Đã hoàn tất';
                                        }


                                        ?></td>
                                    <td class="p-2">
                                        <select onchange="status_update(this.options[this.selectedIndex].value,<?php echo $id ?>)" id="statusSelect" class="" style="background-color: transparent;font-weight: 700;">
                                            <option selected>Thao tác</option>
                                            <option value="0">Chưa hoàn tất</option>
                                            <option value="1">Đã hoàn tất</option>
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
        let url = "./admin.php?action=support"
        window.location.href = url + "&id=" + id + "&status=" + value;

    }
</script>