<?php
include 'connect.php';



    if(isset($_POST['add_submit'])) {
        $MaDMSP = $_POST['add_MaDMSP'];
        $TenDMSP = $_POST['add_TenDMSP'];
       
        
        $query = "INSERT INTO DMSP(MaDMSP,TenDMSP) VALUES ('$MaDMSP','$TenDMSP')";
        $result = mysqli_query($conn, $query);
        
        if($result) {
            $addSuccess = true;
            $addMessage = "Thêm danh mục sản phẩm thành công!";
        } else {
            $addError = "Thêm danh mục sản phẩm thất bại , sản phẩm đã tồn tại trong cơ sở  dữ liệu: " . mysqli_error($conn);

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục sản phẩm</title>
    <link rel="stylesheet" href="./assets/css/common.css">
</head>
<body>
    <div class="TieuDe">Thêm danh mục sản phẩm</div>
    <?php
    if(isset($addSuccess) && $addSuccess) {
        echo '<p style="color: green; font-size: 20px">' . $addMessage . '</p>';
    } elseif(isset($addError)) {
        echo '<p style="color: red;">' . $addError . '</p>';
    }
    ?>
    <div class="authen-modal accounts">
    <form method="post" action="" class="tb-sua">
        <label for="add_MaDMSP">Mã DMSP:</label><br>
        <input type="text" id="add_MaDMSP" name="add_MaDMSP" class="form-control" ><br><br>

        <label for="add_TenDMSP">Tên DMSP:</label><br>
        <input type="text" id="add_TenDMSP" name="add_TenDMSP" class="form-control" ><br><br>

        
        <input type="submit" name="add_submit" value="Thêm" onclick="return confirm('Bạn có chắc chắn muốn thêm danh mục sản phẩm này vào hệ thống?')">
        <button >
        <a href="DK_Admin.php?page_layout=QLDMSP" style="text-decoration: none;">Quay về</a>
    </button>
    </form>
    </div>

    

</body>
</html>
