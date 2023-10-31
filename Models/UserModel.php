<!-- bảng user -->
<?php 
class User{
    protected $_conn;
    
    function __construct($db)
    {
        $this->_conn = $db;
    }

    // thêm tài khoản 
    public function add_User($user_name, $user_email, $user_pw, $user_img, $user_phone, $isadmin) {
        $query = "INSERT INTO users(user_name, user_email, user_pw, user_img, user_phone, isadmin)
            VALUE('$user_name', '$user_email', '$user_pw', '$user_img', '$user_phone', '$isadmin')
         ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }
    // tìm xem user_name có tồn tại hay không
    public function seahUserName($user_name) {
        $query = "SELECT user_name FROM users WHERE user_name = '$user_name' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }
    // tìm xem số điện thoại tồn tại hay chưa 
    public function seahUserPhone($user_phone) {
        $query = "SELECT user_phone FROM users WHERE user_phone = '$user_phone' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }
    // tìm xem email tồn tại hay chưa 
    public function seahUserEmail($user_email) {
        $query = "SELECT user_email FROM users WHERE user_email = '$user_email' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $check = $stmt->rowCount();
        return $check;
    }
    // tìm pw dự theo user_name 
    public function seahPw($user_name) {
        $query = "SELECT * FROM users WHERE user_name = '$user_name' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    // lấy dữ liệu theo email 
    public function readALL_email($user_email) {
        $query = "SELECT * FROM users WHERE user_email = '$user_email' ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    } 
    // cập nhật thông tin người dùng 
    public function updateUser($user_email, $user_pw, $user_img, $user_phone, $user_name) {
        $query = "UPDATE users SET user_email = '$user_email', user_pw = '$user_pw', user_phone = '$user_phone', user_img = '$user_img'
            WHERE user_name = '$user_name'
         ";
         $stmt = $this->_conn->prepare($query);
         $stmt->execute();
    }

    // đọc tất cả thông tin gười dùng 
    public function readUsser() {
        $query = "SELECT * FROM users WHERE isadmin = 1 ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    
}