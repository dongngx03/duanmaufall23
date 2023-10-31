<?php include_once'Controllers/admin/DonhangController.php' ?>
<body>
<style>
    <?php include'public/Css/admin/sanpham.css' ?>
</style>
    <!-- nội dung  -->
    
    
    <div class="quantri-sanpham">
        <table>
            <tr>
                    <th>Trạng thái : </th>
                    <th> 1 : đang đợi chấp nhận</th>
                    <th> 2 : Hủy </th>
                    <th> 3 : Đã chấp nhận  </th>
                    <th> 4 : Thành công  </th>
            </tr>
        </table>
        <table id="my-table">
            <tr class="quantri-sanpham1">
                <th>Mã đơn</th>
                <th>Sản phẩm </th>
                <th>Người mua</th>
                <th>Số lượng </th>
                <th>Thành tiền </th>
                <th>địa trỉ </th>
                <th>Sđt</th>
                <th>Trạng thái </th>
                <th>Thao tác </th>
            </tr>
    <!-- sản phẩm -->
            <?php echo"<form action='' method='post'>" ?>   
            <?php foreach($data as $value): ?>
            <tr>
                <td>DH00 <?php echo $value['order_id'] ?></td>
                <td>
                    <img class="quantri-imgproduct" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh">
                    <p><?php echo $value['product_name'] ?></p>
                </td>
                <td><?php echo $value['user_name'] ?></td>
                <td><?php echo $value['order_quantity'] ?></td>
                <td><?php echo number_format($value['order_quantity'] * $value['product_price']) ?>đ</td>
                <td><?php echo $value['order_xa'].'-'.$value['order_huyen'].'-'.$value['order_tinh'] ?></td>
                <td><?php echo $value['user_phone'] ?></td>
                <td><?php echo $value['tt_id'] ?></td>
                <td>
                    <a href="index.php?admin=donhang&huy=<?php echo $value['order_id'] ?>" class="btn btn-danger">Hủy</a>
                    <a href="index.php?admin=donhang&chapnhan=<?php echo $value['order_id'] ?>" class="btn btn-primary">Chấp nhận</a>
                </td>
            </tr>
            <?php endforeach; ?>
    <!-- sản phẩm -->
       </table>
    </div>
    <div class="quantri-chucnangkhac">
        <div id="pagination"></div>
    </div>
    <?php echo"</form>" ?>
    <script>
        <?php include'public/Js/admin/sanpham.js' ?>
    </script>
    </body>
</html>
