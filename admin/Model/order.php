<?php

class order
{

    function getAllOrder()
    {
        $db = new connect();
        $select = "SELECT * FROM hoadon ";
        $result = $db->getList($select);
        return $result;
    }
    function getorderbyidhd($idhd)
    {
        $db = new connect();
        $select = "SELECT * FROM cthoadon where idhd = $idhd ";
        $result = $db->getList($select);
        return $result;
    }
    function getUsernamebyIdkh($idkh)
    {
        $db = new connect();
        $select = "SELECT username FROM khachhang where idkh = $idkh ";
        $result = $db->getInstance($select);
        return $result;
    }
    function getnameHanghoabyidhh($idhh)
    {
        $db = new connect();
        $select = "SELECT tenhh FROM hanghoa where idhh = $idhh ";
        $result = $db->getInstance($select);
        return $result;
    }
    function updateStatushd($idhd, $status)
    {
        $db = new connect();
        $query = "UPDATE hoadon SET trangthai ='$status' WHERE idhd= $idhd ";
        $db->exec($query);
        var_dump($query);
    }
}
