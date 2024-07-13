<div class="editpd_all">
    <div class="editprd">
        <h2 class="text-center">SỬA HÀNG HÓA</h2>
        <form method="post" action="./admin.php?action=editprod&act=edit_act">
            <?php
            $id = 0;
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $pd = new product();
            $getproduct = $pd->getProduct($id);
            while ($item = $getproduct->fetch()) :
                $tenhh = $item['tenhh'];
                $mota = $item['mota'];
                $soluong = $item['soluong'];
                $noidung = $item['mota'];
            ?>
                <input type="hidden" name="idhh" value="<?php echo $id ?>">

                <input type="hidden" name="colorProd" id="colorProd" value="">
                <input type="hidden" name="idkhcmt" value="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" disabled value="<?php echo $tenhh ?>" aria-describedby="emailHelp">
                </div>
                <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Loại sản phẩm</label>
                <select class="form-select" aria-label="Default select example" id="tpWantPick"  onchange="pickTypeProduct()">
                    <option value="1">Sofa</option>
                    <option value="2">Ghế</option>
                    <option value="3">Bàn</option>
                </select>
            </div> -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Màu sắc muốn sửa</label>
                    <select class="form-select" aria-label="Default select example" id="clwannaPick" onchange="pickColor()">
                        <option  selected>Chọn màu sản phẩm bạn muốn thay đổi</option>
                        <?php
                        $fetchoption = $pd->getProductforEdit($id);

                        while ($color = $fetchoption->fetch()) :
                            $idmau = $color['idmau'];
                            $tenmau = $color['tenmau']
                        ?>
                            <option value="<?php echo $idmau ?>"><?php echo $tenmau ?></option>
                        <?php endwhile; ?>


                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
                    <input type="number" name="priceText" value="0" class="form-control" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" minlength="4" maxlength="10" value="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá khuyến mãi</label>
                    <input type="number" name="saleText" value="0" class="form-control" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" minlength="4" maxlength="10">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                    <input type="number" name="slText" class="form-control" id="exampleInputEmail1" pattern="[a-zA-Z0-9]+" minlength="4" maxlength="10" value="<?php echo $soluong ?>">
                </div>
                <div class="mb-3">
                    <p>Nội dung</p>
                    <textarea name="noidungText" id="" value="" class="noidungedit w-100"><?php echo $noidung ?> </textarea>
                </div>
                <!-- <div class="dashline my-3">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Upload file bằng file Excel</label>
                <input type="file" class="form-control" id="exampleInputEmail1">
            </div> -->
                <button type="submit" class="btn btn-primary" name="submitEdit">Chỉnh sửa</button>
            <?php
            endwhile;
            ?>
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