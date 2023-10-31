<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
    //  kết nối bảng TYPE
     include'Models/ProducttypeModel.php';
     $type = new Producttype($db);
     // lấy dữ liệu hết của bảng type 
     $loai = $type->readType();
     // gán $get['issp] thành $product_id;
     if(isset($_GET['idsp'])) {
        $product_id = $_GET['idsp'];
        // lấy dữ liệu sản phẩm 
        $data = $product->readProductID($product_id);
     }
     // lấy giá trị ảnh cũ để nếu khách hàng không thay đổi ảnh 
     $img = $product->readImgProductID($product_id);
     $err = [];
     // cập nhật dữ liệu hàng 
     if(isset($_POST['updateProduct'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_img = $_FILES['product_img']['name'];
        $product_desc = $_POST['product_desc'];
        $product_discount = $_POST['product_discount'];
        $product_quantity = $_POST['product_quantity'];
        $type_id = $_POST['type_id'];
        // validate
        if(empty($_POST['product_name'])) {
            $err['product_name'] = 'Vui lòng nhập đầy đủ tên sản phẩm ';
        }
        if(empty($_POST['product_price'])) {
            $err['product_price'] = 'Vui lòng nhập đầy đủ giá sản phẩm ';
        }
        if(empty($_POST['product_desc'])) {
            $err['product_desc'] = 'Vui lòng nhập đầy đủ mô tả sản phẩm ';
        }
        if(empty($_POST['product_discount'])) {
            $err['product_discount'] = 'Vui lòng nhập đầy đủ giảm giá sản phẩm ';
        }
        if(empty($_POST['product_quantity'])) {
            $err['product_quantity'] = 'Vui lòng nhập đầy đủ số lượng sản phẩm ';
        }

        if(empty($err)) {
            if($_FILES['product_img']['name']!= '' && $_FILES['product_img']['error']== 0) {
                $target_dir = "public/Imgs/product/";
                $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
                move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file);
                $product->updateProductID($product_id,$product_name,$product_price, $product_img, $product_desc, $product_discount,$product_quantity,$type_id);
                echo "<script>hien();</script>";
            }else{
                // trường hợp này là khi người dùng không chọn ảnh 
                $product->updateProductID($product_id,$product_name,$product_price, $img['product_img'], $product_desc, $product_discount,$product_quantity,$type_id);
                echo "<script>hien();</script>";
            }   
        }

     }

?>