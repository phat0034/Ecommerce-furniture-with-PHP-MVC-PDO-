
<div class="editpd_all">

    <div class="editprd">
   <div class="backAdminPage">
   <a href="./admin.php?action=product" class=" w-25">Quay lại trang quản lí</a>
   </div>
        <h3 class="text-center">THÊM SẢN PHẨM</h3>
        <form action="admin.php?action=addpro&act=add1action" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="idkhcmt" value="">
            <input type="hidden" name="typeProd" id="typeProd" value="">
            <input type="hidden" name="colorProd" id="colorProd" value="">
            <input type="hidden" name="idkhcmt" value="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nameaddPrd">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loại sản phẩm</label>
                <select class="form-select" aria-label="Default select example" id="tpWantPick" onchange="pickTypeProduct()">
                    <option selected>Chọn loại cho sản phẩm</option>
                    <option value="1">Sofa</option>
                    <option value="2">Ghế</option>
                    <option value="3">Bàn</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Màu sắc</label>
                <select class="form-select" aria-label="Default select example" id="clwannaPick" onchange="pickColor()">
                    <option selected>Chọn màu cho sản phẩm</option>
                    <option value="1">Trắng</option>
                    <option value="2">Đen</option>
                    <option value="3">Xám</option>
                    <option value="4">Đỏ</option>
                    <option value="5">Xanh dương</option>
                    <option value="6">Xanh lá</option>
                    <option value="7">Tím</option>
                    <option value="8">Vàng</option>
                    <option value="9">Nâu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
                <input type="number" class="form-control" name="priceProd" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá khuyến mãi</label>
                <input type="number" class="form-control" name="saleProd" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" min="1" max="10000" name="quantityProd">
            </div>
            <div class="mb-3">
                <p>Hình</p>
                <input type="file" class="form-control" id="exampleInputEmail1" name="imageUpload" accept=".jpg">
            </div>
            <div class="mb-3">
                <p>Nội dung</p>
                <textarea name="noidungProd" id="" value="" class="noidungedit w-100"> </textarea>
            </div>
            <div class="dashline my-3">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Upload file bằng file Excel</label>
                <input type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <button type="submit" class="btn btn-primary" name="submitAdd">Thêm sản phẩm</button>
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