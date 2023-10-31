<!-- đăng nhập -->
<!-- css -->
<?php include_once'Controllers/login/DangnhapController.php' ?>

<style>
    <?php include'public/Css/login/dangnhap.css' ?>
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
             <form action="" method="post">
                
                 <!-- phone -->
                 <div class="item">
                    <input type="text" name="user_name" placeholder="Tên đăng nhập *" value="<?php echo(isset($_POST['user_name'])?$_POST['user_name']:'') ?>">
                    <span>
                        <?php 
                            echo(isset($err['user_name'])? $err['user_name']:'');
                            echo(isset($err['check_name'])? $err['check_name']:'');
                        ?>
                    </span>
                 </div>
                 <!-- pw -->
                 <div class="item">
                    <input type="password" name="user_pw" placeholder="Mật khẩu *" value="<?php echo(isset($_POST['user_pw'])?$_POST['user_pw']:'') ?>">
                    <span>
                        <?php 
                            echo(isset($err['user_pw'])? $err['user_pw']:'');
                            echo(isset($err['check_pw'])? $err['check_pw']:'');
                        ?>
                    </span>
                 </div>
                 <!-- submit -->
                 <button type="submit" name="login">Đăng nhập</button>
             </form>
             <!-- lựa chọn khác -->
             <div class="list">
                 <p>Bạn chưa có tài khoản ?</p>
                 <a href="index.php?act=dangky">Đăng Ký</a>|
                 <a href="index.php?act=quenmatkhau">Quên mật khẩu</a>
             </div>
           </div>
        </div>
    </div>