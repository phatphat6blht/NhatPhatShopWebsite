<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="./assets/css/product.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/productSale.css">

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
    <div class="main">

    <div class="main">
        <div class="grid wide">
            <div class="main__taskbar">
                <div class="main__breadcrumb">
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Cửa hàng</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Hãng DHC</a>
                    </div>
                </div>
                <div class="main__sort">
                    <h3 class="sort__title">
                        Hiển thị kết quả theo
                    </h3>
                    <select class="sort__select"> name="" id="">
                        <option value="1">Thứ tự mặc định</option>
                        <option value="2">Mức độ phổ biến</option>
                        <option value="3">Điểm đánh giá</option>
                        <option value="4">Mới cập nhật</option>
                        <option value="5">Giá : Cao đến thấp</option>
                        <option value="6">Giá Thấp đến cao</option>
                    </select>
                </div>
            </div>
            <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                        <?php

                            $sql = "SELECT * FROM sanpham LIMIT 12 OFFSET 17";
                                    $result = $conn->query($sql);

                                    // Kiểm tra và hiển thị dữ liệu sản phẩm
                            if ($result->num_rows > 0) {
                                        // Bắt đầu vòng lặp để hiển thị từng sản phẩm
                                        while($row = $result->fetch_assoc()) {
                                            $giaGoc = $row['GiaGoc'];
                                            $khuyenMai = $row['KhuyenMai'];
                                            
                            
                                            $giaGocMoi = $giaGoc * 1000;
                                            
                                            if ($khuyenMai == 0) {
                                                $giaHienTai = $giaGocMoi;
                                            } else {
                                                
                                                $giaHienTai = $giaGocMoi * ($khuyenMai / 100);
                                            }
                                        ?>
                                        <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(<?php echo $row['HinhAnh']; ?>);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name"><?php echo $row['TenSP']; ?></h3>
                                                <div class="product__price">
                                                    <div class="price__old"><?php echo number_format($giaGocMoi); ?></div>
                                                    <div class="price__new"><?php echo number_format($giaHienTai); ?> <span class="price__unit">đ</span></div>
                                                </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">30%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php?id=<?php echo $row['MaSP'];?>" class="viewDetail">Xem chi tiết</a>
                                <a href="#" class="addToCart" data-product-id="<?php echo $row['MaSP']; ?>">Thêm vào giỏ</a>

                            </div>
                            </div>
                            <?php
                            }
                            } else {
                            echo "Không có sản phẩm nào được tìm thấy";
                            }
                            ?>


                            <!--  -->
                        </div>
                    </div>


 <script>
document.addEventListener("DOMContentLoaded", function() {
    var addToCartButtons = document.querySelectorAll('.addToCart');
    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var productId = button.getAttribute('data-product-id');
            addToCart(productId);
        });
    });

    function addToCart(productId) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'addCart.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText); // Hiển thị thông báo
                location.reload(); // Load lại trang sau khi hiển thị thông báo
            }
        };
        xhr.send('product_id=' + productId);
    }
});
</script>
                    </div>
                
                <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listProduct.php" class="pagination__link">1</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">2</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">3</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">4</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">5</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">...</a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listProduct.php" class="pagination__link">14</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listProduct.php" class="pagination__link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
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

            <form action="listproduct.php#my-Register" method="post" name="register-form">
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
    <form action="listProduct.php#my-Login" method="post" name ="login-form">
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
    <!-- Script common -->
    <!-- <script src="./assets/js/commonscript.js"></script> -->
</body>

</html>