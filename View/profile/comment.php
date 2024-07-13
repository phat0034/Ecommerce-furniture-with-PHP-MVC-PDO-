<div class="profile_all">
    <div class="row mt-4">
        <?php include_once('./View/profile/menu_profile.php')  ?>
        <div class="col-9">
            <div class="pf_right_comment_history">
                <?php

                if (isset($_SESSION['idkh'])) :


                ?>
                    <div class="tilte_comment_history">
                        <h3>Bình luận của tôi </h3>
                        <p>Bình luận và trả lời mà bạn đã viết trên trang</p>
                    </div>
                    <div class="tongquan_comment_history">
                        <!-- <form action="">
                            <div class="input_history_all d-flex">
                                <div class="input_history d-flex">
                                    <div class="space4input">
                                        <input class="inputfloating" type="number" placeholder="">
                                        <span class="floating_input_history ">Nội dung</span>
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
                                <div class="btn_comment_history">
                                    <button name="submit" class="btn ">Lọc</button>
                                </div>
                            </div>
                        </form> -->
                        <div class="table_comment_history">
                            <table>
                                <tr>
                                    <th>Thời gian</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Nội dung</th>
                                    <th>Xem chi tiết</th>


                                </tr>
                                <!-- fetch từ đây -->
                                <?php
                                if (isset($_SESSION['idkh'])) {
                                    $idkhcmt = $_SESSION['idkh'];
                                 
                                    $cmt = new comment();
                                    $fetchmycmt = $cmt->getmycommentByIdkh($idkhcmt);
                                    // var_dump($fetchmycmt->fetchAll());

                                    while ($item = $fetchmycmt->fetch()) {
                                        $idhhcmt = $item['idhh'];
                                        var_dump($idhhcmt);
                                        $tensp = $cmt->getTenhhbyidhh($idhhcmt)[0];
                                        var_dump($tensp);


                                        echo '<tr>
                                    </td>
                                    <td>' . $item['ngaytao'] . ' </td>
                                    <td> ' . $tensp . '</td>
                                    <td>' . $item['noidung'] . '  </td>
                                    <td><a href="http://localhost/php2/daihoang/index.php?action=sanpham&act=spct&id=' . $idhhcmt . '" style="text-decoration: none;">Xem chi tiết</a></td>
                                        </tr>';
                                    }
                                }
                                ?>

                            </table>
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