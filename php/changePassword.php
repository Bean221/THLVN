<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý thay đổi mật khẩu ở đây
    $username = $_POST["changePasswordUsername"];
    $oldPassword = $_POST["oldPassword"];
    $newPassword = $_POST["newPassword"];
    
    // Thực hiện kiểm tra và cập nhật mật khẩu ở đây (nếu sử dụng cơ sở dữ liệu)
    
    // Sau khi kiểm tra và cập nhật, bạn có thể chuyển hướng hoặc thực hiện các hành động khác
    echo "Thay đổi mật khẩu thành công!";
}
?>