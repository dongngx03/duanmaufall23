<!-- quen mk -->
<!-- css -->
<?php include_once'Controllers/login/QuenmkController.php' ?>
<style>
    <?php include'public/Css/login/quenmatkhau.css' ?>
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
                    <input type="email" name="user_email" placeholder="Vui lòng nhập email *" value="<?php echo(isset($_POST['user_email'])? $_POST['user_email']: '') ?>">
                    <span><?php
                     echo(isset($err['user_email'])? $err['user_email']: '');
                     echo(isset($err['check_email'])? $err['check_email']: '') 
                     ?></span>
                 </div>
                 <!-- pw -->
                 <div class="item">
                    <?php
                        if(empty($data)) {
                            echo " <span>...</span>";
                        }else{
                            foreach($data as $value) {
                                echo "<span> Mật khẩu của bạn là : ".$value['user_pw']."</span>";
                            }
                        }
                    ?>
                 </div>
                 <!-- submit -->
                 <button type="submit" name="quenmk">Tìm kiếm</button>
             </form>
             <!-- lựa chọn khác -->
             <div class="list">
                 <p>Bạn đã có tài khoản ?</p>
                 <a href="index.php?act=dangnhap">Đăng Nhập</a>|
                 <a href="index.php?act=dangky">Đăng ký</a>
             </div>
           </div>
        </div>
    </div>