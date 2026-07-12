<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhất Phát Shop</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <link href="./assets/owlCarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link href="./assets/css/home.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="./assets/owlCarousel/owl.carousel.min.js"></script>

</head>

<body>



<!-- include -->
<?php include 'login.php';

?>
<?php include 'register.php';

?>


<?php

// if(isset($_SESSION['userName']) && $_SESSION['userName'] === "LuongAdmin") {
//     header('Location:DK_Admin.php');
//     exit; // Đảm bảo không có mã HTML hoặc mã PHP nào chạy sau lệnh chuyển hướng
// }


?>



    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="" class="header__logo">
                
                    <img  src="./assets/img/slider/slide-logo.png" alt="" class="imgL">
                    
                    
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text"class="header__search-input" placeholder="Tìm kiếm">
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
                            echo '<a href="UserAccount.php" class="header__account-login">'.$_SESSION['userName'].'</a>';
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
        <!-- Slider -->
        <div class="main__slice">
            <div class="slider">
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-7.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.php" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-8.jfif)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.php" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-11.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Giảm giá 30%</h1>
                            <p>Giảm giá cực sốc trong tháng 2!</p>
                            <a href="listProduct.php" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- controls  -->
            <div class="controls">
                <div class="prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!-- indicators -->
            <div class="indicator">
            </div>
        </div>
        <!--Product Category -->
        <div class="main__tabnine">
            <div class="grid wide">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        Bán Chạy
                    </div>
                    <div class="tab-item">
                        Giá tốt
                    </div>
                    <div class="tab-item">
                        Mới Nhập
                    </div>
                    <div class="line"></div>
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                        <?php

                            $sql = "SELECT * FROM sanpham LIMIT 12";
                                    $result = $conn->query($sql);

                                    // Kiểm tra và hiển thị dữ liệu sản phẩm
                            if ($result->num_rows > 0) {
                                        // Bắt đầu vòng lặp để hiển thị từng sản phẩm
                            while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(<?php echo $row['HinhAnh']; ?>);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name"><?php echo $row['TenSP']; ?></h3>
                                    <div class="product__price">
                                        <div class="price__old"><?php echo number_format($row['GiaGoc']*1000); ?>đ</div>
                                        <div class="price__new"><?php echo number_format($row['GiaGoc']*1000-(($row['GiaGoc']*1000 *($row['KhuyenMai']/100)))); ?> <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent"><?php echo $row['KhuyenMai']?>%</span>
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
     
                    

                    <div class="tab-pane">
                        <div class="row">
                        <?php

                        $sql = "SELECT * FROM sanpham LIMIT 12 OFFSET 28";
                                $result = $conn->query($sql);

                                // Kiểm tra và hiển thị dữ liệu sản phẩm
                        if ($result->num_rows > 0) {
                                    // Bắt đầu vòng lặp để hiển thị từng sản phẩm
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col l-2 m-4 s-6">
                        <div class="product">
                            <div class="product__avt" style="background-image: url(<?php echo $row['HinhAnh']; ?>);">
                            </div>
                            <div class="product__info">
                                <h3 class="product__name"><?php echo $row['TenSP']; ?></h3>
                                <div class="product__price">
                                        <div class="price__old"><?php echo number_format($row['GiaGoc']*1000); ?>đ</div>
                                        <div class="price__new"><?php echo number_format($row['GiaGoc']*1000-(($row['GiaGoc']*1000 *($row['KhuyenMai']/100)))); ?> <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent"><?php echo $row['KhuyenMai']?>%</span>
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


                        </div>
                    </div>


                    <div class="tab-pane">
                        <div class="row">
                        <?php

$sql = "SELECT * FROM sanpham LIMIT 12 OFFSET 41";
        $result = $conn->query($sql);

        // Kiểm tra và hiển thị dữ liệu sản phẩm
if ($result->num_rows > 0) {
            // Bắt đầu vòng lặp để hiển thị từng sản phẩm
while($row = $result->fetch_assoc()) {
?>
<div class="col l-2 m-4 s-6">
<div class="product">
    <div class="product__avt" style="background-image: url(<?php echo $row['HinhAnh']; ?>);">
    </div>
    <div class="product__info">
        <h3 class="product__name"><?php echo $row['TenSP']; ?></h3>
         <div class="product__price">
                                        <div class="price__old"><?php echo number_format($row['GiaGoc']*1000); ?>đ</div>
                                        <div class="price__new"><?php echo number_format($row['GiaGoc']*1000-(($row['GiaGoc']*1000 *($row['KhuyenMai']/100)))); ?> <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent"><?php echo $row['KhuyenMai']?>%</span>
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
            </div>
        </div>
        <!-- HightLight  -->
        <div class="main__frame">
            <div class="grid wide">
                <h3 class="category__title">Nhất Phát Men's Fashion</h3>
                <h3 class="category__heading">SẢN PHẨM NỔI BẬT</h3>
                <div class="owl-carousel hight owl-theme">
                <?php
include 'connect.php'; // Kết nối đến cơ sở dữ liệu

// Truy vấn dữ liệu từ bảng sanpham
$sql = "SELECT * FROM sanpham LIMIT 12 OFFSET 12";
$result = $conn->query($sql);

// Kiểm tra và hiển thị dữ liệu sản phẩm
if ($result->num_rows > 0) {
    // Bắt đầu vòng lặp để hiển thị từng sản phẩm
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="product">
            <div class="product__avt" style="background-image: url(<?php echo $row['HinhAnh']; ?>);">
            </div>
            <div class="product__info">
                <h3 class="product__name"><?php echo $row['TenSP']; ?></h3>
                <div class="product__price">
                                        <div class="price__old"><?php echo number_format($row['GiaGoc']*1000); ?>đ</div>
                                        <div class="price__new"><?php echo number_format($row['GiaGoc']*1000-(($row['GiaGoc']*1000 *($row['KhuyenMai']/100)))); ?> <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent"><?php echo $row['KhuyenMai']?>%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
            </div>
            <a href="product.php?id=<?php echo $row['MaSP'];?>" class="viewDetail">Xem chi tiết</a>
            <a href="#" class="addToCart" data-product-id="<?php echo $row['MaSP']; ?>">Thêm vào giỏ</a>
        </div>
        <?php
    }
} else {
    echo "Không có sản phẩm nào được tìm thấy";
}
?>
                </div>
                    
                </div>
            </div>
        </div>
        <!-- Sales Policy -->
        <div class="main__policy">
            <div class="row">
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy1.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">GIAO HÀNG MIỄN PHÍ</h3>
                            <p class="policy__description">Cho đơn hàng từ 300K</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy2.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">ĐỔI TRẢ HÀNG</h3>
                            <p class="policy__description">Trong 3 ngày đầu tiên</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy3.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">HÀNG CHÍNH HÃNG</h3>
                            <p class="policy__description">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy4.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">TƯ VẤN 24/24</h3>
                            <p class="policy__description">Giải đáp mọi thắc mắc</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- News -->
        <?php include 'connect.php'; ?>

<div class="main__frame bg-3">
    <div class="grid wide">
        <h3 class="category__title">Nhất Phát Men's Fashion</h3>
        <h3 class="category__heading">Tin Tức</h3>
        <div class="owl-carousel news owl-theme">
            <?php
            // Truy vấn dữ liệu từ bảng news
            $sql = "SELECT * FROM news";
            $result = mysqli_query($conn, $sql);

            // Hiển thị dữ liệu
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <a href="news.php" class="news">
                        <div class="news__img">
                            <img src="<?php echo $row['HinhAnh']; ?>" alt="">
                        </div>
                        <div class="news__body">
                            <h3 class="news__body-title"><?php echo $row['TenTinTuc']; ?></h3>
                            <div class="new__body-date"><?php echo $row['NgayDang']; ?></div>
                            <p class="news__description"><?php echo $row['NoiDung']; ?></p>
                        </div>
                    </a>
            <?php
                }
            } else {
                echo "Không có tin tức nào.";
            }
            ?>
        </div>
    </div>
</div>
        <div class="main__bands">
            <div class="grid wide">
                <div class="owl-carousel bands">
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide1.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide2.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide3.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide4.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide5.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide6.PNG)"></a>
                    <a href="listProduct.php" class="band__item" style="background-image: url(./assets/img/brand/Slide7.PNG)"></a>
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

        
    



