<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
     // kết nối với order
     include'Models/OrderModel.php';
     $order = new Order($db);


     // chứa thông báo 
     $mess = [];
     $user_id = $_SESSION['user_id'];
     // lấy dữ liệu đơn hàng dang chờ xác nhận người dùng tại user_id
     $checkchoxacnhan = $order->checkOrderdxn($user_id);
     $choxacnhan = $order->readOrderdxn($user_id);
     if($checkchoxacnhan == 0) {
          $mess['choxacnhan'] = 'Bạn chưa có đơn hàng nào đang chờ được xác nhận cả';
     }
     // hủy đơn hàng 
     if(isset($_GET['huydon'])) {
          $order->cancelOrder($_GET['huydon']);
     }

     // lấy dữ liệu nhưng đơn hàng đã bị huỷ
      // lấy dữ liệu đơn hàng dang chờ xác nhận người dùng tại user_id
      $checkdahuy = $order->checkOrderdh($user_id);
      $dahuy = $order->readOrderdh($user_id);
      if($checkdahuy == 0) {
           $mess['dahuy'] = 'Bạn chưa có đơn hàng nào đã hủy cả';
      }
     // lấy dữ liệu nhưng đơn hàng được chấp nhận
      
      $checkcn = $order->checkOrdercn($user_id);
      $chapnhan = $order->readOrdercn($user_id);
      if($checkcn == 0) {
           $mess['chapnhan'] = 'Bạn chưa có đơn hàng được chấp nhận cả';
      }



?>