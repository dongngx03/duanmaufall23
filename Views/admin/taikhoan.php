<?php include'Controllers/admin/TaikhoanController.php'; ?>
<body>
<style>
    <?php include'public/Css/admin/taikhoan.css' ?>
</style>
    <!-- nội dung  -->
    <div class="quantri-taikhoan">
        <table id="my-table">
            <tr class="quantri-taikhoan1">
                <th>userID</th>
                <th>User_name</th>
                <th>Email</th>
                <th>ảnh</th>
                <th>số điện thoại</th>
               
               
            </tr>
    <!-- sản phẩm -->
            <?php foreach($data as $value): ?>
            <tr>
                <td>[USER<?php echo $value['user_id'] ?>]</td>
                <td><?php echo $value['user_name'] ?></td>
                <td><?php echo $value['user_email'] ?></td>
                <td><img class="quantri-imguser" src="public/Imgs/user/<?php echo $value['user_img'] ?>" alt="ảnh"></td>
                <td><?php echo $value['user_phone'] ?> </td>
               
               
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
