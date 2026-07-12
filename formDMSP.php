<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form DMSP</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>

<?php
include 'connect.php';
?>
<div class="dkdmsp" style="margin-top: 160px; margin-left: 20px">
<table border="1" class="tb_nv">

    <caption>Danh sách danh mục sản phẩm</caption>
    <tr style="background-color : aqua">
        <th class="size-tb">Mã DMSP</th>
        <th>Tên DMSP</th>
        <th colspan="2">Thao Tác</th>
    </tr>

<?php 
$sql ="SELECT * FROM DMSP";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row['MaDMSP']; ?></td>
    <td><?php echo $row['TenDMSP']; ?></td>
 
    <td>
        <button><a href="DK_SuaDMSP.php?MaDMSP=<?php echo $row['MaDMSP']; ?>">Sửa</a></span></button>
    </td>
    <td>
        <!-- Thêm form xác nhận trước khi xóa -->
        <form method="POST" action="DK_XoaDMSP.php?MaDMSP=<?php echo $row['MaDMSP']; ?>">
            <input type="hidden" name="MaDMSP" value="<?php echo $row['MaDMSP']; ?>">
            <input type="submit" name="submit" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục sản phẩm này?')">
        </form>
    </td>
</tr>
</div>

<?php 
    }
}
?>

</table>
<button style="margin-top: 10px; font-size: 20px;">
    <a href="DK_ThemDMSP.php">Thêm DMSP</a>
</button>

<div style="margin-top : 30px"></div>


<?php


// Hiển thị thông báo nếu có
if (isset($_SESSION['deleteSuccess'])) {
    echo "<script>alert('" . $_SESSION['deleteSuccess'] . "')</script>";
    unset($_SESSION['deleteSuccess']); // Xóa session sau khi hiển thị
}
?>

</body>
</html>
