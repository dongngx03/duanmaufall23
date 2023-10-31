<?php 

    // phần biệt user hay lf admin 
    if(isset($_GET['isadmin'])) {
        $quantri = intval($_GET['isadmin']);
        if($quantri == 0 ) {
            header('location: index.php?act=admin');
        }else if($quantri == 1){
            header('location: index.php?act=user');
        }else{
            header('location: index.php?act=dangnhap');
        }
    }

    // tự reload lại trang đăng nhập 
    if(isset($_GET['act']) && $_GET['act'] == 'logout') {
        header('refresh: 0.1 url=index.php?act=dangnhap');
    }

    // check xem có giỏ hàng hay không 
    if(isset($_GET['giohangcheck'])) {
        if(!empty($_SESSION['user_id'])) {
            header('location: index.php?act=giohang');
        }else{
            header('location: index.php?act=dangnhap');
        }
    }

    



    
?>