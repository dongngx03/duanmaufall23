<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
     // kết nối với comment
     include'Models/CommentModel.php';
     $comment = new Comment($db);
     //kết nối với cart
     include'Models/CartModel.php';
     $cart = new Cart($db);
     // kết nối với repcomment
     include'Models/RepcommentModel.php';
     $rep = new Repcomment($db);
     // id của sản phẩm 
     $product_id = $_SESSION['product_id'];
     // đọc dữ liệu 
     $data = $product->readProductID($product_id);
     $err = [];
     $dataCmt = $comment->readAllCmt($product_id);

     // thêm comment 
          if(isset($_POST['addCmt'])) {
              if($_SESSION['user_id'] != null) {
                    $cmt_text = $_POST['cmt_text'];
                    if(empty($_POST['cmt_text'])) {
                         $err['cmt_text'] = "bạn chưa nhập bình luận";
                    }
          
                    if(empty($err)) {
                         $comment->addCMT($cmt_text, $_SESSION['user_id'], $product_id);
                         echo '<script>hienthanhcong();</script>';
                         echo "<script>window.location.href='index.php?act=chitietsanpham'</script>";
                    }
              }else{
               echo "<script>window.location.href='index.php?act=dangnhap'</script>";
              }
     
          }

          // thêm vào giỏ hàng :
          if(isset($_POST['addcart'])) {
               if(!empty($_SESSION['user_id'])) {
                    $cart->addCart($_SESSION['user_id'], $product_id);
                    echo '<script>hienthanhcong();</script>';
               }
               else{
                    echo "<script>window.location.href='index.php?act=dangnhap'</script>";
               }
          }

          // nếu như ấn mua hàng thì sẽ đi đến trang xác nhận 
          if(isset($_POST['buynow'])) {
               if(!empty($_SESSION['user_id'])) {
                    echo "<script>window.location.href='index.php?act=xacnhan'</script>";
               }
               else{
                    echo "<script>window.location.href='index.php?act=dangnhap'</script>";
               }
              
          }
          // trả lời cmt 
          if(isset($_POST['repcmt'])) {
               if(!empty($_SESSION['user_id'])) {
                   $user_id = $_POST['user_id'];
                   $cmt_id = $_POST['cmt_id'];
                   $rep_text = $_POST['rep_text'];
                    if(empty($rep_text)) {
                         $err['rep_text'] = "Bạn chưa nhập caai trả lời ";
                    }
                    if(empty($err['rep_text'])) {
                         $rep->addRep($rep_text,$cmt_id, $user_id);
                         echo '<script>hienthanhcong();</script>';
                         echo "<script>window.location.href='index.php?act=chitietsanpham'</script>";
                    }
               }
               else{
                    echo "<script>window.location.href='index.php?act=dangnhap'</script>";
               }
          }

          // xóa cmt mà mình muốn (chỉ xóa được cmt của chính mình chứ không xóa dc cmt của người khác ) 
          if(isset($_GET['cmt_id'])) {
               // xóa 
               $comment->deleteCmt($_GET['cmt_id']);
               echo '<script>hienthanhcong();</script>';
          }
          // xóa câu trả lời 
          if(isset($_GET['rep_id'])) {
               // xóa rep cmt
               $rep->deleteRep($_GET['rep_id']);
               echo '<script>hienthanhcong();</script>';
          }
     

     // đếm xem một sản phẩm có bao nhiêu bình luận 
     $countdata = $comment->countCmt($product_id);

          
?>