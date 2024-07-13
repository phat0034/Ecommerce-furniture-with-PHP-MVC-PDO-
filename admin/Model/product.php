<?php
include_once('connect.php'); // Khai báo lớp connect

class product
{
    function showallProduct()
    {

        $db = new connect();
        $select = "SELECT * FROM hanghoa";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }

    function getImgbyIdhh($idhh)
    {

        $db = new connect();
        $select = " SELECT hinh FROM hanghoa WHERE  idhh= $idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về
    }

    function getIdmaubyTenmau($tenmau)
    {

        $db = new connect();
        $select = "SELECT idmau FROM `mausac` WHERE tenmau = '$tenmau'";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getColorbyIdhh($idhh)
    {

        $db = new connect();
        $select = "    SELECT b.tenmau FROM cthanghoa a, mausac b WHERE a.idmau = b.idmau and a.idhh=$idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getTypeProdbyIdhh($idhh)
    {

        $db = new connect();
        $select = "      SELECT b.tenloai FROM hanghoa a, loai b WHERE a.maloai = b.maloai and a.idhh=$idhh";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getMinPrice($idhh)
    {
        $db = new connect();
        $select = "SELECT min(dongia) FROM `cthanghoa` WHERE idhh=$idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về

    }
    function getMaxPrice($idhh)
    {
        $db = new connect();
        $select = "SELECT max(dongia) FROM `cthanghoa` WHERE idhh=$idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về


    }
    function getMinSale($idhh)
    {
        $db = new connect();
        $select = "SELECT min(giamgia) FROM `cthanghoa` WHERE idhh=$idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về

    }
    function getMaxSale($idhh)
    {
        $db = new connect();
        $select = "SELECT max(giamgia) FROM `cthanghoa` WHERE idhh=$idhh";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về

    }
    function getProductforEdit($idhh)
    {
        $db = new connect();
        $select = " SELECT * FROM cthanghoa a, mausac b where a.idmau = b.idmau and idhh=$idhh";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về


    }

    function getProduct($id)
    {

        $db = new connect();
        $select = "SELECT * FROM hanghoa where idhh = $id";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getidmaloaibytenmaloai($tenloai)
    {

        $db = new connect();
        $select = "SELECT maloai FROM loai where tenloai = '$tenloai'";
        $result = $db->getInstance($select)[0];
        return $result; // đã lấy đc dữ liệu về
    }
    function editHanghoa($idhh, $sl, $mota)
    {
        $db = new connect();
        $query = "   UPDATE hanghoa SET soluong='$sl',mota='$mota' WHERE idhh = $idhh";
        $db->exec($query);
        var_dump($query);
    }
    function editCTHH($idhh, $idmau, $dongia, $sale)
    {
        $db = new connect();
        $query = "   UPDATE cthanghoa SET dongia=$dongia,giamgia=$sale WHERE idhh = $idhh and idmau=$idmau";
        $db->exec($query);
        var_dump($query);
    }
    function removeHH($idhh)
    {
        $db = new connect();
        $query = "DELETE FROM hanghoa WHERE idhh =$idhh  ";
        $db->exec($query);
    }
    function removeCTHH($idhh)
    {
        $db = new connect();
        $query = "DELETE FROM cthanghoa WHERE idhh =$idhh  ";
        $db->exec($query);
    }

    function getNextIdhh()
    {
        $db = new connect();
        $select = "SELECT idhh FROM hanghoa ORDER BY idhh DESC LIMIT 1";
        $result = $db->getInstance($select)[0];
        return $result; // đã lấy đc dữ liệu về
    }

    function checkidmaucthh($idcthh, $idmau)
    {
        $db = new connect();
        $select = "SELECT COUNT(*) FROM cthanghoa WHERE idhh = $idcthh AND idmau = $idmau";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkidandnameHangHoa($idhh,$tenhh)
    {
        $db = new connect();
        $select = " SELECT COUNT(*) FROM `hanghoa` WHERE idhh=$idhh and tenhh='$tenhh'";
        $result = $db->getInstance($select);
        return $result;
    }
}
