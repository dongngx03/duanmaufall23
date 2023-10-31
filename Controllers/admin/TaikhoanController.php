<?php
    // kết nối cơ sở dưz liệu 
    include'Models/DatabaseModel.php';
    $database = new Database();
    $db = $database->connect();
    // kết nối user
    include'Models/UserModel.php'; 
    $user = new User($db);

    // đọc tất cả thông tin người dùng 
    $data = $user->readUsser();
?>