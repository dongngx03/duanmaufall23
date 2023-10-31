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

     $err = [];
     // thêm sản phẩm 
     if(isset($_POST['addProduct'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_img = $_FILES['product_img']['name'];
        $product_desc = $_POST['product_desc'];
        $product_discount = $_POST['product_discount'];
        $product_quantity = $_POST['product_quantity'];
        $product_brand = $_POST['product_brand'];
        $type_id = $_POST['type_id'];
        
        if(empty($_POST['product_name'])) {
            $err['product_name'] = 'Vui lòng nhập tên sản phẩm';
        }
        if(empty($_POST['product_price'])) {
            $err['product_price'] = 'Vui lòng nhập giá sản phẩm';
        }
        if(empty($_POST['product_desc'])) {
            $err['product_desc'] = 'Vui lòng nhập mô tả ';
        }
        if(empty($_POST['product_discount'])) {
            $err['product_discount'] = 'Vui lòng nhập giảm giá ';
        }
        if(empty($_POST['product_quantity'])) {
            $err['product_quantity'] = 'Vui lòng nhập số lượng ';
        }
        if(empty($_POST['product_brand'])) {
            $err['product_brand'] = 'Vui lòng nhập thương hiệu ';
        }

        if(empty($err)) {
            if($_FILES['product_img']['name']!= "" && $_FILES['product_img']['error'] == 0) {
                $target_dir = "public/Imgs/product/";
                $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
        
                move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file);

                $product->addProduct($product_name,$product_price,$product_img,$product_discount,$product_desc,$product_quantity,$product_brand,$type_id);
                echo "<script>hien();</script>";
                
            }
        }
     }



?>