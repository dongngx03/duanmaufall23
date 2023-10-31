<?php include'Controllers/admin/CapnhatspController.php' ?>
<style>
    <?php include'public/Css/admin/capnhatsp.css' ?>
</style>
<body>
    <div class="quantri-sanpham-suasp">
        <h2>Cập nhật sản phẩm </h2>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- đổ dữ liệu -->
            <?php foreach($data as $value): ?>
            <label for="">Tên sản phẩm</label> <input type="text" name="product_name" value="<?php echo $value['product_name'] ?>">
            <span><?php echo(isset($err['product_name'])?$err['product_name']:'') ?> </span>
            <label for=""> Giá tiền </label> <input type="number" name="product_price" value="<?php echo $value['product_price'] ?>">
            <span><?php echo(isset($err['product_price'])?$err['product_price']:'') ?> </span>
            <label for=""> Ảnh </label> <input type="file" name="product_img">
            <span> </span>
            <label for=""> Mô tả</label> <input type="text" name="product_desc" value="<?php echo $value['product_desc'] ?>">
            <span><?php echo(isset($err['product_desc'])?$err['product_desc']:'') ?> </span>
            <label for=""> Giảm giá</label> <input type="text" name="product_discount" value="<?php echo $value['product_discount'] ?>">
            <span><?php echo(isset($err['product_discount'])?$err['product_discount']:'') ?> </span>
            <label for="">Số lượng  </label><input type="number" name="product_quantity" value="<?php echo $value['product_quantity'] ?>">
            <span><?php echo(isset($err['product_quantity'])?$err['product_quantity']:'') ?> </span>
            <?php endforeach; ?>
            <label for="">Phân loại </label> <select name="type_id" id="">
                <?php foreach($loai as $value): ?>
                <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                <?php endforeach; ?>
            </select><br>
            <button class="btn btn-danger" type="submit" name="updateProduct">Cập Nhật</button>

        </form>
    </div>
</body>
</html>