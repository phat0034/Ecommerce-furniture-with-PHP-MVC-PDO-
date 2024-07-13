<?php
class giohang
{
    // phương thức thêm thông tin vào trong gio hàng
    function addCart($mahh, $mausac, $soluong)
    {
        // thiếu hình,thiếu tên, thiếu đơn giá.Từ id truy vấn ngược lại
        $sp = new hanghoa();
        $idsp = $sp->getHangHoaAlly($mahh);
  
        $tensp = $idsp['tenhh'];
    
        $img = $idsp['hinh'];
        $mau = $sp->getColorNameByid($mahh,$mausac)[0];
        // var_dump($mausac);
        // var_dump( $sp->getColorNameByid($mahh,$mausac));
        $dongia = $sp->getDonGiaByIdAndMau($idsp['idhh'],$mausac);
       
        // echo $img;
       
        // var_dump($mau);
        // echo "jjjjj$img";
        $total = $soluong * $dongia;
        // vì giở hàng là mảng lưu trữ nhiều đối tượng có thuộc tính giống nhau nên tạo tối tượng
        //kiểm tra cùng mã hàng, cùng màu , cùng size thì số lượng tăng lên
        $flag = false;
      
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mahh'] == $mahh && $item['mau'] == "$mau") {
                $index = $key;
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['qty'];
                $this->update($index, $soluong);
            }
        }
        if ($flag == false) {
            $item = array(

                'mahh' => $mahh,
                'hinh' => $img,
                'name' => $tensp,
                'mau' => $mau,

                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,

            );
            // đem tối tượng đưa vào giỏ hàng a[]
            // var_dump($item['mau'][0]);
           
            $_SESSION['cart'][] = $item;
        }
       
    }
    //PT TÍNH THÀNH TIỀN CỦA GIỎ HÀNG,DUYỆT QUA GIỎ HÀNG
    function sub_Total()
    {
        $subtotal = 0;
       
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal = number_format($subtotal);
        return $subtotal;
    }
    function update($index, $soluong)
    {
        if ($soluong <= 0) {
            unset($_SESSION['cart'][$index]);
        } else {
            //update tức là phép gán   
            $_SESSION['cart'][$index]['qty'] = $soluong;
            //thành tiền sẽ thay đổi
            $total_new = $_SESSION['cart'][$index]['qty'] *   $_SESSION['cart'][$index]['cost'];
            $_SESSION['cart'][$index]['total'] = $total_new;
        }
    }
}