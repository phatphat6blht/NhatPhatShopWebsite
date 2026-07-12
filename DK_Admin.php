

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <link rel="stylesheet" href="./assets/css/Admin.css">

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


<?php


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
                            echo '<a href="" class="header__account-login">'.$_SESSION['userName'].'</a>';
                            echo '<a href="logOut.php" class="header__account-register">Đăng xuất</a>';
                            }
                        else {
                            echo '<a href="#my-Login" class="header__account-login">Đăng Nhập</a>';
                            echo '<a href="#my-Register" class="header__account-register">Đăng Kí</a>';
                            }
                        
                    ?>
                </div>
               

            </div>
        </div>
        <!-- Menu -->
        <div class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item nav__search">
                    <div class="nav__search-wrap">
                        <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
                    </div>
                    <div class="nav__search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="header__nav-item authen-form">
                    <a href="#" class="header__nav-link">Tài Khoản</a>
                    <ul class="sub-nav">
                        <li class="sub-nav__item">
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
                        </li>
                        <li class="sub-nav__item">
                            <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item index">
                    <a href="DK_Admin.php" class="header__nav-link">Trang chủ</a>
                </li>

                <li class="header__nav-item">
                    <a href="DK_Admin.php?page_layout=QLDMSP"  class="header__nav-link">Quản lý DMSP</a>
            
                </li>
                <li class="header__nav-item">
                    <a href="DK_Admin.php?page_layout=QLNV" class="header__nav-link">QL nhân viên</a>
                </li>
                <li class="header__nav-item">
                    <a href="" class="header__nav-link">BC thống kê</a>
                </li>
            </ul>
        </div>
    </div>




    <div class="backG"></div>

    

<?php 
    if(isset($_GET['page_layout']) ){

        switch($_GET['page_layout']){
            case 'TrangChu';
            include "index.php";
            break;
            case 'QLNV';
            include "formNV.php";
            break;
            
            case 'QLDMSP';
            include "formDMSP.php";
            break;

            // case 'Dmsp';
            // include "dmsp.php";
            // break;

            // case 'lienHe';
            // include "lienHe.php";
            // break;
        }
    }



?>



    


 
   

</body>
