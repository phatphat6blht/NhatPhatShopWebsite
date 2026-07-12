<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
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
    <link rel="stylesheet" type="text/css" href="./assets/css/cart.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="assets/owlCarousel/owl.carousel.min.js"></script>
</head>



<?php
    session_start();
?>


<!-- include -->
<?php include 'login.php';

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
    

    <script>
    function showCartUpdateNotification() {
        document.getElementById("cartUpdateNotification").style.display = "block";
        setTimeout(function() {
            document.getElementById("cartUpdateNotification").style.display = "none";
        }, 5000); // 3 giây sau đó ẩn thông báo
    }



    function updateCart(event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của nút

    // Thực hiện các thao tác cập nhật giỏ hàng ở đây

    // Hiển thị thông báo
    showCartUpdateNotification();
}

</script>

    
    <div class="main">
    <div class="grid wide">
    <div class="main__notify" id="cartUpdateNotification" style="display: none;">
    <div class="main__notify-icon">
        <i class="fas fa-check" style="font-size:20px">Giỏ hàng đã được cập nhật</i>
    </div>
</div>

<div class="row">
    <div class="col l-8 m-12 s-12">
        <div class="main__cart">
            <div class="row title">
                <div class="col l-1 m-1 s-0">Chọn</div>
                <div class="col l-4 m-4 s-8">Sản phẩm</div>
                <div class="col l-2 m-2 s-0">Giá</div>
                <div class="col l-2 m-2 s-0">Số lượng</div>
                <div class="col l-2 m-2 s-4">Tổng</div>
                <div class="col l-1 m-1 s-0">Xóa</div>
            </div>
            <?php
            // Kiểm tra xem khách hàng đã đăng nhập hay chưa
            $isLoggedIn = isset($_SESSION['id']);

            if (!$isLoggedIn) {
                // Hiển thị thông báo giỏ hàng rỗng
                echo '<div class="row">Bạn chưa đăng nhập, giỏ hàng trống.</div>';
            } else {
                // Lấy MaKH từ session
                $makh = $_SESSION['id'];

                // Truy vấn cơ sở dữ liệu để lấy dữ liệu giỏ hàng theo MaKH
                $sql = "SELECT * FROM cart WHERE MaK = '$makh'";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="row item">
                        <div class="col l-1 m-1 s-0">
                            <input type="checkbox" name="a">
                        </div>
                        <div class="col l-4 m-4 s-8">
                            <div class="main__cart-product">
                                <img src="<?php echo $row['HinhAnh']; ?>" alt="">
                                <div class="name"><?php echo $row['TenSP'];?></div>
                            </div>
                        </div>
                        <div class="col l-2 m-2 s-0">
                            <div class="main__cart-price"><?php echo number_format($row['Gia']); ?> đ</div>
                        </div>
                        <div class="col l-2 m-2 s-0">
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="<?php echo $row['SoLuong']; ?>">
                                <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                            </div>
                        </div>
                        <div class="col l-2 m-2 s-4">
                            <div class="main__cart-price"><?php echo number_format($row['Gia'] * $row['SoLuong']); ?> đ</div>
                        </div>
                        <div class="col l-1 m-1 s-0">
                            <span class="main__cart-icon">
                                <a href="cart.php" class="order-close" onclick="return confirmAndRemove('<?php echo $row['MaSP']; ?>')">
                                    <i class="far fa-times-circle"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <a href="cart.php" class="btn btn--default" style="margin-bottom: 30px" onclick="updateCart(event)">
            Cập nhật giỏ hàng 
        </a>
    </div>
    <div class="col l-4 m-12 s-12">
        <div class="main__pay">
            <div class="main__pay-title">Tổng số lượng: <span id="totalItems">0</span></div>
            <div class="pay-info">
                <div class="main__pay-text">Tổng thành tiền</div>
                
                <div id="totalMoney" class="main__pay-price">0 ₫</div>
            </div>
            <a href="pay.php" class="btn btn--default orange" onclick=" return checkSelectedProducts()">Tiến hành thanh toán</a>
            <div class="main__pay-title">Phiếu ưu đãi</div>
            <input type="text" class="form-control">
            <div class="btn btn--default">Áp dụng</div>

        </div>

    </div>
</div>

<script>
    function calculateTotal() {
        var checkboxes = document.getElementsByName('a');
        var totalMoney = 0;
        var totalItems = 0;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                var row = checkboxes[i].closest('.item');
                var price = row.querySelector('.main__cart-price').textContent;
                price = price.replace(' đ', '').replace(/\D/g, ''); // Lấy giá tiền, loại bỏ ký tự đ và dấu phẩy
                var quantity = row.querySelector('.input-qty').value;
                totalMoney += parseInt(price) * parseInt(quantity);
                totalItems += parseInt(quantity);
            }
        }

        // Cập nhật tổng tiền trên giao diện
        document.getElementById('totalMoney').textContent = numberWithCommas(totalMoney) + ' đ';
        // Cập nhật tổng số lượng sản phẩm trên giao diện
        document.getElementById('totalItems').textContent = totalItems;
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Gọi hàm tính tổng khi có sự kiện thay đổi checkbox
    var checkboxes = document.getElementsByName('a');
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', calculateTotal);
    }

    function checkSelectedProducts() {
        var checkboxes = document.getElementsByName('a');
        var atLeastOneChecked = false;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                atLeastOneChecked = true;
                break;
            }
        }

        if (!atLeastOneChecked) {
            alert('Vui lòng chọn ít nhất một sản phẩm để thanh toán.');
            return false; // Ngăn chặn chuyển đến trang thanh toán
        }
    }
</script>
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

            <form action="cart.php#my-Register" method="post" name="register-form">
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
    <form action="cart.php#my-Login" method="post" name ="login-form">
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

    </div>
    <!-- Sccipt for owl caroucel -->

    <!-- Script common -->
    <script src="./assets/js/commonscript.js"></script>


</body>

</html>