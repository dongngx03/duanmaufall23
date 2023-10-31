<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sanpham.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<style>
    <?php include'public/Css/admin/quantriheader.css' ?>
</style>
<body>
    <div class="quantri-header">
        <div class="quantri-header1">
           <span>Do_ngyShop |</span> <span> QUẢN TRỊ </span>
        </div>

        <div class="quantri-header-nav">
            <ul>
                <li><a href="index.php?act="><i class="fa-solid fa-house"></i>  Trang chủ</a></li>
                <li><a href="index.php?admin=sanpham"><i class="fa-solid fa-cart-shopping"></i> Sản phẩm </a></li>
                <!-- trong mục này chứa : thêm sản phẩm ; danh sách sản phẩm ; xóa sản phẩm ; sủa sản phẩm  -->
                <li><a href="index.php?admin=taikhoan"><i class="fa-solid fa-user"></i> Tài khoản </a></li>
                <!-- trong này chứa : danh sách tài khoản , thông tin khách hàng ..... -->
                <li><a href="index.php?admin=binhluan"><i class="fa-solid fa-comment"></i> Bình luận </a></li>
                <!-- trong này chứa danh sách bình luận, xóa bình luận -->
                <li><a href="index.php?admin=thongke"><i class="fa-solid fa-list-check"></i> Thống kê</a></li>
                <!-- trong này chứa : top sản phẩm số lượng nhiểu nhất , sản phẩm sắt nhất, sơ đồ  -->
                <li><a href="index.php?admin=donhang"><i class="fa-solid fa-money-check-dollar"></i> Đơn hàng</a></li>
                <!-- trong này chứa : đơn hàng của khách hàng , -->
                <li><a href="#"><i class="fa-solid fa-newspaper"></i> Tin tức</a></li>
                <!-- trong này chứa : tin tức , thêm sửa , xóa  -->
            </ul>
        </div>
    </div>
    <div id="thanhcong">
            <i class="fa-regular fa-circle-check fa-bounce"></i>
            <h3>Thành công</h3>
    </div>

    <script>
         // hiện thành công khi xóa và thêm sản phẩm 
         const thanhcong = document.getElementById('thanhcong');

         function hien() {
            thanhcong.style.visibility = 'unset';
         }
         function an() {
            thanhcong.style.visibility = 'hidden';
         }

         setInterval(an, 2500)
    </script>
