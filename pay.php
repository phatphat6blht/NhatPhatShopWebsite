<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="assets/owlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlCarousel/assets/owl.theme.default.min.css">
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="./assets/css/pay.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="assets/owlCarousel/owl.carousel.min.js"></script>
</head>

<body>
<?php
    session_start();
?>


<!-- include -->
<?php include 'login.php';

?>
<?php include 'register.php';

?>




    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="index.php" class="header__logo">
                    <img  src="./assets/img/slider/slide-logo.png" alt="" class="imgL">
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                        <a class="header__search-icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="header__account">
                <?php
                        // if(!empty($_GET['act'])) {
                        //     echo '<a href="" class="header__account-login">'.$_GET['act'].'</a>';
                        //     echo '<a href="logOut.php" class="header__account-register">Đăng xuất</a>';
                        //     }
                        // else {
                        //     echo '<a href="#my-Login" class="header__account-login">Đăng Nhập</a>';
                        //     echo '<a href="#my-Register" class="header__account-register">Đăng Kí</a>';
                        //     }


                        if(!empty($_SESSION['userName'])) {
                            echo '<a href="userAccount" class="header__account-login">'.$_SESSION['userName'].'</a>';
                            echo '<a href="logOut.php" class="header__account-register">Đăng xuất</a>';
                            }
                        else {
                            echo '<a href="#my-Login" class="header__account-login">Đăng Nhập</a>';
                            echo '<a href="#my-Register" class="header__account-register">Đăng Kí</a>';
                            }
                        
                    ?>
                </div>
                 <!-- Cart -->
                 <?php include 'cartMini.php'; ?>  
            </div>
        </div>
        <!-- Menu -->
        <?php
include 'connect.php'; // Bao gồm tệp connect.php để kết nối cơ sở dữ liệu

$sql = "SELECT * FROM DMSP"; // Truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm
$result = $conn->query($sql);
?>

<div class="header__nav">
    <ul class="header__nav-list">
        <!-- Các phần tử khác ở đây -->
        
        <li class="header__nav-item">
                    <a href="index.php" class="header__nav-link">Trang chủ</a>
                </li>

        <li class="header__nav-item">
            <a href="#" class="header__nav-link">Sản Phẩm</a>
            <div class="sub-nav-wrap wide dm">
                <?php
                $count = 0; // Biến đếm số lượng sản phẩm đã in
                while ($row = $result->fetch_assoc()) {
                    // In ra tối đa 5 sản phẩm mỗi lần
                    if ($count % 3== 0) {
                        echo '<ul class="sub-nav">';
                    }
                    echo '<li class="sub-nav__item">';
                    echo '<a href="listProduct.php" class="sub-nav__link">' . $row['TenDMSP'] . '</a>';
                    echo '</li>';

                    $count++;

                    // Đóng thẻ ul nếu đã in đủ 5 sản phẩm hoặc hết sản phẩm
                    if ($count % 3 == 0 || $count == $result->num_rows) {
                        echo '</ul>';
                    }
                }
                ?>
            </div>
        </li>

             <li class="header__nav-item">
                    <a href="cart.php" class="header__nav-link">Giỏ hàng</a>
                </li>
                <li class="header__nav-item">
                    <a href="news.php" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="contact.php" class="header__nav-link">Liên Hệ</a>
                </li>
    </ul>
</div>

    </div>

   
    <?php
include 'connect.php';
session_start();

$ErrorMessages = array();
$oldValues = array();

// Kiểm tra xem biểu mẫu đã được gửi chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra họ tên
    if (empty($_POST["userName"])) {
        $ErrorMessages["userName"] = "Vui lòng nhập họ tên";
    } else {
        $oldValues["userName"] = $_POST["userName"];
    }

    // Kiểm tra địa chỉ
    if (empty($_POST["address"])) {
        $ErrorMessages["address"] = "Vui lòng nhập địa chỉ";
    } else {
        $oldValues["address"] = $_POST["address"];
    }

    // Kiểm tra email
    if (empty($_POST["email"])) {
        $ErrorMessages["email"] = "Vui lòng nhập email";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $ErrorMessages["email"] = "Email không hợp lệ";
        } else {
            $oldValues["email"] = $email;
        }
    }

    // Kiểm tra số điện thoại
    if (empty($_POST["phone"])) {
        $ErrorMessages["phone"] = "Vui lòng nhập số điện thoại";
    } else {
        $phone = $_POST["phone"];
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $ErrorMessages["phone"] = "Số điện thoại không hợp lệ";
        } else {
            $oldValues["phone"] = $phone;
        }
    }

    // Lưu ghi chú cho đơn hàng (không cần kiểm tra)
    $oldValues["note"] = isset($_POST["note"]) ? $_POST["note"] : "";

    // Kiểm tra xem có lỗi không
    if (empty($ErrorMessages)) {
        // Nếu không có lỗi, thực hiện câu lệnh INSERT
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];

        // Chuẩn bị câu lệnh SQL với các placeholder để tránh SQL injection
        $sql = "INSERT INTO DonHang (TenK, email, sdt, address, note) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Ràng buộc các tham số vào câu lệnh
        mysqli_stmt_bind_param($stmt, "sssss", $userName, $email, $phone, $address, $note);

        // Thực thi câu lệnh
        $result = mysqli_stmt_execute($stmt);

        // Kiểm tra xem việc thực thi có thành công không
        if ($result) {
            echo "<script>alert('Đặt hàng thành công!')</script>";
            echo "<script>window.location.href='cart.php'</script>";
        } else {
            echo '<script>alert("Đặt hàng thất bại! ' . mysqli_error($conn) . '")</script>';
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    }
}

