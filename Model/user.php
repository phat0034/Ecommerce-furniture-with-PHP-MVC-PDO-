<?php
class user
{
    function insertKhachHang($username, $matkhau, $email, $diachi, $sodt, $role)
    {
        if ($role == null) {
            $role = 0;
        }
        $db = new connect();
        $query = "INSERT INTO khachhang (idkh, username, password, email, diachi, sodienthoai, role)
            VALUES(NULL,'$username','$matkhau','$email','$diachi','$sodt','$role')";
        $result = $db->exec($query);
        return $result;
    }
    function checkKhachHang($username, $email)
    {
        $db = new connect();
        $select = "SELECT * FROM khachhang WHERE username='$username' or email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }
    function logKhachHang($user, $pass)
    {
        $db = new connect();
        $select = "select a.idkh,a.username, a.role from khachhang a Where a.username='$user' and a.password='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang where email='$email'";
        $result = $db->getList($select);
        return $result;
    }
    //pt update
    function updateEmailpass($passnew, $emailold)
    {
        $db = new connect();
        $query = "update khachhang set password='$passnew' where email='$emailold'";
        echo $query;
        $db->exec($query);
    }
    function getEmailbyIdkh($idkh)
    {
        $db = new connect();
        $select = "  SELECT email FROM khachhang WHERE idkh= $idkh";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkPassbyEmail($email)
    {
        $db = new connect();
        $select = "  SELECT password FROM khachhang WHERE email = '$email' ";
        $result = $db->getInstance($select);
        return $result;
    }
    function changePasswNewpass($passnew, $email)
    {
        $db = new connect();
        $query = "UPDATE khachhang SET password = '$passnew' WHERE email = '$email' ";
        $statement = $db->exceP($query);
        return $statement->execute();
    }
    function insertSupport($name, $email,  $sdt, $noidung)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "INSERT INTO supportservice(idht, tenkh, sdt, email, noidung,ngaytao, trangthai)
         VALUES (null,'$name','$sdt','$email','$noidung','$ngay','0')";
        $db->exec($query);
    }
    function checkNoidungspam($noidung)
    {
        $db = new connect();

        $select = "SELECT COUNT(*) FROM supportservice WHERE noidung ='$noidung'";
        $result = $db->getInstance($select);

        return $result;
    }
    function getAllfromKhachhang($idkh)
    {
        $db = new connect();

        $select = "SELECT idkh,username,email,diachi,sodienthoai,role FROM `khachhang` WHERE idkh=$idkh";
        $result = $db->getList($select);

        return $result;
    }
    function updateProfile($email,$diachi, $sdt,$idkh)
    {
        $db = new connect();
        $query = "UPDATE khachhang SET email='$email',diachi='$diachi',sodienthoai='$sdt' WHERE idkh = '$idkh'";
        echo $query;
        $db->exec($query);
    }
}
