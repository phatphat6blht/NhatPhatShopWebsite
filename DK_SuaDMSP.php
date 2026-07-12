<?php
include 'connect.php';

if (isset($_GET['MaDMSP'])) {
    $this_id = $_GET['MaDMSP'];

    // Kiểm tra xem có dữ liệu được gửi từ form không
    if (isset($_POST['submit'])) {
        $MaDMSP_new = $_POST['MaDMSP'];
        $MaDMSP_old = $_POST['MaDMSP_old'];
        $TenDMSP = $_POST['TenDMSP'];
      

        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $query = "UPDATE DMSP SET MaDMSP='$MaDMSP_new', TenDMSP='$TenDMSP' WHERE MaDMSP='$MaDMSP_old'";
        $result = mysqli_query($conn, $query);
        $updateSuccess = false;

        // Biến flag để xác định cập nhật thành công
        if ($result) {
            $updateSuccess = true;
            echo "<script>window.location.href='DK_SuaDMSP.php?MaDMSP=" . $MaDMSP_new . "&success=1'</script>";
        } else {
            $errorMessage = "Cập nhật thông tin danh mục sản phẩm thất bại: " . mysqli_error($conn);
        }
    }


    $query = "SELECT * FROM DMSP WHERE MaDMSP = '$this_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Chỉnh sửa thông tin danh mục sản phẩm</title>
            <link rel="stylesheet" href="./assets/css/common.css">
        </head>
        <body>
            <div class="TieuDe">Chỉnh sửa thông tin danh mục sản phẩm</div>

            <?php
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo '<p style="color: green; font-size: 20px">Cập nhật thông tin danh mục sản phẩm thành công!</p>';
            } elseif (isset($errorMessage)) {
                echo '<p style="color: red;">' . $errorMessage . '</p>';
            }
            ?>

            <div class="authen-modal accounts">
                <form method="post" action="" class="tb-sua">
                    <label for="MaDMSP">Mã danh mục sản phẩm:</label><br>
                    <input type="text" id="MaDMSP" name="MaDMSP" class="form-control" value="<?php echo $row['MaDMSP']; ?>"><br>
                    <input type="hidden" name="MaDMSP_old" value="<?php echo $this_id; ?>"><br>
                    <label for="TenDMSP">Tên danh mục sản phẩm:</label><br>
                    <input type="text" id="TenDMSP" name="TenDMSP" class="form-control" value="<?php echo $row['TenDMSP']; ?>"><br><br>
                    <input type="submit" name="submit" value="Cập nhật" onclick="return confirm('Bạn có chắc chắn muốn sửa thông tin cho danh mục sản phẩm này?')">
                    <button>
                        <a href="DK_Admin.php?page_layout=QLDMSP" style="text-decoration: none;">Quay về</a>
                    </button>
                </form>
            </div>
        </body>
        </html>
    <?php
    } else {
        echo "Không tìm thấy danh mục sản phẩm!";
    }
} else {
    echo "Thiếu ID danh mục sản phẩm!";
}
?>