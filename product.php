<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
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
    <link rel="stylesheet" type="text/css" href="./assets/css/product.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="assets/owlCarousel/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
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


<!-- Start -->


 <div class="main">
        <div class="grid wide">

            <!--  -->
                <?php 
            if (!empty($_GET['id'])){

                $product_id=$_GET['id'];

                // Truy vấn để lấy thông tin chi tiết của sản phẩm dựa trên ID
                $sql = "SELECT * FROM sanpham WHERE MaSP = '$product_id'";
                $result=$conn->query($sql);

                    // Kiểm tra và hiển thị thông tin chi tiết của sản phẩm
                    if ($result->num_rows>0) {
                        $row = $result->fetch_assoc();
                ?>                       
            

            <!--  -->
            <div class="productInfo">
                <div class="row">
                    <div class="col l-5 m-12 s-12">
                        <div class="owl-carousel owl-theme" id="sync1">
                            <a href="#" class="product">
                            <div class="product__avt" style="background-image: url('<?php echo $row['HinhAnh']; ?>')">
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col l-7 m-12s s-12 pl">
                        <div class="main__breadcrumb">
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Trang chủ</a>
                            </div>
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Cửa hàng</a>
                            </div>
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Sản phẩm</a>
                            </div>
                        </div>
                        <h3 class="productInfo__name">
                            Nhất Phát Shop
                        </h3>
                        <div class="productInfo__price">
                            330.000 <span class="priceInfo__unit">đ</span>
                        </div>
                        <div class="productInfo__description">
                            <span> Phong cách thời trang Smart Casual </span> chính là sự kết hợp thông minh (smart) trong những trang phục cơ bản thường ngày (casual) hướng đến sự chỉn chu nhưng vẫn thoải mái. Phong cách này không có sự giới hạn trong việc lựa chọn items để phối cho mình set đồ thích hợp nhất.
                        </div>

                        <div class="productInfo__addToCart">
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                            </div>
                            <div class=" btn btn--default orange ">Thêm vào giỏ</div>
                        </div>
                        <div class="productIndfo__policy ">
                            <div class="policy bg-1 ">
                                <img src="./assets/img/policy/policy1.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="./assets/img/policy/policy2.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Đổi trả hàng</h3>
                                    <p class="productIndfo__policy-description ">trong ba ngày đầu tiên</p>
                                </div>
                            </div>
                            <div class="policy bg-1 ">
                                <img src="./assets/img/policy/policy3.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Hàng chính hãng</h3>
                                    <p class="productIndfo__policy-description "> cam kết chất lượng</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="./assets/img/policy/policy4.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Tư vấn 24/24</h3>
                                    <p class="productIndfo__policy-description ">Giải đáp mọi thắc mắc</p>
                                </div>
                            </div>
                        </div>
                        <div class="productIndfo__category ">
                            <p class="productIndfo__category-text"> Danh mục : <a href="# " class="productIndfo__category-link ">Thời trang nam</a></p>
                            <p class="productIndfo__category-text"> Hãng : <a href="# " class="productIndfo__category-link ">Nhất Phát Shop</a></p>
                            <p class="productIndfo__category-text"> Số lượng đã bán : 322</p>
                            <p class="productIndfo__category-text"> Số lượng trong kho : <?php echo $row['SoLuong']?></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="productDetail ">
                <div class="main__tabnine ">
                    <div class="grid wide ">
                        <!-- Tab items -->
                        <div class="tabs ">
                            <div class="tab-item active ">
                                Mô tả
                            </div>
                            <div class="tab-item ">
                                Đánh giá
                            </div>
                            <div class="line "></div>
                        </div>
                        <!-- Tab content -->
                        <div class="tab-content ">
                            <div class="tab-pane active ">
                                <div class="productDes ">
                                    <div class="productDes__title "><?php echo $row['TenSP']?> là gì ?</div>
                                    <p class="productDes__text "> <a href="# " class="productDes__link "><?php echo $row['TenSP']?></a> <br>

                                       <?php echo $row['MoTa']?>
                                    </p>
                                
                                </div>
                            </div>

                            <?php 
                                } else {
                                    echo "Không tìm thấy sản phẩm";
                                }
                            } else {
                                echo "Không có thông tin sản phẩm được cung cấp";
                            }
                            ?>
                            <div class="tab-pane ">
                                <div class="productDes__ratting ">
                                    <div class="productDes__ratting-title ">Đánh giá của bạn</div>
                                    <div class="productDes__ratting-wrap">
                                    <form method="post" action="">
                                        <div id="rating">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                            <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </div>
                                        <textarea class="ratecomment" id="comments" cols="30" rows="1" placeholder="Vui lòng viết đánh giá của bạn" name="comments"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn--default" name="submit_comment" value="Gửi">
                                    </form>
                                </div>
                            </div>
                            <!-- Hiển thị danh sách bình luận -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php 
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if(isset($_SESSION['userName'])) {
    // Người dùng đã đăng nhập, lấy thông tin từ session hoặc cookie
    $userName = $_SESSION['userName'];

    // Kết nối đến cơ sở dữ liệu
    include 'connect.php'; // Thay đổi tên tệp kết nối tùy thuộc vào cách bạn cấu hình

    // Truy vấn để lấy thông tin MaK từ bảng accounts dựa trên userName
    $sql_get_user_info = "SELECT id FROM accounts WHERE userName = '$userName'";
    $result_user_info = $conn->query($sql_get_user_info);

    // Kiểm tra và lấy MaK nếu truy vấn thành công
    if ($result_user_info->num_rows > 0) {
        $row_user_info = $result_user_info->fetch_assoc();
        $MaK = $row_user_info['id'];
    } else {
        echo "Không tìm thấy thông tin người dùng";
        // Thực hiện xử lý thích hợp nếu không tìm thấy thông tin người dùng
    }
}

