<?php 
     // kết nối cơ sở dưz liệu 
     include'Models/DatabaseModel.php';
     $database = new Database();
     $db = $database->connect();
     // kết nối user
     include'Models/UserModel.php'; 
     $user = new User($db);
 
     $err = [];

     // đăng nhập 
     if(isset($_POST['login'])) {
          $user_name = $_POST['user_name'];
          $user_pw = $_POST['user_pw'];

          
          // validate form đăng nhập 
          if(empty($_POST['user_name'])) {
               $err['user_name'] = 'Vui lòng nhập mật khẩu';
          }
          if(empty($_POST['user_pw'])) {
               $err['user_pw'] = 'Vui lòng nhập mật khẩu';
          }

          // thực hiện đăng nhập nếu đúng điều kiện 
          if(empty($err['user_name']) && empty($err['user_pw'])) {
                //check xem tài khoản tồn tại hay không
                $checkName = $user->seahUserName($user_name);
                if($checkName == 1) {
                    // nếu như tài khoản tồn tại 
                    // ta check xem mật khẩu có đúng không
                    $checkPw = $user->seahPw($user_name);
                    if($checkPw['user_pw'] == $user_pw) {
                              $_SESSION['user_name']= $checkPw['user_name'];
                              $_SESSION['user_id']= $checkPw['user_id'];
                              $_SESSION['isadmin']= $checkPw['isadmin'];
                              $_SESSION['user_img']= $checkPw['user_img'];
                              $_SESSION['user_email']= $checkPw['user_email'];
                              $_SESSION['user_phone']= $checkPw['user_phone'];
                              echo '<script>hienthanhcong();</script>';
                              echo '<script>window.location.href = "index.php?act=&user_id='.$checkPw['user_name'].'";</script>';
                             
                    }else{
                         $err['check_pw']= 'Mật khẩu sai';
                    }
                }else{
                    $err['check_name'] = 'Tài khoản không tồn tại';
                }
          }

     }

   
    


?>