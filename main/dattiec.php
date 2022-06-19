<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đặt tiệc tại gia</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <?php require_once(__DIR__ . '/../lib/autoload.php'); ?>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data =
        [
            "ten" => $_POST['ten'] ? $_POST['ten'] : '',
            "email" => $_POST['email'] ? $_POST['email'] : '',
            "sdt" => $_POST['sdt'] ? $_POST['sdt'] : '',
            "soluong" => $_POST['soluong'] ? $_POST['soluong'] : '',
            "diachi" => $_POST['diachi'] ? $_POST['diachi'] : '',
            "ngay" => $_POST['ngay'] ? $_POST['ngay'] : '',
            "gio" => $_POST['gio'] ? $_POST['gio'] : '',
            "noidung" => $_POST['noidung'] ? $_POST['noidung'] : '',
        ];
    $insert = $db->insert('tbl_dattiec', $data);
    if ($insert > 0) {
        $_SESSION['error'] = "Thêm thành công";
        header("Refresh:0");
    } else {
        $_SESSION['error'] = "không thành công";
        header("Refresh:0");
    }
}

?>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/lg1.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">                           
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/lg1.png" alt="Image Error"></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <div class="header__top__right__cart">
                                        <a href="./shoping-cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                        <div class="cart__price"><span></span></div>                         
                                    </div>
                                </div>
                                <div class="header__top__right__cart">
                                     <a href="#">Sign in</a> <span class="arrow_carrot-down"></span>                    
                                </div> 
                                                     
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang Chủ</a></li>
                            <li><a href="./about.php">Thông tin nhà hàng</a></li>
                            <li><a href="./shop.php">Menu</a></li>
                            <li><a href="./blog.php">Bài Viết</a></li>
                            <li><a href="#">Khác</a>
                                <ul class="dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./wisslist.html">Wisslist</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <!-- <div class="map">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4 col-md-7">
                            <div class="map__inner">
                                <h6>Phuong Nam Restaurant</h6>
                                <ul>
                                    <li>Số 2, ngõ 69 Chùa Láng</li>
                                    <li>nhahangphuongnam.vn</li>
                                    <li>18002028</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map__iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> -->
            <div class="contact__address">
                <div class="row">
                    <div class="categories__item">
                        <a href="./datban.php"><img src="https://theme.hstatic.net/1000093072/1000695983/14/hservice_icon1.png?v=867" alt="Đặt bàn"></a>
                        <div class="categories__title">
                            <a href="./datban.php">Đặt bàn</a>
                        </div>
                    </div>
                    <div class="categories__item">
                        <a href="#"><img src="https://theme.hstatic.net/1000093072/1000695983/14/hservice_icon2.png?v=867" alt="Đặt ship"></a>
                        <div class="categories__title">
                            <a href="#">Đặt ship</a>
                        </div>
                    </div>
                    <div class="categories__item">
                        <a href="./dattiec.php"><img src="https://theme.hstatic.net/1000093072/1000695983/14/hservice_icon3.png?v=867" alt=" Đặt tiệc tại gia"></a>
                        <div class="categories__title">
                            <a href="./dattiec.php">Đặt tiệc</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-lg-4">
                    <div class="contact__text">
                        <h3>Contact With us</h3>
                        <ul>
                            <li>Representatives or Advisors are available:</li>
                            <li>Trua: 11:30am to 14:00pm</li>
                            <li>Toi: 17:30pm to 21:00pm</li>
                        </ul>
                        <img src="img/cake-piece.png" alt="">
                    </div>
                </div> -->
                <div class="col-lg-8" style="margin-left: 200px;">
                    <div class="contact__form">
                        <div style="margin-left: 240px;">
                            <h2>ĐẶT TIỆC TẠI GIA</h2><br>
                        </div>
                        <form action="" method="POST" class="comment-form">
                            <div class="row">

                                <form>
                                    <div class="col-lg-12">
                                        <input type="text" name="ten" placeholder="Họ và tên:">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Địa chỉ Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="sdt" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="soluong" placeholder="Số lượng khách:">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="diachi" placeholder="Địa chỉ đặt tiệc:">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" name="ngay" placeholder="Chọn ngày:">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="time" name="gio" placeholder="Chọn giờ:">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="content" name="noidung" placeholder="Nội dung:"></textarea>
                                        <button type="submit" class="site-btn">Send Us</button>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer__widget">
                        <h6>Liên hệ</h6>
                        <ul>
                            <li>Trưa: 11:30 am – 14:00 pm</li>
                            <li>Tối: 17:30 pm – 21:00 pm</li>
                            <li>CS: Số 295, Đường lên đền Gióng</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/lg1.png" alt=""></a>
                        </div>
                        <p></p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> 
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>