// Xử lý gửi bình luận
if (isset($_POST['submit_comment'])) {
    // Kiểm tra xem biểu mẫu đã được gửi chưa
    $comment = isset($_POST['comments']) ? $_POST['comments'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    // Kiểm tra xem các biến cần thiết đã được khởi tạo hay chưa
    if (!empty($comment) && !empty($rating) && !empty($MaK) && !empty($userName)) {
        // Thực hiện truy vấn để lưu bình luận và đánh giá vào cơ sở dữ liệu
        $sql_insert_comment = "INSERT INTO DanhGia (MaSP,MaK, userName, comments, rating) VALUES ('$product_id','$MaK', '$userName', '$comment', '$rating')";
        if ($conn->query($sql_insert_comment) === TRUE) {
            // Bình luận và đánh giá đã được lưu thành công, có thể thực hiện các hành động khác ở đây nếu cần
            echo "<script>alert('Bình luận và đánh giá của bạn đã được gửi thành công!');</script>";
        } else {
            echo "Lỗi: " . $sql_insert_comment . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin bao gồm cả đánh giá Sao và bình luận.');</script>";
    }
}

?>



            <div class="main__frame ">
                <div class="grid wide ">
                    <h3 class="category__title ">Nhất Phát Men's fashion</h3>
                    <h3 class="category__heading ">Sản Phẩm Tương tự</h3>
                    <div class="owl-carousel hight owl-theme ">
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide5.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide6.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide7.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide8.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide9.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide10.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide11.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide12.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide13.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">áo thời trang</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide14.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide15.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
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

            <form action="product.php#my-Register" method="post" name="register-form">
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
    <form action="product.php#my-Login" method="post" name ="login-form">
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

            </div>
            
                <a class="authen__link">Quên mật khẩu ?</a>

        </div>
    </form>
</div>

        <div class="up-top" id="upTop" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "105913298384666");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        $(document).ready(function() {
            var sync1 = $("#sync1 ");
            var sync2 = $("#sync2 ");
            var slidesPerPage = 4;
            var syncedSecondary = true;
            sync1.owlCarousel({
                items: 1,
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true
            })
            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item ").eq(0).addClass("current ");
                })
                .owlCarousel({
                    items: 4,
                    dots: false,
                    nav: false,
                    margin: 30,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: 4,
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count)  {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item ")
                    .removeClass("current ")
                    .eq(current)
                    .addClass("current ");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click ", ".owl-item ", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });
        });

        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
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
    <script src="./assets/js/commonscript.js ">
    </script>
    <script>
        function calcRate(r) {
            const f = ~~r, //Tương tự Math.floor(r)
                id = 'star' + f + (r % f ? 'half' : '')
            id && (document.getElementById(id).checked = !0)
        }
    </script>
</body>

</html>