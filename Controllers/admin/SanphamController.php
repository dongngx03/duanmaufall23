<?php 
      // kết nối cơ sở dưz liệu 
      include'Models/DatabaseModel.php';
      $database = new Database();
      $db = $database->connect();
      // kết nối product
      include'Models/ProductModel.php';
      $product = new Product($db);

      // đọc dữ liệu 
      $data = $product->readProduct();
      
      // msngr chứa lỗi 
      $err = [];
      // xóa sản phẩm theo input chọn
      if(isset($_POST['delete'])) {
            // gán mảng lưu nhwungx input vào biến mới 
            if(!empty($_POST['product'])) {
                  $selectProduct = $_POST['product'];
            }
            if(!empty($selectProduct)) {
                   // kiểm tra dữ liệu xem cho trùng khớp hay không 
                  foreach($data as $value) {
                        if(in_array($value['product_id'],$selectProduct)) {
                              $product->deleteProduct($value['product_id']);
                              echo "<script>hien();</script>";
                              echo "<script>window.location.href='index.php?admin=sanpham'</script>";
                        }
                  }
            }else{
                  $err['delete'] = 'bạn chưa chọn sản phẩm nào để xóa';
            }
           
            
      }

      // bỏ chọn 
      if(isset($_POST['bochon'])) {
            $_POST['product'] = "";
            echo "<script>window.location.href='index.php?admin=sanpham'</script>";
      }
      
?>