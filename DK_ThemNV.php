<?php
include 'connect.php';



    if(isset($_POST['add_submit'])) {
        $MaNV = $_POST['add_MaNV'];
        $tenNV = $_POST['add_tenNV'];
        $chucvu = $_POST['add_chucvu'];
        $sdt = $_POST['add_sdt'];
        
        $query = "INSERT INTO `nhanvien` (MaNV,TenNV, `ChucVu`, SDT) VALUES ('$MaNV','$tenNV', '$chucvu', '$sdt')";
        $result = mysqli_query($conn, $query);
        
        if($result) {
            $addSuccess = true;
            $addMessage = "Thêm nhân viên thành công!";
        } else {
            $addError = "Thêm nhân viên thất bại: " . mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/common.css">
</head>
<body>
    <div class="TieuDe">Thêm thông tin nhân viên</div>
    <?php
    if(isset($addSuccess) && $addSuccess) {
        echo '<p style="color: green;">' . $addMessage . '</p>';
    } elseif(isset($addError)) {
        echo '<p style="color: red;">' . $addError . '</p>';
    }
    ?>
    <div class="authen-modal accounts">
    <form method="post" action="" class="tb-sua">
        <label for="add_MaNV">Mã Nhân viên:</label><br>
        <input type="text" id="add_MaNV" name="add_MaNV" class="form-control" ><br>

        <label for="add_tenNV">Tên Nhân viên:</label><br>
        <input type="text" id="add_tenNV" name="add_tenNV" class="form-control" ><br>
        
        <label for="add_chucvu">Chức vụ:</label><br>
        <input type="text" id="add_chucvu" name="add_chucvu" class="form-control" ><br>
        
        <label for="add_sdt">SDT:</label><br>
        <input type="text" id="add_sdt" name="add_sdt"class="form-control" ><br><br>
        
        <input type="submit" name="add_submit" value="Thêm" onclick="return confirm('Bạn có chắc chắn muốn thêm nhân viên này vào hệ thống?')">
        <button >
        <a href="DK_Admin.php?page_layout=QLNV" style="text-decoration: none;">Quay về</a>
    </button>
    </form>
    </div>

    

</body>
</html>
