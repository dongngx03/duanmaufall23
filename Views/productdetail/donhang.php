<?php include'Controllers/product/DonhangController.php' ?>
<style>
    <?php include'public/Css/product/donhang.css' ?>
</style>

<div class="donhang">
    <div class="donhang-title">
        <h2>Tiến trình đơn hàng <i class="fa-solid fa-clock-rotate-left"></i></h2>
    </div>

    <div class="donhang-nav">
        <div class="nav-choxacnhan">
            <a href="index.php?act=donhang">Chờ xác nhận </a>
        </div>
        <div class="nav-danggiao">
            <a href="index.php?act=donhangdanggiao">Đang giao hàng</a>
        </div>
        <div class="nav-dahuy">
            <a href="index.php?act=donhangdahuy">Đã hủy</a>
        </div>
        <div class="nav-thanhcong">
            <a href="index.php?act=donhangthanhcong">Thành Công</a>
        </div>
    </div>

    <div class="donhang-main">
        <table id="table">
           <tr>
                <th>Mã đơn</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>địa thỉ</th>
                <th>Số điện thoại</th>
                <th>Thao tác</th>
           </tr>
           <?php if($choxacnhan!= "")foreach($choxacnhan as $value): ?>
           <tr>
                <td><?php echo $value['order_id'] ?></td>
                <td>
                    <img class="donhang-main-img" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh sản phẩm ">
                    <p><?php echo $value['product_name'] ?></p>
                </td>
                <td><?php echo $value['order_quantity'] ?> chiếc</td>    
                <td><?php echo number_format($value['order_quantity'] * $value['product_price']) ?>đ</td>
                <td>
                    <p><?php echo $value['order_xa'].'-'.$value['order_huyen'].'-'.$value['order_tinh'] ?></p>
                    <p>(<?php echo $value['order_diatrict'] ?>)</p>
                </td>
                <td><?php echo $value['user_phone'] ?></td>
                <td>
                    <a href="index.php?act=donhang&huydon=<?php echo $value['order_id'] ?>" class="btn btn-danger">Hủy đơn hàng</a>
                </td>
           </tr>
           <?php endforeach; ?>
        </table>
        <div>
            <h2 id="mess" class="text-center text-danger "><?php echo(isset($mess['choxacnhan'])?$mess['choxacnhan']:'') ?>  <i class="fa-solid fa-face-grin-beam-sweat fa-bounce"></i></h2>
        </div>
    </div>
</div>
