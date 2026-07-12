<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form nhân viên</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>

<?php
include 'connect.php';
?>
<div class="dkdmsp" style="margin-top: 160px; margin-left: 20px">
<table border="1" class="tb_nv">
<caption>Danh sách nhân viên</caption>
<tr style="background-color : aqua">
    <th class="size-tb">Mã Nhân viên</th>
    <th>Tên Nhân viên</th>
    <th>Chức vụ</th>
    <th>SDT</th>
    <th colspan="3">Thao tác</th>
</tr>

<?php 
$sql ="SELECT * FROM `nhanvien`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row['MaNV']; ?></td>
    <td><?php echo $row['TenNV']; ?></td>
    <td><?php echo $row['ChucVu']; ?></td>
    <td><?php echo $row['SDT']; ?></td>
    <td>
        <button><a href="DK_SuaNV.php?MaNV=<?php echo $row['MaNV']; ?>">Sửa</a></span></button>
    </td>
    <td>
        <!-- Thêm form xác nhận trước khi xóa -->
        <form method="POST" action="DK_XoaNV.php?MaNV=<?php echo $row['MaNV']; ?>">
            <input type="hidden" name="MaNV" value="<?php echo $row['MaNV']; ?>">
            <input type="submit" name="submit" value="Xóa" onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên này?')">
        </form>
    </td>
</tr>
<?php 
    }
}
?>

</table>
<button style="margin-top: 10px; font-size: 20px;">
    <a href="DK_ThemNV.php">Thêm nhân viên</a>
</button>

<?php
// Hiển thị thông báo nếu có
if (isset($_SESSION['deleteSuccess'])) {
    echo "<script>alert('" . $_SESSION['deleteSuccess'] . "')</script>";
    unset($_SESSION['deleteSuccess']); // Xóa session sau khi hiển thị
}
?>

</body>
</html>