<!-- register -->

<div class="ModalForm">
    <div class="modal" id="my-Register">
        <a href="#" class="overlay-close"></a>
        <div class="authen-modal register">
            <h3 class="authen-modal__title">Đăng Kí</h3>

            <form action="index.php#my-Register" method="post" name="register-form">
                <div class="form-group">
                    <label for="register-account" class="form-label">Họ Tên</label>
                    <p>.</p>
                    <div class="error"><?php echo isset($ErrorMessages["form-userName"]) ? $ErrorMessages["form-userName"] : "" ?></div>
                    <input id="register-account" name="form-userName" type="text" class="form-control" value="<?php echo isset($oldValues['form-userName']) ? htmlspecialchars($oldValues['form-userName']) : ''; ?>">
                    <p>.</p>
                </div>
                <!-- <div class="form-group">
                    <label for="register-phone" class="form-label">Số điện thoại</label>
                    <p>.</p>
                    <input id="register-phone" name="form-phone" type="text" class="form-control" value="<?php echo isset($oldValues['form-phone']) ? htmlspecialchars($oldValues['form-phone']) : ''; ?>">
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="register-birthday" class="form-label">Năm sinh</label>
                    <p>.</p>
                    <input id="register-birthday" name="form-birthday" type="text" class="form-control" value="<?php echo isset($oldValues['form-birthday']) ? htmlspecialchars($oldValues['form-birthday']) : ''; ?>">
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="register-address" class="form-label">Địa chỉ</label>
                    <p>.</p>
                    <input id="register-address" name="form-address" type="text" class="form-control" value="<?php echo isset($oldValues['form-address']) ? htmlspecialchars($oldValues['form-address']) : ''; ?>">
                    <p>.</p>
                </div> -->
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




<!-- login-->
<div class="modal" id="my-Login">
    <a href="#" class="overlay-close"></a>
    <form action="index.php#my-Login" method="post" name ="login-form">
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

        <!-- <div class="up-top" id="upTop" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div> -->

    </div>
    <script>
        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.owl-carousel.news').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel.bands').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <!-- Script common -->
    <script src="./assets/js/homeScript.js"></script>
    <script src="./assets/js/commonscript.js"></script>
</body>

</html>
