<?php include'Controllers/product/giohangController.php' ?>
<style>
    <?php include'public/Css/product/giohang.css' ?>
</style>

<div class="giohang">

    <div class="giohang-title">
        <table>
            <tr>
                <th>Chọn</th>
                <th>Sản phẩm</th>
                <th>Loại</th>
                <th>Đơn giá </th>
                <th>Số lượng còn</th>
                <th>Thương hiệu</th>
                <th>Thao tác</th>
            </tr>
        </table>
    </div>

    <?php if(!empty($data))foreach($data as $value): ?>
   
    <div class="giohang-sanpham">
        <table>
        <?php echo '<form action="" method="post">' ?>
            <tr class="gh-sp-sp">
                <td><input type="checkbox" name="cart[]" value="<?php echo $value['cart_id'] ?>"></td>
                <td>
                    <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
                </td>
                <td><?php echo $value['type_name'] ?></td>
                <td>
                    <span id="giatien"><?php echo number_format($value['product_price']) ?>đ</span>
                    <span><del><?php echo number_format($value['product_price'] + $value['product_discount']) ?>đ</del></span>
                </td>
                <td>
                    <span><?php echo $value['product_quantity'] ?></span>
                </td>
                <td>
                <span><?php echo $value['product_brand'] ?></span>
                </td>
                <td>
                    <a href="index.php?act=xacnhan&idsp=<?php echo $value['product_id'] ?>" class="btn btn-primary">Mua ngay</a>
                </td>
            </tr>
            <tr class="gh-sp-name">
                <td> Tên SP </td>
                <td colspan="6"><?php echo $value['product_name'] ?></td>
            </tr>
        </table>
       
    </div>
    <?php endforeach; ?>
    <div class="giohang-chucnangkhac">
        <h4 class="giohang-thongbao"><?php 
            echo(isset($mess['empty'])? $mess['empty']: "");
            echo(isset($mess['delete_cart'])?$mess['delete_cart']:'')
        ?></h4>
        <button class="btn btn-danger" name="deleteCart">Xóa</button>
        <a href="index.php?act=" class="btn btn-primary">Quay Lại Trang chủ</a>
    </div>
    <?php echo'</form>' ?>
</div>

<script>
    <?php include'public/Js/product/giohang.js' ?>
</script>

