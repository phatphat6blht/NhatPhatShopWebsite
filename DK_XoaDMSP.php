<?php
include 'connect.php';

session_start();

if(isset($_GET['MaDMSP'])) {
    $delete_id = $_GET['MaDMSP'];
    
    $query = "DELETE FROM DMSP WHERE MaDMSP='$delete_id'";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        $_SESSION['deleteSuccess'] = "Xóa danh mục sản phẩm thành công!";
        header('Location: DK_Admin.php?page_layout=QLDMSP');
        exit(); // Đảm bảo không có mã PHP nào thực thi sau đó
    } else {
        $deleteError = "Xóa DMSP thất bại: " . mysqli_error($conn);
    }
}

?>
