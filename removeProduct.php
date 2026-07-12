<?php
// Kết nối đến cơ sở dữ liệu


include 'connect.php';

// Lấy ID sản phẩm từ yêu cầu AJAX
$productId = $_POST['product_id'];

// Xóa sản phẩm khỏi bảng giỏ hàng
$sql = "DELETE FROM cart WHERE MaSP = '$productId'";

if ($conn->query($sql) === TRUE) {
    // Xóa thành công
    echo "Sản phẩm đã được xóa khỏi giỏ hàng.";
} else {
    // Xóa thất bại
    echo "Lỗi xóa sản phẩm: " . $conn->error;
}

$conn->close();
?>