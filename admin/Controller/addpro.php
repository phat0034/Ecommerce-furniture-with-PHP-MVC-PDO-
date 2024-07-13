<?php

$act = "addpro";
if (isset($_GET['act'])) {
    $act = $_GET['act']; // output sanphamkhuyenmai
}
switch ($act) {
    case 'addpro':
        include_once "View/addproduct.php";
        break;

    case 'add1action':
        if (isset($_POST['submitAdd'])) {
            $tenhh = $_POST['nameaddPrd'];
            $maloai = $_POST['typeProd'];
            $soluong = $_POST['quantityProd'];
            $mota = $_POST['noidungProd'];
            $imagepost = $_FILES['imageUpload'];

            $addprod = new addproduct();
            $countNameProd = $addprod->checknameAddnew($tenhh)[0];
            $tenloai = strtolower($addprod->getmaloaibyId($maloai)[0]);
            // $path = $tenloai . "\\" . $tenhh . "\\";
            // $newStr = str_replace(" ", "", $path);
            // $pathHinh = strtolower($newStr);
            $pathType = "../Content/image/product/" . $tenloai;
            $nospacetenhh = str_replace(" ", "", $tenhh);
            $pathProd = $pathType . '/' . $nospacetenhh;
            //check folder loại sản phẩm
            // if (file_exists($pathType)) {
            //     echo "Thư mục loại sản phẩm đã tồn tại.";
            //     if (file_exists($pathProd)) {
            //         echo "Thư mục tên sản phẩm đã tồn tại.";
            //         //nếu thư mục tên sản phẩm đã tồn tại , chỉ lấy ảnh đẩy vào thư mục tên sản phẩm
            //         $originalFileName = $imagepost['name'];
            //         $tempFilePath = $imagepost['tmp_name'];
            //         $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

            //         $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
            //         $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

            //         var_dump($targetFilePath);
            //         // Kiểm tra định dạng file chỉ cho phép JPG
            //         if ($fileType == "jpg") {
            //             // Di chuyển ảnh vào thư mục đích
            //             if (move_uploaded_file($tempFilePath, $targetFilePath)) {
            //                 echo "Upload ảnh thành công!";
            //             } else {
            //                 echo "Có lỗi xảy ra trong quá trình upload.";
            //             }
            //         } else {
            //             echo "Chỉ cho phép upload ảnh định dạng JPG.";
            //         }
            //     } else {
            //         //nếu chưa có folder tên sản phẩm sẽ tạo và đẩy hình vào sản phẩm
            //         mkdir($pathProd, 0777, true);
            //         // Thay đổi đường dẫn tới thư mục lưu trữ ảnh
            //         $originalFileName = $imagepost['name'];
            //         $tempFilePath = $imagepost['tmp_name'];
            //         $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

            //         $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
            //         $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

            //         var_dump($targetFilePath);
            //         // Kiểm tra định dạng file chỉ cho phép JPG
            //         if ($fileType == "jpg") {
            //             // Di chuyển ảnh vào thư mục đích
            //             if (move_uploaded_file($tempFilePath, $targetFilePath)) {
            //                 echo "Upload ảnh thành công!";
            //             } else {
            //                 echo "Có lỗi xảy ra trong quá trình upload.";
            //             }
            //         } else {
            //             echo "Chỉ cho phép upload ảnh định dạng JPG.";
            //         }
            //     }
            // } else {
            //     //NẾU CHƯA CÓ FOLDER LOẠI, TẠO FOLDER LOẠI, TẠO FOLDER TÊN SẢN PHẨM
            //     mkdir($pathType, 0777, true);
            //     echo "Thư mục loại sản phẩm đã được tạo.";

            //     if (file_exists($pathProd)) {
            //         echo "Thư mục tên sản phẩm đã tồn tại.";
            //         //nếu thư mục tên sản phẩm đã tồn tại , chỉ lấy ảnh đẩy vào thư mục tên sản phẩm
            //         $originalFileName = $imagepost['name'];
            //         $tempFilePath = $imagepost['tmp_name'];
            //         $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

            //         $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
            //         $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

            //         var_dump($targetFilePath);
            //         // Kiểm tra định dạng file chỉ cho phép JPG
            //         if ($fileType == "jpg") {
            //             // Di chuyển ảnh vào thư mục đích
            //             if (move_uploaded_file($tempFilePath, $targetFilePath)) {
            //                 echo "Upload ảnh thành công!";
            //             } else {
            //                 echo "Có lỗi xảy ra trong quá trình upload.";
            //             }
            //         } else {
            //             echo "Chỉ cho phép upload ảnh định dạng JPG.";
            //         }
            //     } else {
            //         //nếu chưa có folder tên sản phẩm sẽ tạo và đẩy hình vào sản phẩm
            //         mkdir($pathProd, 0777, true);
            //         // Thay đổi đường dẫn tới thư mục lưu trữ ảnh
            //         $originalFileName = $imagepost['name'];
            //         $tempFilePath = $imagepost['tmp_name'];
            //         $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

            //         $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
            //         $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

            //         var_dump($targetFilePath);
            //         // Kiểm tra định dạng file chỉ cho phép JPG
            //         if ($fileType == "jpg") {
            //             // Di chuyển ảnh vào thư mục đích
            //             if (move_uploaded_file($tempFilePath, $targetFilePath)) {
            //                 echo "Upload ảnh thành công!";
            //             } else {
            //                 echo "Có lỗi xảy ra trong quá trình upload.";
            //             }
            //         } else {
            //             echo "Chỉ cho phép upload ảnh định dạng JPG.";
            //         }
            //     }
            // }



            if ($countNameProd > 0) {
                //nếu tên hàng hóa đã có, bỏ qua phần tạo hanghoa(BỎ LUÔN PHẦN TẠO LOẠI SẢN PHẨM ),di chuyển đến cthh(folder loại đã có,folder tên ,)
                $idhhbyalr = $addprod->getidalreadybyTenhh($tenhh)[0];
                $idmau = $_POST['colorProd'];
                $tenmausac = $addprod->getMaubyIdmau($idmau)[0];
                $dongia = $_POST['priceProd'];
                $giamgia = 0;

                if ($_POST['saleProd'] > 0) {
                    $giamgia = $_POST['saleProd'];
                }
                // check idmau đã có hay chưa
                $rowCount = $addprod->checkColorAddnew($idhhbyalr, $idmau)[0];
                if ($rowCount > 0) {
                    echo "<script>alert('màu sắc đã tồn tại')</script>";
                    echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=addpro"/>';
                } else {
                    if (file_exists($pathProd)) {
                        echo "Thư mục tên sản phẩm đã tồn tại.";
                        //nếu thư mục tên sản phẩm đã tồn tại , chỉ lấy ảnh đẩy vào thư mục tên sản phẩm
                        $originalFileName = $imagepost['name'];
                        $tempFilePath = $imagepost['tmp_name'];
                        $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

                        $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
                        $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

                        var_dump($targetFilePath);
                        // Kiểm tra định dạng file chỉ cho phép JPG
                        if ($fileType == "jpg") {
                            // Di chuyển ảnh vào thư mục đích
                            if (move_uploaded_file($tempFilePath, $targetFilePath)) {
                                echo "Upload ảnh thành công!";
                            } else {
                                echo "Có lỗi xảy ra trong quá trình upload.";
                            }
                        } else {
                            echo "Chỉ cho phép upload ảnh định dạng JPG.";
                        }
                    } else {
                        //nếu chưa có folder tên sản phẩm sẽ tạo và đẩy hình vào sản phẩm
                        mkdir($pathProd, 0777, true);
                        // Thay đổi đường dẫn tới thư mục lưu trữ ảnh
                        $originalFileName = $imagepost['name'];
                        $tempFilePath = $imagepost['tmp_name'];
                        $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

                        $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
                        $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

                        var_dump($targetFilePath);
                        // Kiểm tra định dạng file chỉ cho phép JPG
                        if ($fileType == "jpg") {
                            // Di chuyển ảnh vào thư mục đích
                            if (move_uploaded_file($tempFilePath, $targetFilePath)) {
                                echo "Upload ảnh thành công!";
                            } else {
                                echo "Có lỗi xảy ra trong quá trình upload.";
                            }
                        } else {
                            echo "Chỉ cho phép upload ảnh định dạng JPG.";
                        }
                    }
                    $addprod->insertnewDetailProduct($idhhbyalr, $idmau, $dongia, $giamgia);
                }
            } else {
                $path = $tenloai . "\\\\" . $tenhh . "\\\\";
                $newStr = str_replace(" ", "", $path);
                $pathHinh = strtolower($newStr);
                $addprod->insertnewProduct($tenhh, $maloai, $soluong, $mota, $pathHinh);
                $idhh = $addprod->getlastProduct()['idhh'];
                $idmau = $_POST['colorProd'];
                $tenmausac = strtolower($addprod->getMaubyIdmau($idmau)[0]);
                $dongia = $_POST['priceProd'];
                $giamgia = 0;
                if ($_POST['saleProd'] > 0) {
                    $giamgia = $_POST['saleProd'];
                }
                //check idmau đã có hay chưa
                $rowCount = $addprod->checkColorAddnew($idhh, $idmau)[0];
                if ($rowCount <= 0) {
                    if (file_exists($pathProd)) {
                        echo "Thư mục tên sản phẩm đã tồn tại.";
                        //nếu thư mục tên sản phẩm đã tồn tại , chỉ lấy ảnh đẩy vào thư mục tên sản phẩm
                        $originalFileName = $imagepost['name'];
                        $tempFilePath = $imagepost['tmp_name'];
                        $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

                        $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
                        $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

                        var_dump($targetFilePath);
                        // Kiểm tra định dạng file chỉ cho phép JPG
                        if ($fileType == "jpg") {
                            // Di chuyển ảnh vào thư mục đích
                            if (move_uploaded_file($tempFilePath, $targetFilePath)) {
                                echo "Upload ảnh thành công!";
                            } else {
                                echo "Có lỗi xảy ra trong quá trình upload.";
                            }
                        } else {
                            echo "Chỉ cho phép upload ảnh định dạng JPG.";
                        }
                    } else {
                        //nếu chưa có folder tên sản phẩm sẽ tạo và đẩy hình vào sản phẩm
                        mkdir($pathProd, 0777, true);
                        // Thay đổi đường dẫn tới thư mục lưu trữ ảnh
                        $originalFileName = $imagepost['name'];
                        $tempFilePath = $imagepost['tmp_name'];
                        $fileType = pathinfo($originalFileName, PATHINFO_EXTENSION);

                        $newFileName = $tenmausac; // Lấy tên tệp tin mới từ người dùngx
                        $targetFilePath = $pathProd . '/'  . $newFileName . '.' . $fileType;

                        var_dump($targetFilePath);
                        // Kiểm tra định dạng file chỉ cho phép JPG
                        if ($fileType == "jpg") {
                            // Di chuyển ảnh vào thư mục đích
                            if (move_uploaded_file($tempFilePath, $targetFilePath)) {
                                echo "Upload ảnh thành công!";
                            } else {
                                echo "Có lỗi xảy ra trong quá trình upload.";
                            }
                        } else {
                            echo "Chỉ cho phép upload ảnh định dạng JPG.";
                        }
                    }
                    $addprod->insertnewDetailProduct($idhh, $idmau, $dongia, $giamgia);
                    echo "<script>alert('Tạo thành công')</script>";
                    echo '<meta http-equiv="refresh" content="0;url=./admin.php"/>';
                } else {
                    echo "<script>alert('màu sắc đã tồn tại')</script>";
                    echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=addpro"/>';
                }
            }
        }
        break;
    case 'addCsv':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_FILES['file']) && $_FILES['file']['error'] !== UPLOAD_ERR_NO_FILE) {
                //B1 LẤY VỀ, TỪ SERVER $_FILE
                $file = $_FILES['file']['tmp_name'];
                // var_dump($file);
                //b2 thay thế những ký tự đặc biết xEF, xbb,xBF
                file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
                $file_open = fopen($file, "r");
                $header = fgetcsv($file_open, 1000, ",");
                $product = new product();
                //b4 đọc nội dung của file
                while ($csv = fgetcsv($file_open, 1000, ",")) {
                    $mahh = $csv[0];
                    $tenhh = $csv[1];
                    $tenloai = $csv[2];
                    $soluong = $csv[3];
                    $maloai = $product->getidmaloaibytenmaloai($tenloai);
                    $mota = $csv[4];
                    $pathType = "../Content/image/product/" . $tenloai;
                    $nospacetenhh = str_replace(" ", "", $tenhh);
                    $urlHinh = $pathType . '/' . $nospacetenhh;
                    $hinh =  $tenloai . '/' . $nospacetenhh . '/';
                    $dongia = $csv[6];
                    $giamgia = $csv[7];
                    $tenmau = $csv[8];
                    $idmau = $product->getIdmaubyTenmau($tenmau)[0];
                    $db = new connect();
                    $idcthh = $product->getNextIdhh();
                    var_dump($idcthh);
                    var_dump($idcthh);
                    $checkidmau = $product->checkidmaucthh($idcthh, $idmau)[0];
                    $checkidandname =  $product->checkidandnameHangHoa($mahh, $tenhh)[0];
                    var_dump($checkidmau);
                    if ($checkidmau <= 0) {
                        if ($checkidandname < 1) {
                            $queryhh = "INSERT INTO hanghoa(idhh, tenhh, maloai, soluong, mota, ngaytao, soluotxem, hinh)
                        VALUES ($mahh, '$tenhh', '$maloai', $soluong, '$mota', '', 0, '$hinh')";
                            var_dump($queryhh);
                            $db->exec($queryhh);
                        }
                        $querycthh = "INSERT INTO cthanghoa(idhh, idmau, dongia, giamgia)
                        VALUES ($mahh, $idmau, $dongia, $giamgia)";

                        var_dump($querycthh);

                        $db->exec($querycthh);

                        if (!file_exists($pathType)) {
                            mkdir($pathType, 0777, true);
                        }
                        if (!file_exists($urlHinh)) {
                            mkdir($urlHinh, 0777, true);
                        } else {
                            echo 'Thư mục đã tồn tại, đã tự động bỏ qua thao tác tạo';
                        }
                    } else {
                        echo 'Màu này đã tồn tại, đã tự động sang dữ liệu';
                    }
                }
                echo '<script> alert("Import dữ liệu thành công")</script>';
                // echo '<meta http-equiv=refresh content="0;url=../admin/admin.php?action=product"/>';
            } else {
                // Không chọn file, hiển thị thông báo lỗi
                echo '<script> alert("Chưa chọn file !!!!")</script>';
                echo '<meta http-equiv="refresh" content="0;url=./admin.php?action=product"/>';
            }
        } else {
            echo '<script> alert("Import dữ liệu thất bại !!!!")</script>';
        }

        break;
}
