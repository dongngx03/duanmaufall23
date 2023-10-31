 <!-- điện thoại  -->
 <!-- css -->
 <?php include'Controllers/product/LaptopController.php' ?>
 <style>
    <?php include'public/Css/product/laptop.css' ?>
 </style>
     <div class="dienthoai-banner">
                <a href="#"><img src="public/Imgs/banner/bannerbrand1.png" alt=""></a>
     </div>
  <!-- điện thoại  -->
  <div class="dienthoai">
        <!-- list nav  -->
        <div class="dienthoai-navlist">
            <span> Mức giá </span>
            <ul>
                <li><input id="lv1" onclick="checkLv1()" type="checkbox" name="lv1"><label for="lv1">Dưới 3 triệu</label></li>
                <li><input id="lv2" onclick="checkLv2()" type="checkbox" name="lv2"><label for="lv2">Từ 3 - 5 triệu</label></li>
                <li><input id="lv3" onclick="checkLv3()" type="checkbox" name="lv3"><label for="lv3">Từ 5 - 10 triệu</label></li>
                <li><input id="lv4" onclick="checkLv4()" type="checkbox" name="lv4"><label for="lv4">Từ 10 - 15 triệu</label></li>
                <li><input id="lv5" onclick="checkLv5()" type="checkbox" name="lv5"><label for="lv5">Trên 15 triệu </label></li>
                <li><input id="lv6" onclick="checkLv6()" type="checkbox" name="lv6"><label for="lv6">Tất cả sản phẩm</label></li>
            </ul>
        </div>

        <!-- product -->
        <div class="dienthoai-product">
            <!-- sản phẩm  -->
            <?php foreach($data as $value): ?>
            <a href="index.php?id=<?php echo $value['product_id'] ?>" class="dienthoai-new-product">
                <!-- ảnh sản phẩm -->
                <div class="dienthoai-product-img">
                    <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh sản phẩm">
                </div>
                <!-- Tên sản phẩm -->
                <span class="dienthoai-product-name">
                    [SP<?php echo $value['product_id'] ?>] <?php echo $value['product_name']  ?>
                </span>
                <div class="dienthoai-product-price">
                    <span class="dienthoai-price"><?php echo number_format($value['product_price'])?> đ</span>
                    <input class="dienthoai-price1" type="hidden" value="<?php echo $value['product_price'] ?>">
                    <div class="dienthoai-soluong">
                        <span>số lượng: <?php echo $value['product_quantity'] ?></span>
                    </div>
                </div>

            </a>
            <?php endforeach; ?>
            <!-- sản phẩm  -->
           
        </div>

    </div>
    <script>
        <?php include'public/Js/product/dienthoai.js' ?>
    </script>