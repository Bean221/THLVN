<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý đăng ký ở đây
    $username = $_POST["registerUsername"];
    $password = $_POST["registerPassword"];
    
    // Thực hiện kiểm tra và thêm tài khoản mới vào cơ sở dữ liệu ở đây (nếu sử dụng cơ sở dữ liệu)
    
    // Sau khi kiểm tra và thêm, bạn có thể chuyển hướng hoặc thực hiện các hành động khác
    echo "Đăng ký thành công!";
}
?>