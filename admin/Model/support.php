<?php
class support
{
    function getAllsupport()
    {
        $db = new connect();
        $select = "SELECT * FROM supportservice ";
        $result = $db->getList($select);
        return $result;
    }
    function updateStatuscs($idht, $status)
    {
        $db = new connect();
        $query = "UPDATE `supportservice` SET trangthai ='$status' WHERE idht=$idht";
        $db->exec($query);
   
    }
}
