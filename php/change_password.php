<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $confirmNewPassword = $_POST["confirm_new_password"];

    // Kiểm tra xác nhận mật khẩu mới
    if ($newPassword != $confirmNewPassword) {
        echo "Xác nhận mật khẩu mới không đúng.";
    } else {
        // Thực hiện kiểm tra và cập nhật mật khẩu trong cơ sở dữ liệu hoặc xử lý theo nhu cầu của bạn
        // (Lưu ý: Trong thực tế, bạn nên sử dụng hàm băm (hash) cho mật khẩu mới và kiểm tra mật khẩu hiện tại)
        echo "Đổi mật khẩu thành công!";
    }
}
?>