 <!-- Header -->
<!-- css header -->
<?php include_once'Controllers/Components/HeaderController.php' ?>
 <style>
    <?php include'public/Css/Components/header.css'; ?> 
 </style>
  <div id="loading" class="loading">Loading...</div>
 <header>
        <div class="header">
           <div class="header-row">
                <!-- tên shop và tìm kiểm  -->
                <div class="header-row-1">
                    <div class="header-logo">
                        <a href="index.php?act="><i class="fa-solid fa-microchip"></i>Do_ngyShop</a>
                    </div>
                    <div class="header-form">
                        <form action="" method="post">
                            <input type="text" placeholder="Tìm kiếm tại đây....">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <!-- đăng nhập và giỏ hàng -->
                <div class="header-row-2">
                    <div class="header-login">
                        <a href="#">
                            <i class="fa-solid fa-circle-question"></i>
                            Q&A
                        </a>
                        <a href="index.php?isadmin=<?php echo(isset($_SESSION['isadmin'])?$_SESSION['isadmin']: 3) ?>">
                            <i class="fa-solid fa-user"></i>
                            Tài Khoản Của tôi
                        </a>
                    </div>

                    <div class="header-cart">
                        <a href="index.php?giohangcheck"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
                    </div>

                    <div id="thongbao-giohang"><?php echo(isset($_SESSION['countCart'])?$_SESSION['countCart']:'') ?></div>
                </div>
           </div>
        </div>
    </header>
<!-- menu đứng bên dưới header -->
    <div class="menutops">
        <div class="menutop">
            <!-- các item -->
            <a href="index.php?act=dienthoai">
                <i class="fa-solid fa-mobile-screen-button"></i>  ĐIỆN THOẠI
            </a>    
            <a href="index.php?act=laptop">
                <i class="fa-solid fa-laptop"></i>  LAPTOP
            </a>    
            <a href="#">
                <i class="fa-solid fa-tablet"></i>  MÁY TÍNH BẢNG
            </a>    
            <a href="#">
                <i class="fa-solid fa-tv"></i>  TV
            </a>    
            <a href="#">
                <i class="fa-solid fa-desktop"></i>  PC&PHỤ LINH KIỆN
            </a>    
            <a href="#">
                <i class="fa-solid fa-headphones-simple"></i>  PHỤ KIỆN
            </a>    
            <a href="#">
                <i class="fa-solid fa-kitchen-set"></i> HÀNG GIA DỤNG
            </a>   
            
            <a href="#">
                <i class="fa-regular fa-newspaper"></i> BẢNG TIN MỚI 
            </a>
           
        </div>
    </div>

    <div id="thanhcong">
            <i class="fa-regular fa-circle-check fa-bounce"></i>
            <h3>Thành công</h3>
    </div>
    <script>
        <?php include'public/Js/footer/header.js' ?>
    </script>
   