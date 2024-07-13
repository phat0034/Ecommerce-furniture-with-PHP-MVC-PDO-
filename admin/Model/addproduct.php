<?php

class addproduct
{
    function insertnewProduct($tenhh, $maloai, $soluong, $mota, $hinh)
    {
        $db = new connect();
        $date = new DateTime();
        $ngaytao = $date->format("Y-m-d");
        $query = "INSERT INTO hanghoa(idhh, tenhh, maloai, soluong, mota, ngaytao, soluotxem,hinh) VALUES 
        (null,'$tenhh',$maloai,$soluong,'$mota','$ngaytao',0,'$hinh')";
        var_dump($query);
        $db->exec($query);
    }
    function insertnewDetailProduct($idhh, $idmau, $dongia, $giamgia)
    {
        $db = new connect();
        $query = "INSERT INTO `cthanghoa`(`idhh`, `idmau`, `dongia`, `giamgia`) VALUES
         ($idhh,$idmau,$dongia,$giamgia)";
        var_dump($query);
        $db->exec($query);
    }


    function getlastProduct()
    {
        $db = new connect();
        $select = "SELECT * FROM `hanghoa` order by idhh desc limit 1";
        $result = $db->getInstance($select);
        return $result;
    }

    function checkColorAddnew($idhh, $idmau)
    {
        $db = new connect();
        $select = "   SELECT COUNT(*) FROM cthanghoa WHERE idmau =$idmau and idhh=$idhh";
        $result = $db->getInstance($select);

        return $result;
    }
    function checknameAddnew($tenhh)
    {
        $db = new connect();
        $select = "SELECT COUNT(*) FROM hanghoa WHERE tenhh ='$tenhh'";
        $result = $db->getInstance($select);

        return $result;
    }
    function getidalreadybyTenhh($tenhh)
    {
        $db = new connect();
        $select = "  SELECT idhh FROM `hanghoa` WHERE tenhh = '$tenhh'";
        $result = $db->getInstance($select);
        return $result;
    }
    function getmaloaibyId($maloai)
    {
        $db = new connect();
        $select = "   SELECT tenloai FROM loai WHERE maloai=$maloai";
        $result = $db->getInstance($select);
        return $result;
    }
    function getMaubyIdmau($idmau)
    {
        $db = new connect();
        $select = "   SELECT tenmau FROM mausac WHERE idmau=$idmau";
        $result = $db->getInstance($select);
        return $result;
    }
}
