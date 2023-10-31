<?php include_once'Controllers/admin/SanphamController.php' ?>
<body>
<style>
    <?php include'public/Css/admin/sanpham.css' ?>
</style>
    <!-- nội dung  -->
    
    
    <div class="quantri-sanpham">
        <table id="my-table">
            <tr class="quantri-sanpham1">
                <th></th>
                <th>Mã </th>
                <th>Tên sp </th>
                <th>Giá </th>
                <th>Ảnh </th>
                <th>Giảm giá </th>
                <th>Số lượng </th>
                <th>Phân loại </th>
                <th>Chức năng</th>
            </tr>
    <!-- sản phẩm -->
            <?php echo"<form action='' method='post'>" ?>   
            <?php foreach($data as $value): ?>
            <tr>
                <td><input type="checkbox" name="product[]" value="<?php echo $value['product_id'] ?>" ></td>
                <td>[SP<?php echo $value['product_id'] ?>]</td>
                <td><?php echo $value['product_name'] ?></td>
                <td><?php echo number_format($value['product_price']) ?> đ</td>
                <td><img class="quantri-imgproduct" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="ảnh"></td>
                <td><?php echo number_format($value['product_discount']) ?> đ</td>
                <td><?php echo $value['product_quantity'] ?> chiếc</td>
                <td><?php echo $value['type_id'] ?></td>
                <td class="quantri-chucnang">
                    <a href="index.php?admin=capnhatsp&idsp=<?php echo $value['product_id'] ?>" class="btn btn-primary">Sửa</a>
                </td>
            </tr>
            <?php endforeach; ?>
    <!-- sản phẩm -->
       </table>
    </div>
    <div class="quantri-chucnangkhac">
        <div id="pagination"></div>
        <span style="color: red;"><?php echo(isset($err['delete'])?$err['delete']:'') ?></span>
        <div class="quantri-chucnangkhac1">
            <a id="xacnhanxoa" class="btn btn-danger">Xóa</a>
            <button type="submit" name="bochon" class="btn btn-primary">Bỏ chọn</button>
            <a href="index.php?admin=themmoisp" class="btn btn-dark">Thêm mới sp </a> 
        </div>

        <div id="xacnhan-hanhdong">
            <div class="xn-hanhdong-item">
                <h3>Bạn chắc chắn muốn xóa ?</h3>
                <div class="itemcon">
                    <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
                    <a href="#" id="huyxoa" class="btn btn-primary">Hủy</a>
                </div> 
            </div>
        </div>
       
    </div>
    <?php echo"</form>" ?>
    <script>
        <?php include'public/Js/admin/sanpham.js' ?>
        // confirrm người dùng tước khi xóa 
        const tbxn = document.getElementById('xacnhan-hanhdong');
        const xnxoa = document.getElementById('xacnhanxoa');
        const huyxoa = document.getElementById('huyxoa');
        xnxoa.addEventListener('click', () => {
            tbxn.style.display = 'block';
           
        })

        huyxoa.addEventListener('click', () => {
            tbxn.style.display = 'none';
        })



    </script>
    </body>
</html>
