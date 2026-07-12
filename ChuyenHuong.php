<?php

include 'connect.php';

session_start();
if (isset($_SESSION['userName'])){


// Thực hiện truy vấn
$query = "SELECT Lv FROM accounts where userName='{$_SESSION['userName']}'";
$result = mysqli_query($conn, $query);

if (!$result) {
    // Xử lý lỗi nếu truy vấn không thành công
    echo "Lỗi: " . mysqli_error($conn);
} else {
    // Kiểm tra số hàng trả về
    $num_rows = mysqli_num_rows($result);
    
    if ($num_rows == 1) {
        // Nếu có 1 hàng trả về, lấy giá trị cột LV
        $row = mysqli_fetch_assoc($result);
        $LV = $row['Lv'];

        // Chuyển hướng dựa trên giá trị của LV
        if ($LV == 1) {
            echo '<script>window.location.href="index.php"; alert("Đăng nhập thành công");</script>';
        } else if ($LV == 100) {
            echo '<script>window.location.href="DK_Admin.php"; alert("Đăng nhập thành công");</script>';
        } else {
            // Xử lý trường hợp khác
            echo "Không xác định được hành động";
        }
    } else {
        // Xử lý trường hợp không có hoặc nhiều hơn 1 hàng
        echo "Không có hoặc nhiều hơn 1 hàng trong cơ sở dữ liệu";
    }
}
}

?>
