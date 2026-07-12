<?php
include 'connect.php';

if (isset($_GET['MaNV'])) {
    $this_id = $_GET['MaNV'];

    // Kiểm tra xem có dữ liệu được gửi từ form không
    if (isset($_POST['submit'])) {
        $MaNV_new = $_POST['MaNV'];
        $MaNV_old = $_POST['MaNV_old'];
        $tenNV = $_POST['tenNV'];
        $chucvu = $_POST['chucvu'];
        $sdt = $_POST['sdt'];

        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $query = "UPDATE `nhanvien` SET MaNV='$MaNV_new', TenNV='$tenNV', `Chucvu`='$chucvu', SDT='$sdt' WHERE MaNV='$MaNV_old'";
        $result = mysqli_query($conn, $query);
        $updateSuccess = false;

        // Biến flag để xác định cập nhật thành công
        if ($result) {
            $updateSuccess = true;
            echo "<script>window.location.href='DK_SuaNV.php?MaNV=" . $MaNV_new . "&success=1'</script>";
        } else {
            $errorMessage = "Cập nhật thông tin nhân viên thất bại: " . mysqli_error($conn);
        }
    }

    // Truy vấn để lấy thông tin của nhân viên dựa trên employee_id
    $query = "SELECT * FROM `nhanvien` WHERE MaNV = '$this_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Hiển thị thông tin nhân viên trong các trường nhập liệu để có thể chỉnh sửa
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Chỉnh sửa thông tin nhân viên</title>
            <link rel="stylesheet" href="./assets/css/common.css">
        </head>
        <body>
            <div class="TieuDe">Chỉnh sửa thông tin nhân viên</div>

            <?php
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo '<p style="color: green; font-size: 20px">Cập nhật thông tin nhân viên thành công!</p>';
            } elseif (isset($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
            ?>

            <div class="authen-modal accounts">
                <form method="post" action="" class="tb-sua">
                    <label for="MaNV">Mã nhân viên:</label><br>
                    <input type="text" id="MaNV" name="MaNV" class="form-control" value="<?php echo $row['MaNV']; ?>"><br>
                    <input type="hidden" name="MaNV_old" value="<?php echo $this_id; ?>"><br>
                    <label for="tenNV">Tên Nhân viên:</label><br>
                    <input type="text" id="tenNV" name="tenNV" class="form-control" value="<?php echo $row['TenNV']; ?>"><br><br>
                    <label for="chucvu">Chức vụ:</label><br>
                    <input type="text" id="chucvu" name="chucvu" class="form-control" value="<?php echo $row['ChucVu']; ?>"><br><br>
                    <label for="sdt">SDT:</label><br>
                    <input type="text" id="sdt" name="sdt" class="form-control" value="<?php echo $row['SDT']; ?>"><br><br>
                    <input type="submit" name="submit" value="Cập nhật" onclick="return confirm('Bạn có chắc chắn muốn sửa thông tin cho nhân viên này?')">
                    <button>
                        <a href="DK_Admin.php?page_layout=QLNV" style="text-decoration: none;">Quay về</a>
                    </button>
                </form>
            </div>
        </body>
        </html>
    <?php
    } else {
        echo "Không tìm thấy nhân viên!";
    }
} else {
    echo "Thiếu ID nhân viên!";
}
?>