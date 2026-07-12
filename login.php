<?php
include 'connect.php';

// Khởi tạo mảng để lưu trữ các thông báo lỗi
$ErrorMessagesLogin = array();

// Khởi tạo biến để lưu trữ giá trị nhập đúng
$oldValuesLogin = array();

if (isset($_POST["login-form"])) {
    // Kiểm tra email đăng nhập
    if (empty($_POST["form-email-login"])) {
        $ErrorMessagesLogin["form-email-login"] = "Vui lòng nhập địa chỉ email";
    } else {
        $emailLogin = $_POST["form-email-login"];
        $oldValuesLogin['form-email-login'] = $emailLogin;
    }

    // Kiểm tra password đăng nhập
    if (empty($_POST["passwordlogin"])) {
        $ErrorMessagesLogin["passwordlogin"] = "Vui lòng nhập mật khẩu";
    }

    // Kiểm tra nếu không có lỗi thì xử lý đăng nhập
    if (empty($ErrorMessagesLogin)) {
        $emailLogin = $_POST["form-email-login"];
        $passwordLogin = $_POST["passwordlogin"];

        $sql = "SELECT * FROM accounts WHERE Email='$emailLogin'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Kiểm tra mật khẩu
            if ($passwordLogin === $row['LoginPassword']) {
                // Đăng nhập thành công
                $_SESSION['userName'] = $row['UserName']; // Lưu tên người dùng vào session
                $_SESSION['id'] = $row['ID'];

                header('location:ChuyenHuong.php');
                exit();
            } else {
                $ErrorMessagesLogin["passwordlogin"] = "Mật khẩu không chính xác";
            }
        } else {
            $ErrorMessagesLogin["form-email-login"] = "Địa chỉ email không tồn tại";
        }
    }
}
?>
