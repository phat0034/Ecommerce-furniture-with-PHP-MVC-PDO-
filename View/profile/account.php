<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once('./View/profile/menu_profile.php')
        ?>
        <div class="col-9">
            <div class="pf_right">
                <?php
                if (isset($_SESSION['idkh'])) :
                ?>
                    <h3>Tổng Quan</h3>
                    <div class="tongquan">
                        <?php
                        $idkh = 0;
                        if (isset($_SESSION['idkh'])) {
                            $idkh = $_SESSION['idkh'];
                        }
                        $user = new user();
                        $khachhang = $user->getAllfromKhachhang($idkh);

                        ?>
                        <table>
                            <tr>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Nhóm khách hàng</th>

                            </tr>
                            <tr>
                                <?php

                                while ($itemkh = $khachhang->fetch()) :
                                    $username = $itemkh['username'];
                                    $email = $itemkh['email'];
                                    $diachi = $itemkh['diachi'];
                                    $sdt = $itemkh['sodienthoai'];
                                    $role = $itemkh['role'];

                                ?>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $sdt ?></td>
                                    <td><?php echo $role == 0 ? "Member"  : "Admin" ?></td>

                                <?php
                                endwhile;
                                ?>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                            </tr>
                            <tr>

                                <td style="max-width:200px "><?php echo $diachi ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h3>Cá Nhân</h3>
                            <div class="canhan">
                                <form method="post" action="index.php?action=account&act=edit_prf">
                                    <?php
                                    if (isset($_SESSION['idkh'])) {
                                        $idkhwl = $_SESSION['idkh'];
                                    } else {
                                        $idkhwl = "null";
                                    }
                               
                                    ?>

                                    <input type="hidden" name="idkh" value="<?php echo $idkhwl ?>">
                                    <div class="mb-1">
                                        <label for="exampleInputPassword1" class="form-label">Email</label>
                                        <input type="email" name="changeEmail" class="form-control" id="exampleInputPassword1" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                                        <small id="emailHelp" class="form-text text-muted">Vui lòng nhập đúng định dạng email.</small>
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputPassword1" class="form-label">Số Điện Thoại</label>
                                        <input type="tel" name="changeNumb" class="form-control" id="exampleInputPassword1" pattern="[0-9]{10}">
                                        <small id="phoneHelp" class="form-text text-muted">Vui lòng nhập đúng định dạng số điện thoại 10 chữ số.</small>
                                    </div>

                                    <div class="mb-1">
                                        <label for="addressInput" class="form-label">Địa chỉ</label>
                                        <input type="text" name="changeAddress" class="form-control" id="addressInput" pattern="^\d+.*$">
                                        <small id="addressHelp" class="form-text text-muted">
                                            Vui lòng nhập đúng định dạng địa chỉ, bắt đầu bằng số nhà (ví dụ: 123 Đường Cao Thắng...).
                                        </small>
                                    </div>


                                    <button type="submit" name="changeProfile" class="btn btn-primary mt-2">Lưu thay đổi</button>
                                </form>
                            </div>
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
<!-- <script>
    const data = {
        "An Giang": {
            "Quận 1": ["Phường 1", "Phường 2"],
            "Quận 2": ["Phường 3", "Phường 4"]
        },
        "Bà Rịa - Vũng Tàu": {
            "Quận 3": ["Phường 5", "Phường 6"],
            "Quận 4": ["Phường 7", "Phường 8"]
        }
        // Thêm các tỉnh/thành phố khác ở đây
    };

    document.getElementById('provinceSelect').addEventListener('change', function() {
        const province = this.value;
        const districtSelect = document.getElementById('districtSelect');
        const wardSelect = document.getElementById('wardSelect');

        // Xóa các tùy chọn hiện có
        districtSelect.innerHTML = '<option selected>Chọn Quận/Huyện</option>';
        wardSelect.innerHTML = '<option selected>Chọn Xã/Phường</option>';

        if (data[province]) {
            Object.keys(data[province]).forEach(district => {
                const option = document.createElement('option');
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
        }
    });

    document.getElementById('districtSelect').addEventListener('change', function() {
        const province = document.getElementById('provinceSelect').value;
        const district = this.value;
        const wardSelect = document.getElementById('wardSelect');

        // Xóa các tùy chọn hiện có
        wardSelect.innerHTML = '<option selected>Chọn Xã/Phường</option>';

        if (data[province] && data[province][district]) {
            data[province][district].forEach(ward => {
                const option = document.createElement('option');
                option.value = ward;
                option.textContent = ward;
                wardSelect.appendChild(option);
            });
        }
    });
</script> -->