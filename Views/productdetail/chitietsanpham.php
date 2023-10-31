<?php include'Controllers/product/ChitietsanphamController.php' ?>
<style>
    <?php include'public/Css/product/chitietsanpham.css' ?>
</style>
<div class="chitiet">
        <?php foreach($data as $value): ?>
         <!-- hộp chi tiết sản phẩm  -->
         <div class="chitietsanphamtop">
                <span class="ctsp-name">
                        [SP<?php echo $value['product_id'] ?>] <?php echo $value['product_name'] ?>
                </span>
         </div>
        <div class="chitietsanpham">
            <!-- ảnh chi tiết sản phẩm  -->
                <div class="ctsp-img">
                    <div class="ctsp-img-box1">
                        <img src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh sản phẩm">
                    </div>
                </div>

            <!-- thông tin chi tiết sản phẩm -->
                <div class="ctsp-thongtin">
                    <span class="ctsp-gia">
                        <?php echo number_format($value['product_price'], 2) ?> đ
                    </span>

                    <span class="ctsp-khuyenmai">
                       Giảm từ : <del><?php echo number_format(intval($value['product_price']+$value['product_discount'])) ?> đ</del>
                    </span>

                    <div class="ctsp-dacbiet">
                        <div class="ctsp-dacbiet-box1">
                            <span>Nhận ngay khuyến mãi đặc biệt</span>
                        </div>
                        <div class="ctsp-dacbiet-box2">
                            <span><i class="fa-solid fa-circle-check"></i>  Giảm ngay 500.000đ</span>
                            <span><i class="fa-solid fa-circle-check"></i>  Mua Sim MobiFone Chất Chơi 1T kèm máy điện thoại giảm ngay 100.000đ, có ngay 5GB data/ ngày</span>
                            <span><i class="fa-solid fa-circle-check"></i>  Thu cũ đổi mới trợ giá ngay đến 2 triệu (SmartExchange)</span>
                            <span><i class="fa-solid fa-circle-check"></i>  Tặng PMH 300,000đ mua máy in Hoặc màn hình LCD</span>
                        </div>
                    </div>
                    <div class="ctsp-mota">
                        <div class="ctsp-mota-tensp">
                            <span>Đánh giá về: <?php echo $value['product_name'] ?></span>
                        </div>
                        <span class="ctsp-mota-noidung"><?php echo $value['product_desc'] ?></span>
                    </div>

                    <form class="ctsp-form" action="" method="post">
                           <a class="ctsp-tragop" href="#">Mua trả góp </a>
                       
                       <div class="ctsp-btn">  
                        <?php echo ' <form action="" method="post">' ?> 
                            <button class="ctsp-themgiohang" type="submit" name="addcart"><i class="fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng </button>
                            <button class="ctsp-mua" type="submit" name="buynow"> Mua hàng </button>
                        <?php echo ' </form>' ?> 
                       </div>
                    </form>
                </div>
        </div>
        <?php endforeach; ?>
        <!-- hộp comment -->
        <div class="commentsp">
            <div class="comment-box">
                 <h3>ĐÁNH GIÁ SẢN PHẨM </h3>
                <div class="comment-title">
                    <div class="comment-title-soluongcmt">
                        <span>Có lượt bình luận: <?php 
                            if(empty($countdata)) {
                                "0";
                            }else{
                                foreach($countdata as $value) {
                                    echo $value['COUNT(cmt_id)'];
                                }
                            }
                        ?> lượt bình luận </span>
                    </div>
                </div>
            <div class="comment-main-1">
                <?php foreach($dataCmt as $value): ?>
               <div class="comment-main">
                    <div class="comment-avatar">
                        <img src="public/Imgs/user/<?php echo($value['user_img']!=""?$value['user_img']:"user.png") ?>" alt=" ">
                        <span><?php echo $value['user_name'] ?>  <i class="fa-solid fa-circle-check text-primary"></i><p class="text-danger">Thành viên</p></span>
                    </div>

                    <span class="comment-time">
                    Ngày: <?php echo $value['cmt_date'] ?>
                    </span>

                    <span class="comment-tensp">
                        Tên sản phẩm : <?php echo $value['product_name'] ?>
                    </span>
                    <span class="comment-text">
                    <?php echo $value['cmt_text'] ?>
                    </span>

                    <div class="comment-traloi">
                        <a href="#">Trả lời(1)</a>
                        <a href="#">Thích <i class="fa-solid fa-thumbs-up"></i></a>
                    </div>
                   
                    <!-- nếu như bình luận của người nào thì người ấy có quyền sửa và xóa  -->
                    <?php 
                        if(!empty($_SESSION['user_name']) && $_SESSION['user_name'] == $value['user_name']) {
                            echo '
                            <div class="comment-update">
                                <a href="index.php?act=chitietsanpham&cmt_id='.$value['cmt_id'].'" class="btn btn-danger">Xóa</a>
                                <a href="" class="btn btn-primary">Chỉnh sửa</a>
                            </div>
                            ';
                        }
                    ?>

                        <!-- trả lời comment -->
                        <?php 
                        $datarep = $rep->realRepcmt_id($value['cmt_id']);
                        if(!empty($datarep)) foreach($datarep as $value1):
                        ?>
                        <div class="re-cmt">
                            <div class="re-cmt-img">
                               <img src="public/Imgs/user/<?php echo(!empty($value1['user_img'])?$value1['user_img']:'user.png')?>" alt="">
                               <span><?php echo $value1['user_name'] ?><i class="fa-solid fa-circle-check text-danger"></i></span>
                            </div>

                            <div class="re-cmt-text">
                                <span class="comment-time">Ngày: <?php echo $value1['rep_date'] ?></span>
                                <span>@<?php echo $value1['user_name']." ".$value1['rep_text']?></span>
                            </div>

                            <?php 
                                if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $value1['user_id']) {
                                    echo '
                                         <div class="re-cmt-cn">
                                            <a href="index.php?act=chitietsanpham&rep_id='.$value1['rep_id'].'" class="btn btn-danger">Xóa</a>
                                            <a href="" class="btn btn-primary">Chỉnh sửa</a>
                                        </div>
                                    ';
                                }
                            ?>

                            
                        </div>
                        <?php endforeach; ?>

                        <div class="traloi-cmt">
                           <form action="" method="post">
                            <input type="hidden" name="user_id" value="<?php echo(isset($_SESSION['user_id'])?$_SESSION['user_id']:"") ?>">
                            <input type="hidden" name="cmt_id" value="<?php echo $value['cmt_id'] ?>">
                            <input type="text" name="rep_text" placeholder="Trả lời @<?php echo $value['user_name'] ?>">
                            <button class="btn btn-danger" name="repcmt" type="submit">Trả lời</button>
                           </form>
                        </div>

               </div>
               <?php endforeach; ?>
            </div>

            </div>
            <!-- phần comment -->
            <div class="comment-box1">
                <span class="comment-box1-title">Phản hồi: </span>
                <form action="" method="post">
                    <input type="text" name="cmt_text" value="" placeholder="hãy phản hồi về sản phẩm này ">
                    <button type="submit" name="addCmt">Gửi bình luận</button>
                </form>
                <span><?php echo(isset($err['cmt_text'])?$err['cmt_text']:'') ?></span>
            </div>
        </div>
    </div>

    <!-- lười quá nên viết luôn js dưới này  -->
