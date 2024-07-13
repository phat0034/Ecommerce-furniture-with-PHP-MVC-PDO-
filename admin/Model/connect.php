<?php
class connect
{
    //thuộc tính
    var $db = null;
    // hàm tạo
    function __construct()
    {
        //database
        $dsn = 'mysql:host=localhost;dbname=trytest';
        $user = 'root';
        $pass = '';
        //link with pdo
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (\Throwable $th) {
            //throw $th
            echo "Kết nối thất bại";
            echo $th;
        }
    }
    function getList($select)
    {
        //truy vấn thì trả về là 1 table nhiều row, thì cần 1 biến chứa
        $result = $this->db->query($select);
        return $result; //trả về 1 table
    }
    //phương thức lấy về chỉ 1 row
    function getInstance($select)
    {
        $result = $this->db->query($select);
        // nhưng do chỉ có 1 row nên thực hiện fetch dữ liệu luôn
        $result = $result->fetch();
        return $result; // mảng
    }
    //truy vấn bằng insert,update,delete
    function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    //prepare
    function exceP($query)
    {
        $statement = $this->db->prepare($query);
        return $statement;
    }
}