<?php
include 'connect.php';

// Khởi tạo mảng để lưu trữ các thông báo lỗi
$ErrorMessages = array();

// Khởi tạo biến để lưu trữ giá trị nhập đúng
$oldValues = array();

// Kiểm tra nếu biểu mẫu đăng ký đã được gửi
if(isset($_POST['register-form'])){
    // Kiểm tra và xử lý dữ liệu đăng ký ở đây
    $userName = $_POST['form-userName'];
    $email = $_POST['form-email'];
    $password = $_POST['form-password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validate dữ liệu
    if(empty($userName)) {
        $ErrorMessages["form-userName"] = "Vui lòng nhập Họ Tên";
    } elseif(preg_match('/[^a-zA-Z\sàáảãạăắằẳẵặâấầẩẫậèéẻẽẹêếềểễệđìíỉĩịòóỏõọôốồổỗộơớờởỡợùúủũụưứừửữựỳýỷỹỵ]/', $userName)) {
        $ErrorMessages["form-userName"] = "Họ Tên không được chứa ký tự đặc biệt hoặc số";
    } else {
        $oldValues['form-userName'] = $userName;
    }
    // // Kiểm tra số điện thoại không hợp lệ
    // if(empty($phone)) {
    //     $ErrorMessages["form-phone"] = "Vui lòng nhập Số điện thoại";
    // } elseif(!preg_match('/^[0-9]{10,11}$/', $phone)) {
    //     $ErrorMessages["form-phone"] = "Số điện thoại không hợp lệ";
    // } else {
    //     $oldValues['form-phone'] = $phone;
    // }

    // // Kiểm tra năm sinh không hợp lệ
    // if(empty($birthday)) {
    //     $ErrorMessages["form-birthday"] = "Vui lòng nhập Năm sinh";
    // } elseif(!preg_match('/^\d{4}$/', $birthday)) {
    //     $ErrorMessages["form-birthday"] = "Năm sinh không hợp lệ";
    // } else {
    //     $oldValues['form-birthday'] = $birthday;
    // }

    // // Kiểm tra địa chỉ không hợp lệ
    // if(empty($address)) {
    //     $ErrorMessages["form-address"] = "Vui lòng nhập Địa chỉ";
    // } else {
    //     $oldValues['form-address'] = $address;
    // }

    if(empty($email)) {
        $ErrorMessages["form-email"] = "Vui lòng nhập Email";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $ErrorMessages["form-email"] = "Email không hợp lệ";
    } else {
        $oldValues['form-email'] = $email;
    }

    if(empty($password)) {
        $ErrorMessages["form-password"] = "Vui lòng nhập Mật khẩu";
    } elseif(strlen($password) < 6 || !preg_match('/[0-9]/', $password) || !preg_match('/[^\w\s]/', $password)) {
        $ErrorMessages["form-password"] = "Mật khẩu phải chứa ít nhất 6 ký tự và ít nhất 1 số và 1 kí tự đặc biệt";
    } else {
        $oldValues['form-password'] = $password;
    }

    if(empty($confirmPassword)) {
        $ErrorMessages["confirm-password"] = "Vui lòng nhập lại Mật khẩu";
    } elseif($password !== $confirmPassword) {
        $ErrorMessages["confirm-password"] = "Mật khẩu không khớp";
    }

    

    // Kiểm tra nếu không có lỗi, có thể tiến hành xử lý đăng ký
    if(empty($ErrorMessages)) {
        // Kiểm tra xem userName đã tồn tại trong cơ sở dữ liệu hay không
        $sql_check_username = "SELECT * FROM accounts WHERE userName='$userName'";
        $result_check_username = $conn->query($sql_check_username);
        if ($result_check_username->num_rows > 0) {
            // Nếu userName đã tồn tại, báo lỗi
            $ErrorMessages["form-userName"] = "Tên người dùng đã tồn tại";
        }

        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay không
        $sql_check_email = "SELECT * FROM accounts WHERE email='$email'";
        $result_check_email = $conn->query($sql_check_email);
        if ($result_check_email->num_rows > 0) {
            // Nếu email đã tồn tại, báo lỗi
            $ErrorMessages["form-email"] = "Email đã tồn tại";
        } else {
            // Nếu cả userName và email đều chưa tồn tại, tiếp tục với quá trình đăng ký
            // Thực hiện thêm thông tin người dùng mới vào cơ sở dữ liệu
            $sql_insert_user = "INSERT INTO accounts (id, userName, password, Lv, email, phone, birthday, address) VALUES (NULL, '$userName', '$password', '1', '$email', '', '', '')";
            if ($conn->query($sql_insert_user) === TRUE) {
                echo "<script>alert('Đăng ký tài khoản thành công!')</script>";
                echo '<script>window.location.href = "index.php";</script>';
            } else {
                echo "Error: " . $sql_insert_user . "<br>" . $conn->error;
            }
        }
    }
}
?>
