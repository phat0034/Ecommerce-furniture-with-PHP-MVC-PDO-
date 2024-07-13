<?php

class member
{

    function getallMember()
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang ";
        $result = $db->getList($select);
        return $result;
    }
    function getMemberbyId($idkh)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang where idkh = $idkh";
        $result = $db->getList($select);
        return $result;
    }
    function updateKhachhang($idkh, $username, $passnew, $email, $diachi, $sdt, $role)
    {
        $db = new connect();
        $query = "UPDATE khachhang SET username='$username',password='$passnew',email='$email',diachi='$diachi',sodienthoai='$sdt',role='$role' WHERE idkh=$idkh";
        $db->exec($query);
        var_dump($query);
    }
    function addKhachhang($username, $passnew, $email, $diachi, $sdt, $role)
    {
        $db = new connect();
        $query = "INSERT INTO khachhang(idkh, username, password, email, diachi, sodienthoai, role)
        VALUES (null, '$username', '$passnew', '$email', '$diachi', '$sdt', '$role')";
        var_dump($query);
        $db->exec($query);
    }
    function removeKhachhang($idkh)
    {
        $db = new connect();
        $query = "DELETE FROM `khachhang` WHERE  idkh=$idkh";
        $db->exec($query);
        var_dump($query);
    }
}
