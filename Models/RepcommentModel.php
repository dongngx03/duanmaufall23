<?php 
class Repcomment{
    protected $_conn;

    function __construct($db)
    {   
        $this->_conn = $db;
    }

    // thêm trả lời bình luận 
    public function addRep($rep_text, $cmt_id, $user_id) {
        $query = "INSERT INTO repcomments(rep_text, cmt_id, user_id)
            VALUE('$rep_text', '$cmt_id', '$user_id')
        ";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();

    }

    // lấy tất cả các trả lời bình luận cảu 1 bình luận nào đó 
    public function realRepcmt_id($cmt_id) {
        $query = "SELECT * FROM repcomments join users on repcomments.user_id = users.user_id
         WHERE cmt_id = '$cmt_id'";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchALL();
        return $data;
    }
    // xóa câu trả lời mà mình muốn ( chỉ xóa được câu trả lời của mình )
    public function deleteRep($rep_id) {
        $query = "DELETE FROM repcomments WHERE rep_id = $rep_id";
        $stmt = $this->_conn->prepare($query);
        $stmt->execute();
    }

}