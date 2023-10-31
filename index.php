<?php session_start(); ?>
<!-- admin -->
<?php 
    if(isset($_GET['admin']) && $_GET['admin']!= null) {
        $admin = $_GET['admin'];
        include'Views/Components/quantriheader.php';
        switch ($admin) {
            case 'sanpham':
                include'Views/admin/sanpham.php';
                break;
            case 'themmoisp':
                include'Views/admin/themmoisp.php';
                break;
            case 'capnhatsp':
                include'Views/admin/capnhatsp.php';
                break;
            case 'taikhoan':
                include'Views/admin/taikhoan.php';
                break;
            case 'binhluan':
                include'Views/admin/binhluan.php';
                break;
            case 'donhang':
                include'Views/admin/donhang.php';
                break;
            case 'thongke':
                include'Views/admin/thongke.php';
                break;
        }
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php  include'Views/Components/head.php' ?>
</head>
<body>
    <!-- header -->
    <?php  include'Views/Components/header.php' ?>
    <!-- end header -->
    <!-- điều hướng -->
    <?php 
        if(isset($_GET['act']) && $_GET['act']!= null) {
            $act = $_GET['act'];
            switch ($act) {
                case 'dangnhap':
                    include'Views/login/dangnhap.php';
                    break;
                case 'dangky':
                    include'Views/login/dangky.php';
                    break;
                case 'quenmatkhau':
                    include'Views/login/quenmatkhau.php';
                    break;
                case 'dienthoai':
                    include'Views/product/dienthoai.php';
                    break;
                case 'laptop':
                    include'Views/product/laptop.php';
                    break;
                case 'admin':
                    include'Views/user/admin.php';
                    break;
                case 'user':
                    include'Views/user/user.php';
                    break;
                case 'logout':
                    session_destroy();
                    include'Views/login/dangnhap.php';
                    break;
                case 'chitietsanpham':
                    include'Views/productdetail/chitietsanpham.php';
                    break;
                case 'giohang':
                    include'Views/product/giohang.php';
                    break;
                case 'blog':
                    include'Views/blog/blog.php';
                    break;
                case 'xacnhan':
                    include'Views/product/xacnhan.php';
                    break;
                case 'thanhcong':
                    include'Views/product/thanhcong.php';
                    break;
                case 'donhang':
                    include'Views/productdetail/donhang.php';
                    break;
                case 'donhangdahuy':
                    include'Views/productdetail/donhangdahuy.php';
                    break;
                case 'donhangdanggiao':
                    include'Views/productdetail/donhangdanggiao.php';
                    break;
                case 'donhangthanhcong':
                    include'Views/productdetail/donhangthanhcong.php';
                    break;
                

            }
        }else{
            include'Views/home/home.php';
        }
    ?>
   
    <!-- end điều hướng -->
    <!-- footer -->
    <?php include'Views/Components/footer.php' ?>
    <!-- end footer -->
</body>
</html>