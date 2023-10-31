<!-- admin -->
<!-- css -->

<style>
    <?php include_once'public/Css/user/admin.css' ?>
</style>
<div class="user">
        <div class="user-container">
            <div class="user-nav">
                <div class="user-nav-infor">
                    <img src="public/Imgs/user/<?php echo $_SESSION['user_img']?>" alt="">
                    <div class="infor-name">
                        <span><?php echo $_SESSION['user_name'] ?></span>
                        <span><i class="fa-solid fa-pencil"></i>Sửa hồ sơ</span>
                    </div>
                </div>

                <ul>
                    <li><a href="index.php?admin=sanpham"><i class="fa-solid fa-screwdriver-wrench"></i>  Trang Admin</a></li>
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
                        <!-- <form action="" method="post">
                            <div class="user-form-item">
                                <label for="">Tên Đăng nhập</label>
                                <input type="text" name="">
                            </div>
                            <span></span>
                            <div class="user-form-item">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="">
                            </div>
                            <span></span>
                            <div class="user-form-item">
                                <label for="">Email</label>
                                <input type="email" name="">
                            </div>
                            <span></span>
                            <div class="user-form-item">
                                <label for="">số điện thoại</label>
                                <input type="number" name="">
                            </div>
                            <span></span>
                            <div class="user-form-item">
                                <label for="">Ảnh </label>
                                <input type="file" name="">
                            </div>

                            
                            <button type="submit" name="dong">Cập nhật</button>
                        </form> -->

                       <h2>
                         Vì sự an toàn về trang web nên chỉ có Root mới có thể đổi thông tin tài khoản admin
                         bạn Thông cảm !!!

                       </h2>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>