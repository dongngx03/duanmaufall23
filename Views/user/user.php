<!-- admin -->
<!-- css -->
<?php include_once'Controllers/user/UserController.php'?>
<style>
    <?php include_once'public/Css/user/user.css' ?>
</style>
<div class="user">
        <div class="user-container">
            <div class="user-nav">
                <div class="user-nav-infor">
                    <img src="public/Imgs/user/<?php echo $_SESSION['user_img'] ?>" alt="">
                    <div class="infor-name">
                        <span><?php echo $_SESSION['user_name'] ?></span>
                        <span><i class="fa-solid fa-pencil"></i>Sửa hồ sơ</span>
                    </div>
                </div>

                <ul>
                    <li><a href="index.php?act=giohang"><i class="fa-solid fa-cart-shopping"></i>  Giỏ hàng</a></li>
                    <li><a href="index.php?act=donhang"><i class="fa-solid fa-truck-fast"></i>  Đơn mua</a></li>
                    <li><a href="index.php?act=logout"><i class="fa-solid fa-right-from-bracket"></i> Đăng xuất </a></li>
                </ul>
            </div>

            <div class="user-right">
                <div class="user-right-top">
                    <span>Hồ Sơ Của Tôi</span>
                    <span> Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
                </div>
                <div class="user-right-bot">
                    <div class="user-right-bot-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="user-form-item">
                                <label for="">Tên Đăng nhập</label>
                                <input type="text" name="user_name" 
                                value="<?php 
                                    if(!empty($data)) {
                                        foreach($data as $value) {
                                            echo $value['user_name'];
                                        }
                                    } 
                                ?>">
                            </div>
                            <span>tên tài khoản không thể thay đổi </span>
                            <div class="user-form-item">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="user_pw"
                                value="<?php 
                                    if(!empty($data)) {
                                        foreach($data as $value) {
                                            echo $value['user_pw'];
                                        }
                                    }
                                ?>">
                                
                            </div>
                            <span><?php echo(isset($err['user_pw'])? $err['user_pw']: '') ?></span>
                            <div class="user-form-item">
                                <label for="">Email</label>
                                <input type="email" name="user_email"
                                value="<?php 
                                    if(!empty($data)) {
                                        foreach($data as $value) {
                                            echo $value['user_email'];
                                        }
                                    }
                                ?>">
                                
                            </div>
                            <span><?php echo(isset($err['user_email'])? $err['user_email']: '') ?></span>
                            <div class="user-form-item">
                                <label for="">số điện thoại</label>
                                <input type="number" name="user_phone"
                                value="<?php 
                                    if(!empty($data)) {
                                        foreach($data as $value) {
                                            echo $value['user_phone'];
                                        }
                                    }
                                ?>">
                                
                            </div>
                            <span><?php echo(isset($err['user_phone'])? $err['user_phone']: '') ?></span>
                            <div class="user-form-item">
                                <label for="">Ảnh </label>
                                <input type="file" name="user_img">
                            </div>

                            
                            <button type="submit" name="capnhat">Cập nhật</button>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>