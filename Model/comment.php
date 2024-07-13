<?php
include_once('connect.php'); // Khai báo lớp connect

class comment
{
    function getComment($idhh)
    {
        $db = new connect();
        $select = "SELECT a.*,b.idhh,b.tenhh FROM comment a, hanghoa b where a.idhh=b.idhh and a.idhh=$idhh ORDER by a.idcmt DESC ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }

    function getnameCmtbyIdkh($idkh)
    {
        $db = new connect();
        $select = "SELECT username FROM `khachhang` WHERE idkh = $idkh ";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function insertComment($idkh, $idhh, $noidung)
    {
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $db = new connect();
        $query = "INSERT INTO `comment`(`idcmt`, `idkh`, `idhh`, `noidung`, `ngaytao`) VALUES (null,$idkh,$idhh,'$noidung','$ngay')";
        var_dump($query);
        $result = $db->exec($query);
        return $result;
    }
    function getmycommentByIdkh($idkh)
    {
        $db = new connect();
        $select = " SELECT * FROM comment WHERE idkh=$idkh ";
        $result = $db->getList($select);
        return $result; // đã lấy đc dữ liệu về
    }
    function getTenhhbyidhh($idhh)
    {
        $db = new connect();
        $select = " SELECT a.tenhh FROM hanghoa a, comment b WHERE a.idhh = b.idhh and b.idhh=$idhh ";
        $result = $db->getInstance($select);
        return $result; // đã lấy đc dữ liệu về
    }
}
