<?php
session_start();

// Kiểm tra xem có dữ liệu được gửi từ Ajax hay không
if (isset($_POST['product_id'])) {
    // Kết nối đến cơ sở dữ liệu
    include_once 'connect.php';

    // Lấy mã sản phẩm từ dữ liệu gửi đi
    $productId = $_POST['product_id'];

    // Kiểm tra xem người dùng đã đăng nhập hay chưa
    $isLoggedIn = isset($_SESSION['id']);

    if ($isLoggedIn) {
        // Lấy MaKH từ session
        $makh = $_SESSION['id'];

        // Truy vấn để kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng của người dùng chưa
        $check_existing_query = "SELECT * FROM cart WHERE MaSP = '$productId' AND MaK = '$makh'";
        $check_existing_result = $conn->query($check_existing_query);

        if ($check_existing_result->num_rows > 0) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            $update_query = "UPDATE cart SET SoLuong = SoLuong + 1 WHERE MaSP = '$productId' AND MaK = '$makh'";
            if ($conn->query($update_query) === TRUE) {
                echo "Sản phẩm đã được thêm vào giỏ hàng!";
            } else {
                echo "Lỗi: " . $update_query . "<br>" . $conn->error;
            }
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
            $insert_query = "INSERT INTO cart (MaGH, MaK, MaSP, TenSP, HinhAnh, SoLuong, Gia) 
                             SELECT '$makh', '$makh', MaSP, TenSP, HinhAnh, 1, GiaGoc*1000-(GiaGoc*1000*(KhuyenMai/100)) 
                             FROM sanpham WHERE MaSP = '$productId'";
            if ($conn->query($insert_query) === TRUE) {
                echo "Sản phẩm đã được thêm vào giỏ hàng!";
            } else {
                echo "Lỗi: " . $insert_query . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Bạn chưa đăng nhập!";
    }

    // Đóng kết nối đến cơ sở dữ liệu
    $conn->close();
} else {
    echo "Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng!";
}
?>
