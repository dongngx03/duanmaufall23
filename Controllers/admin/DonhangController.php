<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối với order
     include'Models/OrderModel.php';
     $order = new Order($db);

     // lấy hết dữ liệu từ đơn hàng trong bảng order
     $data = $order->realAllOrder();

     if(isset($_GET['huy'])) {
        $order->statusTransition($_GET['huy'], 2);
        echo '<script>window.location.href = "index.php?admin=donhang"</script>';
     }
     if(isset($_GET['chapnhan'])) {
        $order->statusTransition($_GET['chapnhan'], 3);
        echo '<script>window.location.href = "index.php?admin=donhang"</script>';
     }
?>
