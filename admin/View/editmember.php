
<div class="editpd_all">
    <div class="editprd">
        <form method="post" action="./admin.php?action=editmember&act=edit_act" id="editForm">
            <?php
            $id = 0;
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $mb = new member();
            $mbbyid = $mb->getMemberbyId($id);
            while ($item = $mbbyid->fetch()) :
                $idkh = $item['idkh'];
                $username = $item['username'];
                $password = $item['password'];
                $email = $item['email'];
                $diachi = $item['diachi'];
                $sodienthoai = $item['sodienthoai'];
                $role = $item['role'];


            ?>
                <input type="hidden" name="idkh" value="<?php echo $idkh ?>">
                <input type="hidden" name="roleText" id="typeProd" value="0">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tài Khoản</label>
                    <input type="text" name="userText" class="form-control" placeholder="<?php echo $username ?>" value="<?php echo $username ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mật Khẩu</label>
                    <input type="text" name="passText" class="form-control" placeholder="<?php echo $password ?>" value="<?php echo $password ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="emailText" class="form-control" placeholder="<?php echo $email ?>" value="<?php echo $email ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                    <input type="text" name="dcText" class="form-control" placeholder=" <?php echo $diachi ?>" value="<?php echo $diachi ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                    <input type="number" name="sdtText" class="form-control" placeholder="<?php echo $sodienthoai ?>" value="<?php echo $sodienthoai ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Chức vụ</label>
                    <select class="form-select" aria-label="Default select example" id="tpWantPick" onchange="pickTypeProduct()">
                        <option value="0" selected>Customer</option>
                        <option value="1">Admin</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="submitEdit">Chỉnh sửa</button>
            <?php endwhile; ?>
        </form>
    </div>
</div>
<script>
    function pickColor() {
        var colorProd = document.getElementById('colorProd');
        var wannaPick = document.getElementById('clwannaPick');
        colorProd.value = wannaPick.value
        console.log(wannaPick.value);
    }

    function pickTypeProduct() {
        var typeProd = document.getElementById('typeProd');
        var tpWantPick = document.getElementById('tpWantPick');
        typeProd.value = tpWantPick.value
        console.log(typeProd.value);
    }
</script>