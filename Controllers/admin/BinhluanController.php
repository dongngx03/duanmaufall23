<?php
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối với bình luận model
     include'Models/CommentModel.php';
     $cmt = new Comment($db);
     
     // đọc tất cả các comment trong của sản phẩm
     $data = $cmt->readAll();

     // xóa bình luận mình muốn 
     if(isset($_GET['cmt_id'])) {
          // xóa 
          $cmt->deleteCmt($_GET['cmt_id']);
          echo "<script>hien();</script>";
          echo "<script>window.location.href='index.php?admin=binhluan'</script>";
     }
    
?>