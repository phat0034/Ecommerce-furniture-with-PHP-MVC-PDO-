<link rel="stylesheet" href="Content/CSS/cart.css">
<?php

// unset($_SESSION['cart']);
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {


?>
    <div class="card cart_all" style="">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>GIỎ HÀNG</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted"><?php echo count($_SESSION['cart']) ?> SẢN PHẨM </div>
                    </div>
                </div>
                <?php
                $j = 0;
                foreach ($_SESSION['cart'] as $key => $item) {
                    $j++;
                ?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center ">
                            <div class="col-2"><img class="img-fluid" src=".\Content\image\product\<?php echo $item['hinh'] ?><?php echo strtolower($item['mau']) ?>.jpg"></div>
                            <div class="col">
                                <div class="row text-muted">abc</div>
                                <div class="row"><?php echo $item['name'] ?></div>
                                <div class="row">Màu: <?php echo $item['mau'] ?></div>
                            </div>
                            <div class="col">
                                <a href="#">-</a><a href="#" class="border" value=""><?php echo $item['qty'] ?></a><a href="#">+</a>
                            </div>
                            <div class="col text-center"><?php echo number_format($item['cost']) ?> đ</div>
                            <div class="col text-end"><a href="index.php?action=xoasanpham&id=<?php echo $key ?>" style="text-decoration: none;">X</a> </div>
                        </div>
                    </div>
                <?php
                }
                // var_dump($_SESSION['cart']);

                ?>
                <div class="deleteall text-end " style="font-size:20px">
                    <a href="index.php?action=xoasanpham&id=all">Remove All</a>
                </div>
                <div class="back-to-shop"><a href="index.php?action=home">&leftarrow; <span class="text-muted">Back to shop</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>TÙY CHỌN GIAO DỊCH</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;"><?php echo count($_SESSION['cart']) ?> SẢN PHẨM</div>
                    <div class="col text-right"><?php $gh = new giohang();
                                                $total = $gh->sub_Total();
                                                echo $total . 'đ'; ?></div>
                </div>
                <form method="post" action="">
                    <!-- <p>LOẠI GIAO HÀNG</p>
                    <select>
                        <option class="text-muted" value="cod">Giao Hàng COD</option>
                        <option class="text-muted" value="banking">Chuyển Khoản</option>

                    </select>
                    <div id="bankingForm" style="display: none;">
                        <form>
                            <p>Thông tin thẻ ngân hàng:</p>
                            <div class="form-group">
                                <label for="cardNumber">Số thẻ:</label>
                                <input type="text" class="form-control" id="cardNumber" required pattern="[0-9]{16}" maxlength="19" onblur="formatCardNumber(this)">
                            </div>
                            <div class="form-group">
                                <label for="expiryDate">Ngày hết hạn:</label>
                                <input type="text" class="form-control" id="expiryDate" required pattern="[0-9]{2}/[0-9]{2}" maxlength="5" placeholder="MM/YY" onblur="validateExpiryDate(this)">
                            </div>
                            <div class="form-group">
                                <label for="cvv">CVV:</label>
                                <input type="text" class="form-control" id="cvv" required pattern="[0-9]{3}" maxlength="3">
                            </div>
                        </form>
                    </div>
                    <div id="codForm" style="display: block;">
                        <form>
                            <p>Thông tin giao hàng:</p>
                            <div class="form-group">
                                <label for="fullName">Họ và tên:</label>
                                <input type="text" class="form-control" id="fullName" required pattern="^[a-zA-Z\s]+$" oninput="validateInput(this)">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ:</label>
                                <input type="text" class="form-control" id="address" required pattern="^[0-9]+\s[a-zA-Z\s]+$" oninput="validateInput(this)">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" class="form-control" id="phone" required pattern="^[0-9]{10,12}$" oninput="validateInput(this)">
                            </div>
                            <div class="form-group">
                                <label for="note">Ghi chú (không bắt buộc):</label>
                                <textarea class="form-control" id="note" style="resize: vertical;height:200px; 
                                max-height: 160px;"></textarea>
                            </div>
                        </form>
                    </div>
                    <p>MÃ GIẢM GIÁ(HIỆN CHƯA CÓ MÃ GIẢM GIÁ)</p>
                    <input id="code" placeholder="NHẬP MÃ GIẢM GIÁ" disabled> -->

                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0; font-size:21px">
                        <div class="col">THÀNH TIỀN:</div>
                        <div class="col text-right"><?php $gh = new giohang();
                                                    $total = $gh->sub_Total();

                                                    echo $total . 'đ';
                                                    ?></div>
                    </div>
                    <a class="btn" href="index.php?action=order&act=order_action">CHECKOUT</a>
                </form>
            </div>
        </div>

    </div>
<?php
} else {
    echo "<script>alert('Không có hàng trong giỏ')</script>";
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
}
?>
<script>
    var bankingForm = document.getElementById("bankingForm");
    var codForm = document.getElementById("codForm");
    var shippingSelect = document.querySelector("select");

    shippingSelect.addEventListener("change", function() {
        if (this.value === "banking") {
            bankingForm.style.display = "block";
            codForm.style.display = "none";
        } else if (this.value === "cod") {
            bankingForm.style.display = "none";
            codForm.style.display = "block";
        } else {
            bankingForm.style.display = "none";
            codForm.style.display = "block";
        }
    });

    function validateInput(input) {
        if (input.validity.patternMismatch) {
            input.setCustomValidity(input.title);
        } else {
            input.setCustomValidity('');
        }
    }

    var bankingForm = document.getElementById("bankingForm");
    var shippingSelect = document.querySelector("select");

    shippingSelect.addEventListener("change", function() {
        if (this.value === "banking") {
            bankingForm.style.display = "block";
        } else {
            bankingForm.style.display = "none";
        }
    });

    function formatCardNumber(input) {
        var cardNumber = input.value.replace(/\s/g, '').replace(/(.{4})/g, '$1 ').trim();
        input.value = cardNumber;
    }

    function validateExpiryDate(input) {
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();
        var enteredYear = parseInt(input.value.slice(-2), 10) + 2000;
        var maxYear = currentYear + 6;

        if (enteredYear > maxYear) {
            input.setCustomValidity('Ngày hết hạn không được quá 6 năm kể từ hiện tại.');
        } else {
            input.setCustomValidity('');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>