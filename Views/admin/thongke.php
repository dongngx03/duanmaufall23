<?php include_once'Controllers/admin/ThongkeController.php' ?>
<body>
<style>
    <?php include'public/Css/admin/thongke.css' ?>
   
</style>
<body>
    <div class="tong">
        <div class="container p-1 bg-white ">
            <div class="row">
                <div class="col-12">
                    <h3 id="title">Thống kê sản phẩm </h3>
                </div>
            </div>
        </div>

        <div class="container p-3">
            <div class="row">
                <div class="col-3">
                   <div class="doanhthu">
                        <span>Đợi xác nhận <i class="fa-solid fa-money-bill-trend-up"></i></span>
                        <?php foreach($xacnhan as $value): ?>
                        <span><?php echo $value['count'] ?></span>
                        <?php endforeach; ?>
                   </div>
                </div>
                <div class="col-3">
                   <div class="doanhthu">
                        <span>Đơn hàng đang giao <i class="fa-solid fa-truck-fast"></i></span>
                        <?php foreach($danggiao as $value): ?>
                        <span><?php echo $value['count'] ?></span>
                        <?php endforeach; ?>
                   </div>
                </div>
                <div class="col-3">
                    <div class="doanhthu">
                        <span>Đơn hàng đã hủy <i class="fa-solid fa-trash"></i></span>
                        <?php foreach($dahuy as $value): ?>
                        <span><?php echo $value['count'] ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="doanhthu">
                        <span>Đơn hàng thành công <i class="fa-solid fa-square-check"></i></span>
                        <?php foreach($thanhcong as $value): ?>
                        <span><?php echo $value['count'] ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-3">
            <h4>Số liệu sản phẩm </h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-7">
                    <table id="bang-solieusp">
                        <tr class="bg-danger text-white">
                            <th>Stt</th>
                            <th>Loại hàng </th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất </th>
                            <th>Giá thấp nhất </th>
                            <th>Giá trung bình </th>
                        </tr>
                        <?php foreach($data as $key => $value): ?>
                        <tr>
                            <td><?php echo $key +1 ?></td>
                            <td><?php echo $value['type_name'] ?></td>
                            <td><?php echo $value['count_product'] ?></td>
                            <td><?php echo number_format($value['max_price']) ?> đ</td>
                            <td><?php echo number_format($value['min_price']) ?> đ</td>
                            <td><?php echo number_format($value['avg_price']) ?> đ</td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <div class="col-5">
                    <div id="piechart"></div>
                </div>
            </div>
        </div>

        <div class="container p-3">
            <h4>Hiệu xuất trang web </h4>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <table class=" top">
                        <tr>
                            <th class="p-3 text-white bg-danger" colspan="4">Sản phẩm thêm vào giỏ hàng nhiều nhất </th>
                        </tr>
                        <tr>
                            <th>Top</th>
                            <th>ID Sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                        </tr>
                        <?php foreach($topcart as $key => $value): ?>
                        <tr>
                            <td><?php echo $key +1 ?></td>
                            <td><?php echo $value['product_id'] ?></td>
                            <td>
                                <img style="width:50px; height:auto" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
                            </td>
                            <td><?php echo $value['count_cart'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-4">
                    <table class=" top">
                        <tr>
                            <th class="p-3 text-white bg-danger" colspan="4">Sản phẩm được thao tác đặt hàng nhiều nhất   </th>
                        </tr>
                        <tr>
                            <th>Top</th>
                            <th>ID Sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lần</th>
                        </tr>
                        <?php foreach($dataBuy as $key => $value): ?>
                        <tr>
                            <td><?php echo $key +1 ?></td>
                            <td><?php echo $value['product_id'] ?></td>
                            <td>
                                <img style="width:50px; height:auto" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt="">
                            </td>
                            <td><?php echo $value['count_buy'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="col-4">
                    <table class=" top">
                        <tr>
                            <th class="p-3 text-white bg-danger" colspan="5">Khách hàng đặt mua nhiều nhất  </th>
                        </tr>
                        <tr>
                            <th>Top</th>
                            <th>ID khách</th>
                            <th>tên khách hàng </th>
                            <th>Ảnh</th>
                            <th>Số lần </th>
                        </tr>
                        <?php foreach($userBuy as $key => $value): ?>
                        <tr>
                            <td><?php echo $key +1 ?></td>
                            <td><?php echo $value['user_id'] ?></td>
                            <td><?php echo $value['user_name'] ?></td>
                            <td>
                                <img style="width:50px; height:auto" src="public/Imgs/user/<?php echo $value['user_img'] ?>" alt="">
                            </td>
                            <td><?php echo $value['count_userbuy'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
               
                
            </div>
        </div>

        <div class="container p-3">
            <h4>Tìm kiếm sản phẩm  </h4>
        </div>
        <!-- Tìm kiếm sản phẩm theo mã sản phẩm  -->
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <table class="w-100">
                       <?php foreach($dataProductAll as $value): ?>
                        <tr class="listitem">
                            <td class="id"><?php echo $value['product_id'] ?></td>
                            <td>Tênsp:<?php echo $value['product_name'] ?></td>
                            <td>Giá: <?php echo number_format( $value['product_price']) ?> đ</td>
                            <td><img style="width:50px; height:auto" src="public/Imgs/product/<?php echo $value['product_img'] ?>" alt=""></td>
                            <td>SL:<?php echo $value['product_quantity'] ?></td>
                            <td>Giảm giá:<?php echo number_format($value['product_discount']) ?> đ</td>
                            <td>Loại:<?php echo $value['type_id'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- tìm kiếm sản phẩm theo mã sản phẩm  -->
                        <tr>
                            <th colspan="7">
                                <form action="" method="post">
                                    <input id="seahid" style="height: 45px;" class="w-100 border-0" type="number" name="seah" placeholder="Nhập ID của sản phẩm ">
                                    <button class="btn btn-danger w-100 rounded-0">Tìm kiếm </button>
                                </form>
                            </th>
                        </tr>
                       
                    </table>
                </div>

                <div class="col-6">
                    <table class="w-100">
                       <?php foreach($dataUsser as $key => $value): ?>
                        <tr class="listuser">
                            <td class="iduser"><?php echo $value['user_id'] ?></td>
                            <td>Tên khách hàng :<?php echo $value['user_name'] ?></td>
                            <td>SĐT : <?php echo $value['user_phone'] ?></td>
                            <td><img style="width:50px; height:auto" src="public/Imgs/user/<?php echo $value['user_img'] ?>" alt=""></td>
                            <td>email :<?php echo $value['user_email'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- tìm kiếm sản phẩm theo mã sản phẩm  -->
                        <tr>
                            <th colspan="5">
                                <form action="" method="post">
                                    <input id="seahuser" style="height: 45px;" class="w-100 border-0" type="number" name="seah" placeholder="Nhập ID của khách hàng  ">
                                    <button class="btn btn-primary w-100 rounded-0">Tìm kiếm </button>
                                </form>
                            </th>
                        </tr>
                       
                    </table>
                </div>
            </div>
        </div>


        <div class="container">
           

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
              
                    ['Danh mục', 'Số lượng sản phẩm '],
                    // ['Điện thoại', 10],
                    // ['Laptop', 10],
                    // ['Máy tính bảng ', 2],

                    <?php 
                        foreach($data as $value) {
                            echo "['".$value['type_name']."', ".$value['count_product']."],";
                        }
                    ?>
               
               
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Bảng thống kê Mặt hàng theo loại sản phẩm của Do_ngyShop', 'width':450, 'height':350};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
                }
                </script>

            </div>
    </div>
   
</body>
<script>
    const list = document.querySelectorAll('.listitem');
    const idsp = document.querySelectorAll('.id');
    const listuser = document.querySelectorAll('.listuser');
    const iduser = document.querySelectorAll('.iduser');
   
    // ẩn tất cả các sản phẩm 
    list.forEach(element => {
        element.style.display = 'none'
    });

    // bắt sự kiện cho input 
    const seahid = document.querySelector('#seahid');
    seahid.addEventListener('input', () => {
        for (let i = 0; i < list.length; i++) {
           const ID = parseInt(idsp[i].innerHTML)
           if(seahid.value == ID) {
                list[i].style.display = 'block'
           }else{
                list[i].style.display = 'none'
           }
            
        }
    }) 

    // ẩn tất cả các người dùng 
    listuser.forEach(element => {
        element.style.display = 'none'
    });

    // bắt sự kiện cho input để tìm ra người dùng 
    const seahuser = document.querySelector('#seahuser');
    seahuser.addEventListener('input', () => {
       for (let i = 0; i < listuser.length; i++) {
        const user = parseInt(iduser[i].innerHTML)
        if(seahuser.value == user) {
            listuser[i].style.display = 'block'
        }else{
            listuser[i].style.display = 'none'
        }
        
       }
    }) 
    
</script>
</html>
