function paginateTable() {
    var trang = document.querySelector('#trang');
    var table = document.getElementById("my-table");
    var rowsPerPage = 5; // Số hàng trên mỗi trang
    var rows = table.getElementsByTagName("tr");
    var totalPages = Math.ceil((rows.length - 1) / rowsPerPage); // Tính tổng số trang (loại bỏ hàng tiêu đề)
  
    // Hiển thị trang đầu tiên khi tải trang
    showPage(1);
  
    // Tạo các nút phân trang
    var pagination = document.getElementById("pagination");
    for (var i = 1; i <= totalPages; i++) {
      var button = document.createElement("button");
      button.innerHTML = i;
      
      button.addEventListener("click", function() {
        showPage(this.innerHTML);
      });
      pagination.appendChild(button);
    }
  
    // Hiển thị các trang tương ứng
    function showPage(pageNumber) {
      // Ẩn tất cả các hàng trong bảng
      for (var i = 1; i < rows.length; i++) {
        rows[i].style.display = "none";
      }
  
      // Hiển thị các hàng trên trang hiện tại
      var startIndex = (pageNumber - 1) * rowsPerPage + 1;
      var endIndex = startIndex + rowsPerPage - 1;
      for (var j = startIndex; j <= Math.min(endIndex, rows.length - 1); j++) {
        rows[j].style.display = "table-row";
      }
    }
  }
  
  // Gọi phương thức paginateTable khi trang được tạo
  window.addEventListener("load", paginateTable);
  