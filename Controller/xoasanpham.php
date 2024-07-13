<?php
if (isset($_GET['id']) && isset($_SESSION['cart'][$_GET['id']])) {
    unset($_SESSION['cart'][$_GET['id']]);
}elseif($_GET['id']=="all")
{
    unset($_SESSION['cart']);
}
echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang" />';
