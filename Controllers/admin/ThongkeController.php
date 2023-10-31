<?php
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);

     // kết nối với bảng user
     include'Models/UserModel.php';
     $user = new User($db);

     // kết nối với bảng order
     include'Models/OrderModel.php';
     $order = new Order($db);

     // lấy dữ liệu thống kê 
     $data = $product->thongKe();
    // sản phẩm nhiều lượt thêm vào giỏ hàng 
     $topcart = $product->countTopCart();

     // được giữ liệu tất cả sản phẩm 
     $dataProductAll = $product->readProduct();

     // sản phẩm được mua nhiều nhất 
     $dataBuy = $product->countBuy();

     // khách hàng đặt mau nhiều nhất 
     $userBuy = $product->countUserBuy();

     // tất cả dữ liệu khách hàng 
     $dataUsser = $user->readUsser();

     // đếm xem có hàng nào đang giao 
     $danggiao = $order->countOrder(3);
     // đơn đã hủy 
     $dahuy = $order->countOrder(2);
     // thành công 
     $thanhcong = $order->countOrder(4);
     // đợi xac nhận 
     $xacnhan = $order->countOrder(1);


?>