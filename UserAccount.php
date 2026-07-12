


<?php
include 'connect.php';
session_start();

    
    // Kiểm tra xem có dữ liệu được gửi từ form không
    if(isset($_POST['submit'])) {
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $phone= $_POST['phone'];
        $birthday= $_POST['birthday'];
        $address= $_POST['address'];
        
        // Cập nhật dữ liệu vào cơ sở dữ liệu
        $sql = "UPDATE accounts SET userName='$userName', email='$email', phone='$phone' , birthday='$birthday',address='$address' WHERE userName = '{$_SESSION['userName']}'";
        $result = mysqli_query($conn, $sql);
        
        $updateSuccess = false; // Biến flag để xác định cập nhật thành công
        
        if($result) {
            $updateSuccess = true;
            $successMessage = "Cập nhật thông tin tài khoản thành công!";
        } else {
            $errorMessage = "Cập nhật thông tin tài khoản thất bại: " . mysqli_error($conn);
        }
    }
    
    // Truy vấn để lấy thông tin của nhân viên dựa trên employee_id
    $sql = "SELECT * FROM accounts WHERE userName = '{$_SESSION['userName']}'";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Hiển thị thông tin nhân viên trong các trường nhập liệu để có thể chỉnh sửa
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Chỉnh sửa thông tin tài khoản</title>
            <link rel="stylesheet" href="./assets/css/common.css">
            

        </head>
        <body>


        

           <div class ="TieuDe">Chỉnh sửa thông tin tài khoản</div>
            <?php
            if(isset($updateSuccess) && $updateSuccess) {
                echo '<p style="color: green; font-size: 18px">' . $successMessage . '</p>';
            } elseif(isset($errorMessage)) {
                echo '<p style="color: font-size: 18px red;">' . $errorMessage . '</p>';
            }
            ?>
           <div class="authen-modal accounts">
            <form method="post" action="" class="tb-sua">
                <label for="userName">Tên tài khoản:</label><br>
                <input type="text" id="userName" class="form-control" name="userName" value="<?php echo $row['userName']; ?>"><br>

                <label for="email">Email:</label><br>
                <input type="text" id="Email" name="email" class="form-control"  value="<?php echo $row['email']; ?>"><br>
                
                <label for="phone">SDT:</label><br>
                <input type="text" id="phone" name="phone" class="form-control"  value="<?php echo $row['phone']; ?>"><br>
                
                <label for="birthday">Năm sinh:</label><br>
                <input type="text" id="birthday" name="birthday" class="form-control"  value="<?php echo $row['birthday']; ?>"><br>

                <label for="address">Địa chỉ:</label><br>
                <input type="text" id="address" name="address" class="form-control"  value="<?php echo $row['address']; ?>"><br><br>
            
                
                <!-- <input type="submit" name="submit" value="Cập nhật"> -->
                <input type="submit" name="submit" value="cập nhật" onclick="return confirm('Bạn có chắc chắn muốn sửa thông tin cho nhân viên này?')">

                <button >
                    <a href="index.php?page_layout=QLNV" style="text-decoration: none;">Quay về</a>
                </button>
            </form>

           </div>
        </body>
        </html>
<?php 
    } else {
        echo "Không tìm thấy tài khoản!";
    }

?>

