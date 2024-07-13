<div class="editpd_all">
<div class="backAdminPage">
   <a href="./admin.php?action=product" class=" w-25">Quay lại trang quản lí</a>
   </div>
    <div class="editprd">
        
        <form method="post" action="./admin.php?action=addmember&act=add">

            <input type="hidden" name="roleText" id="typeProd" value="0">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tài Khoản</label>
                <input type="text" name="userText" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mật Khẩu</label>
                <input type="text" name="passText" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="emailText" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                <input type="text" name="dcText" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                <input type="number" name="sdtText" class="form-control" value="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Chức vụ</label>
                <select class="form-select" aria-label="Default select example" id="tpWantPick" onchange="pickTypeProduct()">
                    <option value="0" selected>Customer</option>
                    <option value="1">Admin</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="submitAdd">Thêm tài khoản</button>

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