// Truy vấn thông tin người dùng từ cơ sở dữ liệu
$sql = "SELECT * FROM accounts WHERE userName = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $_SESSION['userName']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Kiểm tra xem có dòng nào được tìm thấy không
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
?>


<div class="main">
    <div class="grid wide">
        <div class="row">
            <div class="col l-7 m-12 s-12">
                <!-- form -->
                
                    <div class="pay-information">
                    <div class="pay__heading">Thông tin thanh toán</div>
                        <form action="pay.php" method="post" name="form-order" >
                        <div class="form-group">
                            <label for="account" class="form-label">Họ Tên *</label>
                            <p>.</p>
                            <div class="error"><?php echo isset($ErrorMessages["userName"]) ? $ErrorMessages["userName"] : ""; ?></div>
                            <input id="userName" name="userName" type="text" class="form-control" value="<?php echo isset($oldValues["userName"]) ? htmlspecialchars($oldValues["userName"]) : htmlspecialchars($row['userName']); ?>">
                            <p>.</p>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Địa chỉ *</label>
                            <p>.</p>
                            <div class="error"><?php echo isset($ErrorMessages["address"]) ? $ErrorMessages["address"] : ""; ?></div>
                            <input id="address" name="address" type="text" class="form-control" value="<?php echo isset($oldValues["address"]) ? htmlspecialchars($oldValues["address"]) : htmlspecialchars($row['address']); ?>">
                            <p>.</p>
                        </div>
    
                        <div class="form-group">
                            <label  for="email" class="form-label">Email *</label>
                            <p>.</p>
                            <div class="error"><?php echo isset($ErrorMessages["email"]) ? $ErrorMessages["email"] : ""; ?></div>
                            <input id="email" name="email" type="text" class="form-control" value="<?php echo isset($oldValues["email"]) ? htmlspecialchars($oldValues["email"]) : htmlspecialchars($row['email']); ?>">
                            <p>.</p>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Số điện thoại *</label>
                            <p>.</p>
                            <div class="error"><?php echo isset($ErrorMessages["phone"]) ? $ErrorMessages["phone"] : ""; ?></div>
                            <input id="phone" name="phone" type="text" class="form-control" value="<?php echo isset($oldValues["phone"]) ? htmlspecialchars($oldValues["phone"]) : htmlspecialchars($row['phone']); ?>">
                            <p>.</p>
                        </div>
                        <div class="form-group">
                            <label for="note" class="form-label">Ghi chú cho đơn hàng</label>
                            <textarea class="form-control" name="note" id="note" cols="30" rows="5"><?php echo isset($oldValues["note"]) ? htmlspecialchars($oldValues["note"]) : ""; ?></textarea>

                        </div>
                        <div class="form-group">
                        <p>.</p>
                        <button type="submit" class="btn btn--default" name ="submit-order">Đặt hàng</button>
                        </div>
                    </form>
                    </div>
                    
             <?php }?>   

        <!-- form -->

            </div>
                <div class="col l-5 m-12 s-12">
                    <div class="pay-order">
                        <div class="pay__heading">Đơn hàng của bạn</div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                               Áo sơ mi kẻ dọc</div>
                               <div class="main__pay-amount">
                                1
                            </div>
                            <div class="main__pay-price">
                                45.000 ₫
                            </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                áo khoác mùa đông </div>
                            <div class="main__pay-amount">
                                2
                            </div>
                            <div class="main__pay-price">
                               476.000
                            </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Áo phông xanh </div>
                                <div class="main__pay-amount">
                                    2
                                </div>
                            <div class="main__pay-price">
                                210.000 ₫
                            </div>
                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text">
                                Giao hàng
                            </div>
                            <div class="main__pay-text">
                                Giao hàng miễn phí
                            </div>

                        </div>
                        <div class="pay-info">
                            <div class="main__pay-text special">
                                Tổng thành tiền</div>
                            <div class="main__pay-price payY">
                                1,120,000 ₫
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="footer">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Menu</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Thời trang</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Phụ kiện </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">dày dép</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">quần áo</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link"> Sữa rửa mặt </a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Hỗ trợ khách hàng</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Giải đáp thắc mắc</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách đổi trả</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Liên hệ</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">
                                    <i class="fas fa-map-marked-alt"></i> Đường Z 115
                                    Xã Quyết Thắng, Thành Phố Thái Nguyên, Thái Nguyên
                                </span>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-phone"></i> 0333588937
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-envelope"></i> NguyenKeLuong@gmail.com
                            </a>
                        </li>
                        <li class="footer__item">
                        <div class="social-group">
                                <a href="https://www.facebook.com/profile.php?id=100040227180867&locale=vi_VN" class="social-item"><i class="fab fa-facebook-f"></i>
                                    </a>
                                <a href="https://twitter.com/LuongisDev" class="social-item"><i class="fab fa-twitter"></i>
                                    </a>
                                <a href="https://www.pinterest.com/21lngn/" class="social-item"><i class="fab fa-pinterest-p"></i>
                                    </a>
                                <a href="https://nam899186.invisionapp.com/teams/account?next=/homepage" class="social-item"><i class="fab fa-invision"></i>
                                    </a>
                                <a href="https://www.youtube.com/channel/UCUxxrm7ghBkuXLMLwBZXwcQ" class="social-item"><i class="fab fa-youtube"></i>  
                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Đăng kí</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">Đăng ký để nhận được được thông tin ưu đãi mới nhất từ chúng tôi.</span>
                        </li>
                        <li class="footer__item">
                            <div class="send-email">
                                <input class="send-email__input" type="email" placeholder="Nhập Email...">
                                <a href="#" class="send-email__link">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span class="footer__text"> &copy Bản quyền thuộc về <a class="footer__link" href="#"> Nguyễn Kế Lương</a></span>
        </div>
    </div>
    
    <!-- Modal Form -->
   


