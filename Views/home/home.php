 <!-- section -->
 <!-- css -->
 <?php include_once'Controllers/home/HomeController.php'?>
 <style>
    <?php include'public/Css/home/home.css' ?>
 </style>
 <section>
        <div class="section">
            <div class="section-banner">
                <div class="section-banner-nav">
                    <a href="#">Trang chủ / </a>
                </div>
                <div class="section-banner-text">
                    <marquee>Chào bạn đây là project shop đồ điện tử của Đông chúc bạn có một ngày vui vẻ và hạnh phúc !!</marquee>
                </div>
            </div>
            <div class="section-banner0">
                <a href="#"><img src="public/Imgs/banner/bannerbrand1.png" alt=""></a>
            </div>
            <div class="section-banner1">
                <button onclick="prew()" class="prew"><i class="fa-solid fa-chevron-left"></i></button>
                <button onclick="next()" class="next"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="section-banner1-slideBanner">
                   <div class="slideImg">
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-1.webp" alt=""></a>
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-2.webp" alt=""></a>
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-3.webp" alt=""></a>
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-4.webp" alt=""></a>
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-5.webp" alt=""></a>
                    <a class="slide" href="#"><img src="public/Imgs/banner/banner-6.webp" alt=""></a>
                   </div>
                </div>

                <div class="section-banner1-hot">
                    <a href="#"><img src="public/Imgs/banner/hot-2.webp" alt=""></a>
                    <a href="#"><img src="public/Imgs/banner/hot-6.webp" alt=""></a>
                    <a href="#"><img src="public/Imgs/banner/hot-5.webp" alt=""></a>
                    <a href="#"><img src="public/Imgs/banner/hot-4.webp" alt=""></a>
                    <a href="#"><img src="public/Imgs/banner/hot-3.webp" alt=""></a>
                    <a href="#"><img src="public/Imgs/banner/hot-1.webp" alt=""></a>
                </div>
            </div>

            <div class="section-news">
                <!-- list nav -->
                <div class="section-new-nav">
                    <h4><i class="fa-solid fa-list-ul"></i>  Danh mục sản phẩm</h4>
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-mobile-screen-button"></i>  ĐIỆN THOẠI</a></li>
                        <li><a href="#"><i class="fa-solid fa-laptop"></i>  LAPTOP</a></li>
                        <li><a href="#"><i class="fa-solid fa-tablet"></i>  MÁY TÍNH BẢNG</a></li>
                        <li><a href="#"><i class="fa-solid fa-tv"></i>  TV</a></li>
                        <li><a href="#"><i class="fa-solid fa-desktop"></i>  PC&PHỤ LINH KIỆN</a></li>
                        <li><a href="#"><i class="fa-solid fa-headphones-simple"></i>  PHỤ KIỆN</a></li>
                        <li><a href="#"><i class="fa-solid fa-kitchen-set"></i> HÀNG GIA DỤNG</a></li>
                        <li><a href="#"><i class="fa-solid fa-ellipsis"></i>  KHÁC</a></li>
                    </ul>
                </div>
                <!-- product -->
                
                <div class="section-new-product">
                    <!-- one product -->
                    <?php foreach($data as $value): ?>
                    <a href="index.php?id=<?php echo $value['product_id'] ?>" class="product">
                        <!-- ảnh sản phẩm -->
                        <div class="product-img">
                            <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh sản phẩm">
                        </div>
                        <!-- Tên sản phẩm -->
                        <span class="product-name">
                            [SP<?php echo $value['product_id'] ?>] <?php echo $value['product_name'] ?>
                        </span>
                        <div class="product-price">
                            <span class="price"><?php echo number_format($value['product_price'], 2)  ?>đ</span>
                            <div class="soluong">
                                <span>số lượng: <?php echo $value['product_quantity'] ?></span>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>

                    <!-- hết -->
                    
                </div>
            </div>
            <!-- brand 1 -->
            <div class="section-brand">
                <img src="public/Imgs/banner/bannerbrand.png" alt="">
            </div>

            <!-- brand 2 -->
            <div class="section-brand2">
                <div class="brand2-title">
                    <span>Laptop Bán Chạy </span>
                </div>
                <div class="brand2-laptophot">
                    <?php foreach($laptop as $value): ?>
                    <div class="laptophot-sp">
                        <div class="laptophot-sp-img">
                            <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
                        </div>

                        <div class="laptophot-chitiet">
                            <p class="laptophot-name"><?php echo $value['product_name'] ?></p>
                            <div class="laptophot-price"><?php echo number_format($value['product_price']) ?>đ</div>
                            <span class="laptophot-discount">Giảm từ :<del><?php echo number_format($value['product_price']+$value['product_discount']) ?> đ</del></span>
                        </div>

                        <div class="laptophot-config">
                            <a href="index.php?id=<?php echo $value['product_id'] ?>" class="btn btn-outline-danger">Chi tiết</a>
                            <a href="index.php?addcart=<?php echo $value['product_id'] ?>" class="btn btn-danger">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!--  -->
                   
               
                </div>
            </div>

            <!-- bradn 3 -->
            <div class="section-brand3">
                <img src="public/Imgs/banner/bannerbrand4.png" alt="">
            </div>

             <!-- brand 4 -->
             <div class="section-brand2">
                <div class="brand2-title">
                    <span>Điện thoại Bán Chạy </span>
                </div>
                <div class="brand2-laptophot">
                    <?php foreach($phone as $value): ?>
                    <div class="laptophot-sp">
                        <div class="laptophot-sp-img">
                            <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
                        </div>

                        <div class="laptophot-chitiet">
                            <p class="laptophot-name"><?php echo $value['product_name'] ?></p>
                            <div class="laptophot-price"><?php echo number_format($value['product_price']) ?>đ</div>
                            <span class="laptophot-discount">Giảm từ :<del><?php echo number_format($value['product_price']+$value['product_discount']) ?> đ</del></span>
                        </div>

                        <div class="laptophot-config">
                            <a href="index.php?id=<?php echo $value['product_id'] ?>" class="btn btn-outline-danger">Chi tiết</a>
                            <a href="index.php?addcart=<?php echo $value['product_id'] ?>" class="btn btn-danger">Thêm vào giỏ</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!--  -->
                   
               
                </div>
            </div>

        </div>
    </section>
    <script>
        <?php include'public/Js/home/home.js' ?>
    </script>
