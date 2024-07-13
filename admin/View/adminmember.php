<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once "allmenu.php"
        ?>
        <div class="col-9">
            <div class="pf_right_history">
                <div class="tilte_history">
                    <h3>Quản Lí Khách Hàng</h3>
                    <p>Hiển thị / Quản lí thông tin các thành viên của cửa hàng</p>
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
                    <div class="addProd_admin d-flex justify-content-end">
                        <a href="./admin.php?action=addmember " class="   ">
                            <div class="contentaddProd d-flex justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                                <p class="my-auto"> Thêm user</p>
                            </div>

                        </a>
                    </div>
                    <div class="table_history">
                        <table>
                            <tr class="text-center">
                                <th>ID KHÁCH HÀNG</th>

                                <th>USERNAME</th>

                                <th>PASSWORD</th>
                                <th>EMAIL</th>
                                <th>ĐỊA CHỈ</th>
                                <th>SỐ ĐIỆN THOẠI</th>
                                <th>CHỨC VỤ</th>
                                <th>THAO TÁC</th>

                            </tr>
                            <?php
                            $mb = new member();
                            $getmember = $mb->getallMember();
                            while ($item = $getmember->fetch()) :
                                $idkh = $item['idkh'];
                                $username = $item['username'];
                                $password = $item['password'];
                                $email = $item['email'];
                                $diachi = $item['diachi'];
                                $sodienthoai = $item['sodienthoai'];
                                $role = $item['role'];
                            ?>
                                <tr class="text-center">
                                    <td><?php echo $idkh ?> </td>

                                    <td><?php echo $username ?></td>
                                    <td><?php echo $password ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $diachi ?></td>
                                    <td><?php echo $sodienthoai ?></td>
                                    <td><?php echo $role == 0 ? "Member" : "Admin" ?></td>

                                    <td>
                                        <div class="row">
                                            <div class="col-6 me-auto">
                                                <a href="./admin.php?action=editmember&id=<?php echo $idkh ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="col-6"><a href="./admin.php?action=editmember&act=remove_act&id=<?php echo $idkh ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                                    </svg></a></div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>