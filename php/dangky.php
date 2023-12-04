<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Kiểm tra xác nhận mật khẩu
    if ($password != $confirm_password) {
        echo "Xác nhận mật khẩu không đúng.";
    } else {
        // Thực hiện lưu thông tin đăng ký vào cơ sở dữ liệu hoặc xử lý theo nhu cầu của bạn
        echo "Đăng ký thành công!";
    }
}
?>
