<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối user
     include'Models/UserModel.php'; 
     $user = new User($db);

     $err = [];
     // quên mật khẩu 
     if(isset($_POST['quenmk'])) {
        $user_email = $_POST['user_email'];

        // check email 
        $checkemail = $user->seahUserEmail($user_email);
        // validate form 
        if(empty($_POST['user_email'])) {
            $err['user_email']= 'Vui lòng nhập email của bạn ';
        }else if($checkemail == 0) {
            $err['check_email'] = 'không tìm thấy email của bạn ';
        }

        if(empty($err)) {
            $data = $user->readALL_email($user_email);
        }
      
        
     }
?>