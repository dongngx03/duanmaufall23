<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối product
     include'Models/ProductModel.php';
     $product = new Product($db);
     //kết nối với cart
     include'Models/CartModel.php';
     $cart = new Cart($db);
     // lấy dữ liệu sản phẩm 
    //  $product->realProductandtype();

    $mess = [];
    // chứa thông báo

    // chekc xem nguoif dùng có đồ gì trong giỏ hàng hay chưa 
    $check =  $cart->checkCart($_SESSION['user_id']);
    // lấy giữu liệu giỏ hàng 
    if($check == 0) {
        $mess['empty'] = "Bạn chưa có đồ vật nào bên trong giỏ hàng , hãy thêm đồ mà bạn yêu thích <3 <i class='fa-solid fa-person-walking-luggage'></i> ";
    }else{
        $data = $cart->readCart($_SESSION['user_id']);
    }

    
    // xóa giỏ hàng giựa vào checkbox
    if(isset($_POST['deleteCart'])) {
        // người checkboc dc chọn thì mới tạo biến chứa những input đươc chọn
        if(!empty($_POST['cart'])) {
            $cart1 = $_POST['cart'];
            
            foreach($data as $value) {
                if(in_array($value['cart_id'],$cart1)) {
                    // xóa sản phẩm được chọn
                    $cart->deleteCart($value['cart_id']);
                    echo '<script>hienthanhcong();</script>';
                    echo "<script>window.location.href='index.php?act=giohang'</script>";
                }
            }
        }else{
            $mess['delete_cart'] = 'Bạn chưa chọn sản phẩm nào';
        }

    }

    
    // nếu người dùng ấn vào mua ngay thì sẽ chyển đến trang xác nhận thanh toán 
    
?>