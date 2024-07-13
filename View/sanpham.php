<style>
    .show_Product .card .card-body .card-text.active {
        font-size: 16px;
        font-weight: 700;
    }

    .show_Product .card .card-body .card-text.sale {
        font-size: 16px;
        color: #757575 !important;
        font-weight: 500;
        text-decoration: line-through;
    }

    .show_Product .card .card-body .card-text-sale {
        font-size: 16px;
        color: red !important;
        font-weight: 700;

    }
</style>
<?php

$act = 0;
if (isset($_GET["action"])) {
    if (isset($_GET['act']) && $_GET['act'] == 'tag') {
        $act = 1;
    } elseif (isset($_GET['act']) && $_GET['act'] == 'search' && $_GET['s']) {

        $act = 2;
    } elseif (isset($_GET['types'])) {
        $act = 3;
        echo $act;
    } else {
        $act = 0;
    }
}

if (isset($_GET['s'])) {
    $text = $_GET['s'];
}
echo $act;
$hanghoa = new hanghoa();
switch ($act) {
    case '0':
        $demProd = $hanghoa->getHangHoa()->rowCount();
        break;
    case '1':
        $idtag = $_GET['idtag'];
        $demProd = $hanghoa->getHangHoaTagAll($idtag)->rowCount();
        break;
    case '2':
        $demProd = $hanghoa->getHangHoaTbySearchAll($text)->rowCount();
        break;
    case '3':

        break;

    default:
        # code...
        break;
}
if ($act != 3) {
    $limit = 15;
    $page = new page();
    $totalPage = $page->findPage($demProd, $limit);
    $start = $page->findStart($limit);
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
}
?>

