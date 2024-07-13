<div class="profile_all">
    <div class="row mt-4">
        <?php
        include_once('./View/profile/menu_profile.php')
        ?>
        <div class="col-9">
            <div class="pf_right_rspass">
                <?php

                if (isset($_SESSION['idkh'])) :


                ?>
                    <div class="tilte_history">
                        <h3>Mật khẩu & Bảo mật</h3>
                        <p>Vì sự an toàn,chúng tôi khuyến khích khách hàng sử dụng mật khẩu mạnh</p>
                    </div>
                    <div class="tongquan_rspass">
                        <h4>Đổi Mật Khẩu</h4>
                        <div class="row">
                            <div class="col-5">
                                <form method="post" action="index.php?action=resetpass&act=rscf">
                                    <?php
                                    $user = new user();
                                    $idkh = $_SESSION['idkh'];
                                  
                                    $email = $user->getEmailbyIdkh($idkh)[0];

                                    ?>
                                    <input type="hidden" id="custId" name="custEmail" value="<?php echo $email; ?>">

                                    <div class="mb-1">
                                        <label for="exampleInputEmail1" class="form-label">Mật Khẩu Hiện Tại</label>
                                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="currentPass">
                                    </div>
                                    <div class="mb-1">
                                        <label for="exampleInputPassword1" class="form-label">Mật Khẩu Mới</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="newPass">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="changepass">Lưu thay đổi</button>
                                </form>
                            </div>
                            <div class="col-1">

                            </div>
                            <div class="col-6">
                                <div class="rspass_title">
                                    <h6>Mật khẩu của bạn</h6>
                                    <div class="rspass_note">
                                        <div>Phải từ 8 ký tự trở lên</div>
                                        <div>Nên có ít nhất 1 số hoặc 1 ký tự đặc biệt</div>
                                        <div>Không nên giống với mật khẩu được sử dụng gần đây</div>
                                    </div>
                                </div>
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