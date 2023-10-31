<?php include'Controllers/admin/BinhluanController.php'; ?>
<body>
<style>
    <?php include'public/Css/admin/taikhoan.css' ?>
</style>
    <!-- nội dung  -->
    <div class="quantri-taikhoan">
        <table id="my-table">
            <tr class="quantri-taikhoan1">
                <th>Cmt_id</th>
                <th>User_name</th>
                <th>Nội dung bình luận</th>
                <th>Sản phẩm </th>
                <th>Chức năng </th>
            </tr>
    <!-- sản phẩm -->
            <?php foreach($data as $value): ?>
            <tr>
                <td>[CMT<?php echo $value['cmt_id'] ?>]</td>
                <td><?php echo $value['user_name'] ?></td>
                <td><?php echo $value['cmt_text'] ?></td>
                <td><?php echo $value['product_name'] ?></td>
                <td class="text-center">
                    <a href="index.php?admin=binhluan&cmt_id=<?php echo $value['cmt_id'] ?>" class="btn btn-danger">Xóa</a>
                    <a href="index.php?id=<?php echo $value['product_id'] ?>" class="btn btn-primary">Chi tiết</a>
                </td>
            </tr>
            <?php endforeach; ?>
    <!-- sản phẩm -->
       </table>
       <div id="pagination"></div>
    <script>
        <?php include'public/Js/admin/taikhoan.js' ?>
    </script>
    </body>
</html>