<div class="search_filter_all">
    <div class="row">
        <div class="col-2 ">
            <div class="filter_all">
                <div class="price_range">
                    <form action="" method="GET">
                        <input class="" name="action" value="sanpham" hidden>
                        <!-- <h5>Price Range</h5> -->
                        <!-- <div class="progress">
                        <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 5%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1%</div>
                    </div>
                    <div class="star_rating">
                        <h5>Star Rating</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                        </svg>
                    </div> -->
                        <div class="produnct_type">
                            <h5>Loại sản phẩm</h5>
                            <?php
                            $hh = new hanghoa();
                            $type = $hh->getListType();
                            while ($itemtype = $type->fetch()) :
                                $nametype = $itemtype['tenloai'];
                                $idtype = $itemtype['maloai'];
                                $check = [];
                                if (isset($_GET['types'])) {
                                    $check = $_GET['types'];
                                }
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="types[]" value="<?php echo $idtype ?>" id="flexCheckDefault" <?php if (in_array($idtype, $check)) {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        }  ?>>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <?php echo $nametype ?>
                                    </label>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <!-- <div class="destiny_type">
                            <h5>Theo Mệnh</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mệnh Kim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mệnh Mộc
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mệnh Thủy
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mệnh Hỏa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mệnh Thổ
                                </label>
                            </div>
                        </div> -->
                        <div class="w-100 d-flex justify-content-end">
                            <button class="btn btn-warning">Lọc</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-10">


            <div class="sort_all ">
                <?php
                if ($act == 0) {
                    echo ' <h1 class="text-center">TẤT CẢ SẢN PHẨM</h1>';
                } elseif ($act == 1) {
                    echo ' <h1 class="text-center">SẢN PHẨM ' . strtoupper(($hanghoa->getNameTypeByIdType($idtag)))  . '</h1>';
                } elseif ($act == 2) {
                    echo ' <h1 class="text-center">TÌM KIẾM SẢN PHẨM</h1>';
                }
                ?>
                <div class="sort_type d-flex justify-content-end pt-2 ">
                    <select class="form-select w-25" aria-label="Default select example">
                        <option selected>Sấp Xếp Theo</option>
                        <option value="1">Giá Từ Thấp - Cao</option>
                        <option value="2">Giá Từ Cao - Thấp</option>
                        <option value="3">Mức Độ Phổ Biến</option>
                    </select>
                </div>
                <?php
                if ($act == 2) {

                    echo ' <h4>Từ khóa: ' . $text . '</h4>';
                }
                ?>
                <div class="show_Product d-flex flex-wrap">
                    <?php
                    $hh = new hanghoa();
                    if ($act == 0) {
                        if (isset($_GET['page']) && ($_GET['page']) > $totalPage) {
                            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&page=1" />';
                        }
                        $result = $hh->getHangHoaAllPage($start, $limit);
                    } elseif ($act === 1) {
                        if (isset($_GET['page']) && ($_GET['page']) > $totalPage) {
                            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=1" />';
                        }
                        $result = $hh->getHangHoaTag($idtag, $start, $limit);
                    } elseif ($act === 2) {

                        if (isset($_GET['page']) && ($_GET['page']) > $totalPage) {
                            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=search&s=' . $_GET['s'] . '&page=1" />';
                        }
                        $result = $hh->getHangHoaTbySearch($text, $start, $limit);
                    } elseif ($act === 3) {

                        // if (isset($_GET['page']) && ($_GET['page']) > $totalPage) {
                        //     echo '<meta http-equiv="refresh" content="0;url=./index.php?action=sanpham&act=search&s=' . $_GET['s'] . '&page=1" />';
                        // }
                        if (isset($_GET['types'])) {
                            $typeCheck = [];
                            $typeCheck = $_GET['types'];
                            foreach ($typeCheck as $itemType) {
                                $result = $hh->getFilterList($itemType);
                                if ($result->rowCount() > 0) {
                                    while ($item = $result->fetch()) :
                                        $idhh = $item['idhh'];
                                        $cthh = $hh->getCthanghoaId($idhh);
                                        $mau = $hh->getMauCthanghoa($idhh);
                                        $minPrice = $hh->getMinPrice($idhh)[0];
                                        $maxPrice = $hh->getMaxPrice($idhh)[0];
                                        $minSale = $hh->getMinSale($idhh)[0];
                                        $maxSale = $hh->getMaxSale($idhh)[0];
                    ?>
                                        <div class="card" style="width: 250px; ">
                                            <?php
                                            // var_dump($fectchh);
                                            $hinh = $hh->getCthanghoaHinh($idhh);
                                            $only1Color = $mau->fetch();
                                            $lowerColor = strtolower($only1Color[1]);
                                            ?>
                                            <img src=".\Content\image\product\<?php echo $hinh[0] . $lowerColor ?>.jpg" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $item['tenhh'] ?></h5>
                                                <?php
                                                if ($minSale > 0) {
                                                    echo '<p class="card-text sale"><span >' . number_format($minPrice, 0, ".", ",") . '</span> -
                                        <span>' . number_format($maxPrice, 0, ".", ",") . '</span> đ
                                    </p>
                                    <p class="card-text-sale "><span class="firstPrice">' . number_format($minSale, 0, ".", ",") . '</span> -
                                        <span>' . number_format($maxSale, 0, ".", ",") . '</span> đ
                                    </p>';
                                                } else {
                                                    echo '   
                                     <p class="card-text active"><span class="firstPrice">' . number_format($minPrice, 0, ".", ",") . '</span> - <span>
                                     ' . number_format($maxPrice, 0, ".", ",") . '</span> đ</p>';
                                                }
                                                ?>
                                                <div class="color_Product">
                                                    <ul>
                                                        <?php
                                                        $fetchmau = $hh->getMauCthanghoa($idhh);
                                                        while ($itmau = $fetchmau->fetch()) {
                                                            echo ' <li><a href="index.php?action=sanpham&act=spct&id=' . $idhh . '" value="' . $itmau['tenmau'] . '"></a></li>';
                                                        }

                                                        ?>
                                                    </ul>
                                                </div>
                                                <div class="more_infor d-flex justify-content-end">
                                                    <a href="index.php?action=sanpham&act=spct&id=<?php echo $idhh ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-search" viewBox="0 0 16 16">
                                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                } else {
                                    ?>

                            <?php
                                }
                            }
                        }
                    }
                    if ($act != 3) {
                        while ($item = $result->fetch()) :
                            $idhh = $item['idhh'];
                            $cthh = $hh->getCthanghoaId($idhh);
                            $mau = $hh->getMauCthanghoa($idhh);
                            $minPrice = $hh->getMinPrice($idhh)[0];
                            $maxPrice = $hh->getMaxPrice($idhh)[0];
                            $minSale = $hh->getMinSale($idhh)[0];
                            $maxSale = $hh->getMaxSale($idhh)[0];
                            ?>
                            <!-- fecth từ đây -->
                            <div class="card" style="width: 250px; ">
                                <?php
                                // var_dump($fectchh);
                                $hinh = $hh->getCthanghoaHinh($idhh);
                                $only1Color = $mau->fetch();
                                $lowerColor = strtolower($only1Color[1]);
                                ?>
                                <img src=".\Content\image\product\<?php echo $hinh[0] . $lowerColor ?>.jpg" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['tenhh'] ?></h5>
                                    <?php
                                    if ($minSale > 0) {
                                        echo '<p class="card-text sale"><span >' . number_format($minPrice, 0, ".", ",") . '</span> -
                                            <span>' . number_format($maxPrice, 0, ".", ",") . '</span> đ
                                        </p>
                                        <p class="card-text-sale "><span class="firstPrice">' . number_format($minSale, 0, ".", ",") . '</span> -
                                            <span>' . number_format($maxSale, 0, ".", ",") . '</span> đ
                                        </p>';
                                    } else {
                                        echo '   
                                         <p class="card-text active"><span class="firstPrice">' . number_format($minPrice, 0, ".", ",") . '</span> - <span>
                                         ' . number_format($maxPrice, 0, ".", ",") . '</span> đ</p>';
                                    }
                                    ?>
                                    <div class="color_Product">
                                        <ul>
                                            <?php
                                            $fetchmau = $hh->getMauCthanghoa($idhh);
                                            while ($itmau = $fetchmau->fetch()) {
                                                echo ' <li><a href="index.php?action=sanpham&act=spct&id=' . $idhh . '" value="' . $itmau['tenmau'] . '"></a></li>';
                                            }

                                            ?>
                                        </ul>
                                    </div>
                                    <div class="more_infor d-flex justify-content-end">
                                        <a href="index.php?action=sanpham&act=spct&id=<?php echo $idhh ?>" class=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    }

                    ?>

                </div>
                <div class="pageF">
                    <ul class="text-center d-flex justify-content-center">


                        <?php
                        switch ($act) {
                            case '0':
                                echo '
                                   <li><a href="index.php?action=sanpham&page=1">First</a></li>
                            <li class="' . (($current_page <= 1) ? "disabledPage" : "") . '">
                                <a href="index.php?action=sanpham&page=' . ($current_page - 1) . '">Prev</a>
                            </li>';

                                for ($i = 1; $i <= $totalPage; $i++) {
                                    echo '
                                <li>
                                    <a href="index.php?action=sanpham&page=' . $i . '" style="' . (($current_page == $i) ? 'color: #eee;background-color: #000;' : '') . '">' . $i . '</a>
                                </li>';
                                }

                                echo '
                            <li class="' . (($current_page >= $totalPage) ? "disabledPage" : "") . '">
                                <a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a>
                            </li>
                            <li>
                                <a href="index.php?action=sanpham&page=' . $totalPage . '">Last</a>
                            </li>';
                                break;



                            case '1':
                                echo '   <li><a href="index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=1">First</a></li>
                                    <li class="' . (($current_page <= 1) ? "disabledPage" : "") . '">
                                        <a href="index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=' . ($current_page - 1) . '">Prev</a>
                                    </li>';

                                for ($i = 1; $i <= $totalPage; $i++) {
                                    echo '
                                        <li>
                                            <a href="index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=' . $i . '" style="' . (($current_page == $i) ? 'color: #eee;background-color: #000;' : '') . '">' . $i . '</a>
                                        </li>';
                                }

                                echo '
                                    <li class="' . (($current_page >= $totalPage) ? "disabledPage" : "") . '">
                                        <a href="index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=' . ($current_page + 1) . '">Next</a>
                                    </li>
                                    <li>
                                        <a href="index.php?action=sanpham&act=tag&idtag=' . $_GET['idtag'] . '&page=' . $totalPage . '">Last</a>
                                    </li>';
                                break;
                            case '2':
                                echo '   <li><a href="index.php?action=sanpham&act=search&s=' . $text . '&page=1">First</a></li>
                                <li class="' . (($current_page <= 1) ? "disabledPage" : "") . '">
                                    <a href="index.php?action=sanpham&act=search&s=' . $text . '&page=' . ($current_page - 1) . '">Prev</a>
                                </li>';

                                for ($i = 1; $i <= $totalPage; $i++) {
                                    echo '
                                    <li>
                                        <a href="index.php?action=sanpham&act=search&s=' . $text . '&page=' . $i . '" style="' . (($current_page == $i) ? 'color: #eee;background-color: #000;' : '') . '">' . $i . '</a>
                                    </li>';
                                }

                                echo '
                                <li class="' . (($current_page >= $totalPage) ? "disabledPage" : "") . '">
                                    <a href="index.php?action=sanpham&act=search&s=' . $text . '&page=' . ($current_page + 1) . ' ">Next</a>
                                </li>
                                <li>
                                    <a href="index.php?action=sanpham&act=search&s=' . $text . '&page=' . $totalPage . '">Last</a>
                                </li>';
                                break;
                            case '3':
                                // Các xử lý cho case 3
                                break;
                            case '4':
                                // Các xử lý cho case 4
                                break;
                            case '5':
                                // Các xử lý cho case 5
                                break;
                            default:
                                // Xử lý cho trường hợp mặc định
                                break;
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script>
    const sortSelect = document.querySelector('.form-select');
    sortSelect.addEventListener('change', sortProducts);

    function sortProducts() {
        const selectedOption = this.value;
        const productCards = document.querySelectorAll('.show_Product .card');
        const products = Array.from(productCards).map(card => {
            const priceElement = card.querySelector('.firstPrice');
            const rawPriceText = priceElement ? priceElement.textContent : '0';
            const price = parseFloat(rawPriceText.replace(/,/g, ''));
            return {
                card,
                price
            };
        });
        console.log(products);
        switch (selectedOption) {
            case '1':
                products.sort((a, b) => a.price - b.price);
                break;
            case '2':
                products.sort((a, b) => b.price - a.price);
                break;
            case '3':
                // Sắp xếp theo mức độ phổ biến (tạm thời để trống)
                break;
            default:
                break;
        }

        const sortedProducts = products.map(product => product.card);
        const showProductContainer = document.querySelector('.show_Product');
        showProductContainer.innerHTML = '';
        sortedProducts.forEach(card => showProductContainer.appendChild(card));
    }


    function changeColor() {
        var links = document.querySelectorAll(" ul li a");

        links.forEach(function(link) {
            var color = link.getAttribute("value");
            if (color === "White") {
                link.style.backgroundColor = "#F5F5F5";
            } else if (color === "Red") {
                link.style.backgroundColor = "#FF6961";
            } else if (color === "Green") {
                link.style.backgroundColor = "#93E9BE";
            } else if (color === "Black") {
                link.style.backgroundColor = "#212121";
            } else if (color === "Grey") {
                link.style.backgroundColor = "#949494";
            } else if (color === "Yellow") {
                link.style.backgroundColor = "#FCFC69";
            } else if (color === "Brown") {
                link.style.backgroundColor = "#C46200";
            } else if (color === "Blue") {
                link.style.backgroundColor = "#32CBF1";
            }
        });
    }

    window.onload = function() {
        changeColor();
    };
</script>