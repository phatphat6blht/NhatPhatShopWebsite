<?php
include 'connect.php';

session_start();

if(isset($_GET['MaNV'])) {
    $delete_id = $_GET['MaNV'];
    
    $query = "DELETE FROM `nhanvien` WHERE MaNV='$delete_id'";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        $_SESSION['deleteSuccess'] = "Xóa nhân viên thành công!";
        header('Location: DK_Admin.php?page_layout=QLNV');
        exit(); // Đảm bảo không có mã PHP nào thực thi sau đó
    } else {
        $deleteError = "Xóa nhân viên thất bại: " . mysqli_error($conn);
    }
}

?>
