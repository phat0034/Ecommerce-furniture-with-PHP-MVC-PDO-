<?php
class wishlist
{
    function insertWishlist($idhh, $idkh)
    {
        $db = new connect();
        $query = "INSERT INTO `wishlist`(`idwl`, `idhh`, `idkh`) VALUES (null,'$idhh','$idkh')";
        $result = $db->exec($query);
        return $result;
    }
    public function checkWishlistItem($idhh, $idkh)
    {
        $db = new connect();
        $query = $db->getList("SELECT * FROM wishlist WHERE idhh = $idhh AND idkh = $idkh");
        $query->execute();

        return $query->rowCount() > 0;
    }
    function getAllwishlist($idkh)
    {
        $db = new connect();
        $select = "SELECT * FROM wishlist WHERE idkh=$idkh";
        $result = $db->getList($select);
        return $result;
    }
    function showTenhhwl($idhh)
    {
        $db = new connect();
        $select = "SELECT a.tenhh FROM hanghoa a, cthanghoa b where a.idhh=b.idhh and a.idhh=$idhh";
        $result = $db->getInstance($select);
        return $result;
    }

    function showHinhwl($idhh)
    {
        $db = new connect();
        $select = " SELECT hinh FROM hanghoa a, cthanghoa b where a.idhh=b.idhh and a.idhh=$idhh";
        $result = $db->getInstance($select);
        return $result;
    }

    function showMauwl($idhh)
    {
        $db = new connect();
        $select = "SELECT b.tenmau FROM cthanghoa a, mausac b WHERE a.idmau = b.idmau and a.idhh=$idhh";
        $result = $db->getInstance($select);
        return $result;
    }
    function showLoaiwl($idhh)
    {
        $db = new connect();
        $select = "SELECT b.tenloai FROM hanghoa a, loai b WHERE a.maloai=b.maloai and a.idhh =$idhh";
        $result = $db->getInstance($select);
        return $result;
    }
    function showMaloaiwl($idhh)
    {
        $db = new connect();
        $select = "SELECT b.maloai FROM hanghoa a, loai b WHERE a.maloai=b.maloai and a.idhh =$idhh";
        $result = $db->getInstance($select);
        return $result;
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
    function removeFromWishlist($idkh, $idhh)
    {
        $db = new connect();
        $query = "DELETE FROM wishlist WHERE idkh = '$idkh' AND idhh = '$idhh'";
        $db->exec($query);
    }
}
