<?php 
    // kết nối cơ sở dưz liệu 
    include'Models/DatabaseModel.php';
    $database = new Database();
    $db = $database->connect();
    // kết nối user
    include'Models/UserModel.php'; 
    $user = new User($db);

    $err = [];

    // thêm tài khoản 
    if(isset($_POST['addUser'])) {
        $user_name = $_POST['user_name'];
        $user_pw = $_POST['user_pw'];
        $pw = $_POST['pw'];
        $user_phone = $_POST['user_phone'];
        $user_email = $_POST['user_email'];
        $user_img = $_FILES['user_img']['name'];
        $agree = $_POST['agree'];
        $isadmin = 1;

        $check_username = $user->seahUserName($user_name);
        $check_userphone = $user->seahUserPhone($user_phone);
        $check_useremail = $user->seahUserEmail($user_email);

        // vadidate 
        if(empty($_POST['user_name'])) {
            $err['user_name'] = 'Vui lòng nhập tên';
        }else if($check_username == 1) {
            $err['check_name'] = 'Tài khoản đã tồn tại ';
        }

        if(empty($_POST['user_pw'])) {
            $err['user_pw'] = 'Vui lòng nhập mật khẩu';
        }
        if(empty($_POST['pw'])) {
            $err['pw'] = 'Vui lòng nhập lại mật khẩu';
        }else if($_POST['pw'] != $_POST['user_pw']) {
            $err['notpw'] = 'Mật khẩu không trùng khớp ';
        }
        if(empty($_POST['user_phone'])) {
            $err['user_phone'] = 'Vui lòng nhập số điện thoại';
        }else if($check_userphone == 1) {
            $err['check_phone'] = 'Số điện thoại đã được đăng ký ';
        }
        if(empty($_POST['user_email'])) {
            $err['user_email'] = 'Vui lòng nhập email';
        }else if($check_useremail == 1) {
            $err['check_email'] = 'Email đã được đăng ký ';
        }
        if(empty($_POST['agree'])) {
            $err['agree'] = 'Bạn chưa đồng ý với điều khoản của trang web';
        }
        if(empty($_FILES['user_img']['name'])) {
            $err['user_img'] = 'bạn hãy chọn một ảnh làm ảnh đại diện';
        }


        if(empty($err)) {
            if($_FILES['user_img']['name']!= "" && $_FILES['user_img']['error']==0) {
                $target_dir = "public/Imgs/user/";
                $target_file = $target_dir . basename($_FILES["user_img"]["name"]);
        
                move_uploaded_file($_FILES['user_img']['tmp_name'], $target_file);
        
                $user->add_User($user_name, $user_email, $user_pw, $user_img, $user_phone, $isadmin);
                echo '<script>hienthanhcong();</script>';
                echo '<script>window.location.href = "index.php?act=dangnhap";</script>';
            }
        }
       
    }




   

?>