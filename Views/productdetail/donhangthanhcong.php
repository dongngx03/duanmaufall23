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
        <table>
           <tr>
                <th>Mã đơn</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>địa thỉ</th>
                <th>Số điện thoại</th>
                <th>Thao tác</th>
           </tr>
           <tr>
                <td>DH0001</td>
                <td>
                    <img class="donhang-main-img" src="public/Imgs/product/mac1.png" alt="ảnh sản phẩm ">
                    <p>Sản phẩm mac của nhà apple</p>
                </td>
                <td>2 chiếc</td>    
                <td>2.000.000đ</td>
                <td>
                    <p> khu 2 - hoàng cương - thanh ba - phú thọ</p>
                    <p>(đi thắng 500 mét rẽ trái nhà văn hóa )</p>
                </td>
                <td>0999999999</td>
                <td>
                    <a href="#" class="btn btn-danger">Hủy đơn hàng</a>
                </td>
           </tr>
        </table>
    </div>
</div>