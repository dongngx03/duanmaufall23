
<?php include'Controllers/product/XacnhanController.php' ?>
<style>
    <?php include'public/Css/product/xacnhan.css' ?>
</style>
<?php echo '<form action="" method="post">' ?>
<div class="xacnhan">
    <div class="xacnhan-title">
        <h2>Xác Nhận Mua Hàng <i class="fa-solid fa-location-dot"></i></h2>
    </div>
    <div class="xacnhan-thongtin">
        <?php foreach($data as $value): ?>
        <div class="xacnhan-thongtin-sp">
            <div class="xn-img">
                <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
            </div>
            <div class="xn-product">
                <h3 class="xn-product-name">[SP<?php echo $value['product_id'] ?>] <?php echo $value['product_name'] ?></h3>
                <span class="xn-product-price">Giá: <?php echo number_format($value['product_price']) ?>đ</span>
                <span class="xn-product-price-old"> Giá gốc: <del><?php echo number_format($value['product_price'] + $value['product_discount']) ?>đ</del></span>
                <div class="xn-soluong">
                    <a href="#" id="tang">+</a>
                    <input id="soluongmua" type="number" min="1" max="30" value="1" name="order_quantity">
                    <a href="#" id="giam">-</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="xacnhan-thongtin-diatri">
                <h3>Thông tin địa trỉ</h3>
                <label for="">Tỉnh/Thành phố</label>
                <input type="text" id="diatri-tinh" name="order_tinh">
                <span><?php echo(isset($err['order_tinh'])? $err['order_tinh']:'') ?></span>
                <label for="">Huyện/Thị trấn</label>
                <input type="text" id="huyen" name="order_huyen">
                <span><?php echo(isset($err['order_huyen'])? $err['order_huyen']:'') ?></span>
                <label for="">Xã/Phường/Thôn..</label>
                <input type="text" id="xa" name="order_xa">
                <span><?php echo(isset($err['order_xa'])? $err['order_xa']:'') ?></span>
                <label for="">Chi tiết địa trỉ</label>
                <input type="text" id="diatri-chitiet" name="order_diatrict">
                <span><?php echo(isset($err['order_diatrict'])? $err['order_diatrict']:'') ?></span>
        </div>
    </div>

    <div class="xacnhan-muahang">
            <button class="submit" type="submit" name="xacnhan">Xác nhận mua</button>
         
    </div>
   
</div>
<?php echo'</form>' ?>
<script>
    <?php include'public/Js/product/xacnhan.js' ?>
</script>

