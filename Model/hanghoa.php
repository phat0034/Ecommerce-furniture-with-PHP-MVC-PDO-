<?php
include_once('connect.php'); // Khai báo lớp connect

class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getHangHoasameType($maloai)
    {
        $db = new connect();
        $select = "SELECT * FROM `hanghoa` WHERE maloai =$maloai ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getHangHoaTag($maloai, $start, $limit)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa a,loai b WHERE a.maloai=b.maloai and b.maloai =$maloai  ORDER by idhh DESC limit   $start,$limit   ";

        $result = $db->getList($select);

        return $result; // đã lấy đc dữ liệu về
    }
    function getHangHoaTagAll($maloai)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa a,loai b WHERE a.maloai=b.maloai and b.maloai =$maloai";

        $result = $db->getList($select);

        return $result; // đã lấy đc dữ liệu về
    }
    function getHangHoaTbySearchAll($text)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa WHERE tenhh LIKE '%$text%'   ORDER BY idhh; ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getHangHoaTbySearch($text,$start,$limit)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa WHERE tenhh LIKE '%$text%' ORDER BY idhh  limit   $start,$limit ; ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getCthanghoaId($idhh)
    {
        $db = new connect();
        $select = "SELECT * FROM cthanghoa a, mausac b WHERE a.idmau = b.idmau and a.idhh =  $idhh ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getFilterList($idTypes)
    {
        $db = new connect();
        $select = " SELECT * FROM `hanghoa` WHERE maloai in($idTypes); ";
    
        $result = $db->getList($select);
   
        return $result; // đã lấy đc dữ liệu về
    }
    function getMauCthanghoa($idhh)
    {
        $db = new connect();
        $select = "SELECT b.idmau,b.tenmau FROM cthanghoa a, mausac b WHERE a.idmau = b.idmau and a.idhh =  $idhh";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getCthanghoaHinh($idhh)
    {
        $db = new connect();
        $select = "SELECT hinh FROM hanghoa WHERE idhh = $idhh LIMIT 1";
        $result = $db->getInstance($select);
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

    function getCthh($idhh)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa a, cthanghoa b, loai c WHERE a.idhh = b.idhh and a.idhh=$idhh and a.maloai = c.maloai";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về

    }
    function getHinhCTHH($idhh)
    {
        $db = new connect();
        $select = "SELECT hinh FROM hanghoa WHERE idhh=$idhh;";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về

    }

    function getCthanghoaIdmau($idhh, $idmau)
    {
        $db = new connect();
        $select = "SELECT * FROM cthanghoa WHERE idhh = $idhh AND idmau = $idmau";
        $result = $db->getInstance($select);
        return $result;
    }
    function getDonGiaByIdAndMau($idhh, $idmau)
    {
        $db = new connect();
        $select = "SELECT dongia FROM cthanghoa WHERE idhh = $idhh AND idmau = $idmau";
        $result = $db->getInstance($select);
        return $result['dongia'];
    }
    function getMauIdByTenMau($tenmau)
    {
        $db = new connect();
        $select = "SELECT idmau FROM mausac WHERE tenmau = '$tenmau'";

        $result = $db->getInstance($select);

        return $result['idmau'];
    }
    function getHangHoaAlly($id)
    {
        $db = new connect();
        $select = "Select * from cthanghoa a,hanghoa b,mausac c WHERE a.idhh=b.idhh and a.idhh=$id and c.idmau = a.idmau;
        ";
        // echo $select;
        $result = $db->getInstance($select);
        return $result;
    }
    function getColorNameByid($id, $idmau)
    {
        $db = new connect();
        $select = "SELECT b.tenmau FROM cthanghoa a,mausac b WHERE a.idmau=b.idmau and a.idhh =$id and b.idmau=$idmau;
        ";
        // echo $select;
        $result = $db->getInstance($select);
        return $result;
    }

    function getSalebyIdnColor($id, $idmau)
    {
        $db = new connect();
        $select = " SELECT a.giamgia FROM cthanghoa a,mausac b WHERE a.idmau=b.idmau and a.idhh =$id and b.idmau=$idmau;
        ";
        // echo $select;
        $result = $db->getInstance($select);
        return $result;
    }
    
    function getPricebyIdnColor($id, $idmau)
    {
        $db = new connect();
        $select = " SELECT a.dongia FROM cthanghoa a,mausac b WHERE a.idmau=b.idmau and a.idhh =$id and b.idmau=$idmau;
        ";
        // echo $select;
        $result = $db->getInstance($select);
        return $result;
    }
    function getListType()
    {
        $db = new connect();
        $select = "  SELECT * FROM loai ";
        // echo $select;
        $result = $db->getList($select);
        return $result;
    }
    function getNameTypeByIdType($maloai)
    {
        $db = new connect();
        $select = "  SELECT tenloai FROM loai where maloai = $maloai ";
        // echo $select;
        $result = $db->getInstance($select)[0];
        return $result;
    }
    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "SELECT * FROM hanghoa
           ORDER by idhh DESC limit " . $start . "," . $limit;
        //ai thực hiện câu select? qery mà query nằm trong pt getLis, mà getList là pt thuộc về connect
        $result = $db->getList($select);
        return $result;
    }
}
