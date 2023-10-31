<?php 
      // kết nối cơ sở dưz liệu 
      include'Models/DatabaseModel.php';
      $database = new Database();
      $db = $database->connect();
      // kết nối product
      include'Models/ProductModel.php';
      $product = new Product($db);
      // kết nối với comment

      // lấy dữ liệu nguyên sản phẩm là điện thoại 
      $data = $product->readLaptop();
?>