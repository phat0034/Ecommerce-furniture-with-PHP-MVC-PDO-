<?php

class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "Insert into hoadon(idhd,idkh,ngaydat,tongtien) values (Null,$makh,'$ngay',0)";
        $db->exec($query);
        //lúc này đã insert đc hóa đơn vừa mua
        //cần lấy hóa đơn vừa mới mua
        $select = "select idhd from hoadon where idkh=$makh order by idhd desc limit 1";
        $sohd = $db->getInstance($select);
        return $sohd[0]; // vì khi query db trả về array nhưng chỉ tra cứu lẫy masohd cho nên vị trí array = 0

    }
    //pt insert vào bảng cthoadon
    function insertCthoadon($masohd, $mahh, $soluongmua, $mausac, $thanhtien)
    {
        $db = new connect();
        $query = "Insert into cthoadon(idhd,idhh,soluongmua,mausac,thanhtien) values
        ($masohd, $mahh, $soluongmua, '$mausac', $thanhtien)";
        $db->exec($query);
    }
    //pt cập nhật tổng tiền vào lại hóa đơn
    function updateHoadon($masohd, $makh, $tongtien)
    {
        $db = new connect();
        $query = "Update hoadon set tongtien=$tongtien Where idhd = $masohd and idkh=$makh";
        $db->exec($query);
    }

    //pt hiển thị thông tin khách hàng mua hóa đơn
    function getKhachHangHD($masohd)
    {
        $db = new connect();
        $select = "Select a.idhd , b.username,b.diachi,b.sodienthoai,a.ngaydat from hoadon a, khachhang b WHERE a.idkh=b.idkh and idhd=$masohd";
        $result = $db->getInstance($select);
        return $result;
    }
    //pt lấy ra hàng trên hóa đơn
    function getHangHoaHD($masohd)
    {
        $db = new connect();
        $select = "Select DISTINCT a.idhd,c.tenhh,a.mausac,b.dongia,a.soluongmua from cthoadon a,
        cthanghoa b , hanghoa c WHERE a.idhh=b.idhh and c.idhh=b.idhh and a.idhd=$masohd";
        $result = $db->getList($select);
        return $result;
    }
    //pt lấy thông tin lịch sử hóa đơn bằng idkh


    function gethdbyIdkh($idkh)
    {
        $db = new connect();
        $select = "SELECT *  FROM hoadon where   idkh = $idkh";
        $result = $db->getList($select);
        return $result;
    }

    function getProductfromCTHDbyidhd($idhd)
    {
        $db = new connect();
        $select = "   SELECT idhh,mausac,soluongmua  FROM cthoadon where idhd=$idhd";
        $result = $db->getList($select);
        return $result;
    }
    function getallofHD($masohd)
    {
        $db = new connect();
        $select = "SELECT * FROM hoadon where idhd=$masohd";
        $result = $db->getInstance($select);
        return $result;
    }
    function getAllofCTHD($idhd)
    {
        $db = new connect();
        $select = "   SELECT * FROM `cthoadon` WHERE idhd =$idhd";
        $result = $db->getList($select);
        return $result;
    }

    function getNamebycthd($idhh)
    {
        $db = new connect();
        $select = "   SELECT tenhh FROM hanghoa WHERE idhh =$idhh";
        $result = $db->getInstance($select)[0];
        return $result;
    }
    function getImagebycthd($idhh)
    {
        $db = new connect();
        $select = "   SELECT hinh FROM hanghoa WHERE idhh =$idhh";
        $result = $db->getInstance($select);
        return $result;
    }
    function getEmailbycthd($idkh)
    {
        $db = new connect();
        $select = " SELECT email FROM khachhang WHERE idkh=$idkh";
        $result = $db->getInstance($select);
        return $result;
    }
    function getAddressbycthd($idkh)
    {
        $db = new connect();
        $select = " SELECT diachi FROM khachhang WHERE idkh=$idkh";
        $result = $db->getInstance($select);
        return $result;
    }
    function translateColor($color)
    {
        // Mảng chuyển đổi từ tiếng Anh sang tiếng Việt
        $translations = [
            'White' => 'Trắng',
            'Black' => 'Đen',
            'Grey' => 'Xám',
            'Red' => 'Đỏ',
            'Blue' => 'Xanh Dương',
            'Green' => 'Xanh Lá',
            'Purple' => 'Tím',
            'Yellow' => 'Vàng',
            'Orange' => 'Cam',
            'Pink' => 'Hồng'
        ];

        return $translations[$color] ?? $color; // Trả về tên tiếng Việt hoặc tên gốc nếu không tìm thấy
    }
}
