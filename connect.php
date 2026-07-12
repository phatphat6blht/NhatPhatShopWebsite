<?php
$serverName = "database-1.cv2gesi2cfwm.ap-southeast-2.rds.amazonaws.com"; // Endpoint của AWS RDS
$username = "admin";  // Tài khoản MySQL
$password = "123456abcZ@";   // Mật khẩu MySQL
$database = "db_fashionshop";    // Tên database
$port = 3306;              // Cổng mặc định MySQL trên AWS

// Nếu bạn muốn kết nối đến MySQL trên máy ảo (localhost) sử dụng Xampp hãy sử dụng các thông tin sau:
// $serverName = "192.168.2.145"; // IP của máy ảo
// $username = "root";            // Tài khoản MySQL
// $password = "";       // Mật khẩu MySQL
// $database = "db_fashionshop";        // Tên database
// $port = 3306;                  // Cổng MySQL


// Kết nối đến MySQL
$conn = new mysqli($serverName, $username, $password, $database, $port);

// Kiểm tra kết nối xem có thành công không
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
// echo "Kết nối cơ sở dữ liệu thành công!";
echo "<script>console.log('PHP connect to MySQL: Kết nối cơ sở dữ liệu thành công!');</script>";
?>





