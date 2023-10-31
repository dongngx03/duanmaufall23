<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối user
     include'Models/UserModel.php'; 
     $user = new User($db);

     // đọc dữ liệu thông tin cuẩ người dung 
     $data = $user->readALL_email($_SESSION['user_email']);

     $err = [];
    // cập nhật 
     if(isset($_POST['capnhat'])) {
        $user_name = $_POST['user_name'];
        $user_pw = $_POST['user_pw'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user_img = $_FILES['user_img']['name'];

        if(empty($_POST['user_pw'])) {$err['user_pw']='Vui lòng nhập mật khẩu ';}
        if(empty($_POST['user_email'])) {$err['user_email']='Vui lòng nhập email ';}
        if(empty($_POST['user_phone'])) {$err['user_phone']='Vui lòng nhập số điện thoại ';}

        // thực hiện cập nhật 
        if(empty($err)) {
            if($_FILES['user_img']['name']!="" && $_FILES['user_img']['error'] == 0 ) {
                // trường hợp nguwioi dùng thay ảnh mới 
                $target_dir = "public/Imgs/user/";
                $target_file = $target_dir . basename($_FILES["user_img"]["name"]);
        
                move_uploaded_file($_FILES['user_img']['tmp_name'], $target_file);
                $user->updateUser($user_email, $user_pw, $user_img, $user_phone, $user_name);
            }else{
                // trường hợp người dùng không tải ảnh mới lên 
                // thì ta sẽ lấy ảnh cũ để nguyê ncho người dùng khi cập nhật
                $user->updateUser($user_email, $user_pw, $_SESSION['user_img'], $user_phone, $user_name);
            }
        }
       

     }
?>