<div class="ModalForm">
    <div class="modal" id="my-Register">
        <a href="#" class="overlay-close"></a>
        <div class="authen-modal register">
            <h3 class="authen-modal__title">Đăng Kí</h3>

            <form action="pay.php#my-Register" method="post" name="register-form">
                <div class="form-group">
                    <label for="register-account" class="form-label">Họ Tên</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-userName"]) ? $ErrorMessages["form-userName"] : "" ?></div>
                    <input id="register-account" name="form-userName" type="text" class="form-control" value="<?php echo isset($oldValues['form-userName']) ? htmlspecialchars($oldValues['form-userName']) : ''; ?>">
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="register-email" class="form-label">Tài khoản Email *</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-email"]) ? $ErrorMessages["form-email"] : "" ?></div>
                    <input id="register-email" name="form-email" type="text" class="form-control" value="<?php echo isset($oldValues['form-email']) ? htmlspecialchars($oldValues['form-email']) : ''; ?>">
                    <div>.</div>
                    
                </div>
                <div class="form-group">
                    <label for="register-password" class="form-label">Mật khẩu *</label>

                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-password"]) ? $ErrorMessages["form-password"] : "" ?></div>
                    <input id="register-password" name="form-password" type="password" class="form-control" value="<?php echo isset($oldValues['form-password']) ? htmlspecialchars($oldValues['form-password']) : ''; ?>">
                    <p>.</p>

                </div>
                <div class="form-group">
                    <label for="confirm-password" class="form-label">Nhập lại mật khẩu *</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["confirm-password"]) ? $ErrorMessages["confirm-password"] : "" ?></div>
                    <input id="confirm-password" name="confirm-password" type="password" class="form-control" value="<?php echo isset($oldValues['confirm-password']) ? htmlspecialchars($oldValues['confirm-password']) : ''; ?>">
                    <p>.</p>

                </div>

                <div class="authen__btns">
                    <button type="submit" class="btn btn--default" name="register-form">Đăng Ký</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="my-Login">
    <a href="#" class="overlay-close"></a>
    <form action="pay.php#my-Login" method="post" name ="login-form">
        <div class="authen-modal login">
            <h3 class="authen-modal__title">Đăng Nhập</h3>
            <div class="form-group">
                <label for="login-account" class="form-label">Địa chỉ email*</label>
                <p>.</p>
                <div class="error"><?php echo isset($ErrorMessagesLogin["form-email-login"]) ? $ErrorMessagesLogin["form-email-login"] : "" ?></div>
                <input id="login-account" name="form-email-login" type="text" class="form-control" value="<?php echo isset($oldValuesLogin['form-email-login']) ? htmlspecialchars($oldValuesLogin['form-email-login']) : ''; ?>">
                <a>.</a>
            </div>

            <div class="form-group">
                <label for="login-password" class="form-label">Mật khẩu *</label>
                <p>.</p>
                <div class="error"><?php echo isset($ErrorMessagesLogin["passwordlogin"]) ? $ErrorMessagesLogin["passwordlogin"] : "" ?></div>
                <input id="login-password" name="passwordlogin" type="password" class="form-control">
                <p>.</p>
            </div>

            <div class="authen__btns">
                <button type="submit" class="btn btn--default" name ="login-form">Đăng Nhập</button>
                <input type="checkbox" class="authen-checkbox">
                <label class="form-label">Ghi nhớ mật khẩu</label>

            <!-- </div>
            
                <a class="authen__link">Quên mật khẩu ?</a>

        </div> -->
    </form>
</div>

<!-- 
        <div class="up-top" id="upTop" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div> -->

    </div>
    <!-- Sccipt for owl caroucel -->

    <!-- Script common -->
    <script src="./assets/js/commonscript.js"></script>


</body>

</html>