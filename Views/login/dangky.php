<!-- controller -->
<!-- dang ký  -->
<!-- css -->
<?php include_once'Controllers/login/DangkyController.php' ?>

<style>
    <?php include_once'public/Css/login/dangky.css' ?>
</style>
<div class="container">
        <div class="box1">
           <img src="public/Imgs/blog/dangnhap4.png" alt="">
        </div>

        <div class="box2">
           <div class="login">
             <!-- tiêu đề  -->
             <h2>Welcome to Do_ngyShop</h2>
             <!-- form -->
             <form action="" method="post" enctype="multipart/form-data">
                 <!-- Full name -->
                 <div class="item">
                    <input type="text" name="user_name" placeholder="Tên đăng nhập *" value="<?php echo(isset($_POST['user_name'])? $_POST['user_name']:'') ?>">
                    <span><?php 
                     echo(isset($err['user_name'])? $err['user_name']:'');
                     echo(isset($err['check_name'])? $err['check_name']:'');

                    ?></span>
                 </div>
                 <!-- phone -->
                 <div class="item">
                    <input type="text" name="user_phone" placeholder="Số điện thoại *" value="<?php echo(isset($_POST['user_phone'])? $_POST['user_phone']:'') ?>">
                    <span><?php
                     echo(isset($err['user_phone'])? $err['user_phone']:'');
                     echo(isset($err['check_phone'])? $err['check_phone']:'') 
                     
                     ?></span>
                 </div>
                 <!-- email -->
                 <div class="item">
                    <input type="email" name="user_email" placeholder="Email  * " value="<?php echo(isset($_POST['user_email'])? $_POST['user_email']:'') ?>">
                    <span><?php 
                     echo(isset($err['user_email'])? $err['user_email']:'');
                     echo(isset($err['check_email'])? $err['check_email']:'')
                    
                    ?></span>
                 </div>
                 <!-- pw -->
                 <div class="item">
                    <input type="password" name="user_pw" placeholder="Mật khẩu *" value="<?php echo(isset($_POST['user_pw'])? $_POST['user_pw']:'') ?>">
                   <span><?php echo(isset($err['user_pw'])? $err['user_pw']:'') ?></span>
                 </div>
                 <!-- confim pw -->
                 <div class="item">
                    <input type="password" name="pw" placeholder="Nhập lại mật khẩu *" value="<?php echo(isset($_POST['pw'])? $_POST['pw']:'') ?>">  
                   <span>
                     <?php 
                        echo(isset($err['pw'])? $err['pw']:'');
                        echo(isset($err['notpw'])? $err['notpw']:'');
                     ?>
                   </span>
                 </div>
                 <!-- img -->
                 <div class="item">
                     <label for="">Ảnh</label><input type="file" name="user_img">
                     <span><?php echo(isset($err['user_img'])? $err['user_img']:'') ?></span>
                 </div>
                 <!-- tôi đồng ý với điều khoản  --> 
                 <div class="item">
                    <div class="checkbox">
                        <input type="checkbox" name="agree"><label for="">Tôi đồng ý với điều khoản của Do_ngyShop</label>
                    </div>
                    <span><?php echo(isset($err['agree'])? $err['agree']:'') ?></span>
                 </div>
                 <!-- submit -->
                 <button type="submit" name="addUser">Đăng ký </button>
             </form>
             <!-- lựa chọn khác -->
             <div class="list">
                 <p>Bạn đã có tài khoản ?</p>
                 <a href="index.php?act=dangnhap">Đăng nhập </a>|
                 <a href="index.php?act=quenmatkhau">Quên mật khẩu</a>
                
             </div>
           </div>
        </div>
    </div>
    

    