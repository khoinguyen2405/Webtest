<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['demo-name']);
    $email = htmlspecialchars($_POST['demo-email']);
    $category = htmlspecialchars($_POST['demo-category']);
    $priority = htmlspecialchars($_POST['demo-priority']);
    $message = htmlspecialchars($_POST['demo-message']);
    $email_copy = isset($_POST['demo-email-copy']);

    $to = "kendynguyen2019@gmail.com"; // Thay bằng email của bạn
    $subject = "Tin nhắn mới từ $name";
    $body = "Họ và tên: $name\nEmail: $email\nDanh mục: $category\nƯu tiên: $priority\nTin nhắn: $message";

    $headers = "From: $email\r\n";
    if ($email_copy) {
        $headers .= "Cc: $email\r\n";
    }
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        echo "Email đã được gửi thành công!";
    } else {
        echo "Gửi email thất bại.";
    }
}
?>