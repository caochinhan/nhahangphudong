<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài Viết</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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

    <?php require_once "../lib/autoload.php"?>
</head>

<?php
	$sql = "Select * from tbl_baiviet";
	$product = $db->fetchAll($sql);  	
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" style="display: flex;">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                    </div>
                    <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Enter keyword">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.php">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row" style="margin-top: -70px">
            <!-- <div class="row"> -->
                <?php foreach($product as $item) : ?>
                <div class="col-lg-6 col-sm-6" >
                    <div class="blog-item">
                        <div class="bi-pic">
                        <img width="300" height="250" src="<?php echo $base_url.$item['hinhanh'] ?>" alt="">
                        </div>
                        <div class="bi-text">
                            <a href="./blog-details.php">
                                <h4><td> <?php echo $item['tenbv']?> </td></h4>
                            </a>
                            <p><td> <?php echo $item['noidung']?> </td> <span>- <td> <?php echo $item['ngay']?> </td></span></p>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>          
            </div>
                <!-- <div class="col-lg-8">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Delivering Kisses And Miracles</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Make Grilling A Healthy Experience</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Bbq Myths Getting You Down</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg">
                            <div class="blog__pic__inner">
                                <div class="label">Recipes</div>
                                <ul>
                                    <li>By <span>James Myers</span></li>
                                    <li>13 Nov 2020</li>
                                    <li>112 Views</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__item__text">
                            <h2>Keep That Cooking Area Clean</h2>
                            <p>Herbs are fun and easy to grow. When harvested they make even the simplest meal seem like
                                a gourmet delight. By using herbs in your cooking you can easily change the flavors of
                            your recipes in many different ways, according to which herbs you add...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="shop__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-right"></span></a>
                    </div>
                </div> -->
                <div class="col-lg-4">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h5>Popular posts</h5>

                            <div class="blog__sidebar__recent">
                                
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/br-4.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Deal sốc: Lẩu cá kèo siêu to chỉ còn 190k</h4>
                                        <span>13 Nov 2021</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/br-5.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h4>Nhà hàng Phù Đổng</h4>
                                        <span>13 Nov 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>Categories</h5>
                            <div class="blog__sidebar__item__categories">
                                <ul>
                                    <li><a href="#">Repice <span>36</span></a></li>
                                    <li><a href="#">Guides <span>18</span></a></li>
                                    <li><a href="#">News <span>09</span></a></li>
                                    <li><a href="#">Videos <span>12</span></a></li>
                                    <li><a href="#">Trending <span>27</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h5>NEWsLETTeR</h5>
                            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <label for="agg">
                                    I agree to the terms & conditions
                                    <input type="checkbox" id="agg">
                                    <span class="checkmark"></span>
                                </label>
                                <button style="margin-left: 0px;" type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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