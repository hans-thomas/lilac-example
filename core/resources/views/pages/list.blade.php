<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('sections.header',['title' => 'list page'])

<body>
    <!-- start preloader area -->
    <div class="preloader">
        <div class="preloader-orbit-loading">
            <div class="cssload-inner cssload-one"></div>
            <div class="cssload-inner cssload-two"></div>
            <div class="cssload-inner cssload-three"></div>
        </div>
    </div>
    <!-- end preloader area -->

    <!-- start scroll top button -->
    <div class="scroll-top">
        <button class="top-to-btn">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>
    <!-- end scroll top button -->

    <!-- start fancybox area -->
    <div class="home1 fancybox">
        <div class="fancybox-bg"></div>
        <div class="fancybox-content">
            <div class="row">
                <div class="col-md-6 img-area">
                    <div class="popup-img">
                        <img src="assets/images/fancybox/img1.jpg" alt="Popup">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="popup-content text-center" data-img="assets/images/fancybox/shape.png">
                        <h2>دریافت 20٪ تخفیف برای ارسال به صندوق پستی شما</h2>
                        <h5>ثبت نام در خبرنامه</h5>
                        <p>از خبرنامه ما لذت ببرید و از آخرین اخبار و فروش ویژه مطلع شوید. آدرس ایمیل خود را اینجا وارد کنید!</p>
                        <form action="#!">
                            <div class="d-flex justify-content-center">
                                <input type="email" placeholder="ایمیلت رو بزن..." class="inputs">
                                <button type="submit" class="fancy-btn">ثبت</button>
                            </div>
                            <label for="term">
                                <input type="checkbox" class="check" id="term">
                                <span class="check-custom"></span>
                                دیگه نشون نده
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="close-fancy">
                <button>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- end fancybox area -->

    <!-- start header area -->
    <header>
        <!-- start menubar area -->
        <section class="inner-page menubar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row align-items-center">
                            <!-- logo -->
                            <div class="col-lg-2 col-md-4 col-sm-5 col-6">
                                <div class="logo">
                                    <a href="index.html">
                                        <img width="130px" height="130px" src="assets/images/home1/logo.png" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <!-- main menu -->
                            <div class="col-lg-8 col-md-4 col-sm-2 col-6">
                                <!-- desktop-menu -->
                                <nav class="navbar position-static justify-content-center desktop-menu p-0">
                                    <div class="main-menu">
                                        <ul class="menu">
                                            <li>
                                                <a href="#!">خانه</a>
                                                <ul class="submenu-list">
                                                    <li>
                                                        <a href="index.html">خانه ۱</a>
                                                        <span class="menu-img">
                                                            <img src="assets/images/home1/home.jpg" alt="Home 1"/>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <a href="index2.html">خانه ۲</a>
                                                        <span class="menu-img">
                                                            <img src="assets/images/home2/home.jpg" alt="Home 1"/>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <a href="index3.html">خانه ۳</a>
                                                        <span class="menu-img">
                                                            <img src="assets/images/home3/home.jpg" alt="Home 1"/>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">درباره ما</a></li>
                                            <li><a href="#!">صفحات</a>
                                                <ul class="submenu-list">
                                                    <li><a href="about.html">درباره</a></li>
                                                    <li>
                                                        <a href="#!">اکانت</a>
                                                        <ul>
                                                            <li><a href="account.html">اکانت</a></li>
                                                            <li><a href="login.html">ورود</a></li>
                                                            <li><a href="register.html">ثبت نام</a></li>
                                                            <li><a href="my-account.html">اکانت من</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="faq.html">سوالات متداول</a></li>
                                                    <li><a href="coming-soon.html">به زودی</a></li>
                                                    <li><a href="contact.html">تماس با ما</a></li>
                                                    <li><a href="404.html">ارور ۴۰۴</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#!">فروشگاه</a>
                                                <div class="mega-submenu">
                                                    <div class="submenu-inside">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <div class="ad-part">
                                                                        <div class="ad-slider swiper-container">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="item swiper-slide">
                                                                                    <a href="shop-4-column.html">
                                                                                        <img src="assets/images/advertise1.png" alt="Advertise" />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="item swiper-slide">
                                                                                    <a href="shop-5-column.html">
                                                                                        <img src="assets/images/advertise2.png" alt="Advertise" />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="item swiper-slide">
                                                                                    <a href="shop-6-column.html">
                                                                                        <img src="assets/images/advertise3.png" alt="Advertise" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <h4>مجموعه ها</h4>
                                                                            <ul class="big-item">
                                                                                <li>
                                                                                    <a href="shop-4-column.html">
                                                                                        مجموعه های بهار تابستان
                                                                                        <span>از فروردین ۱۴۰۱ در فروشگاه موجود است</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="shop-3-column.html">
                                                                                        مجموعه های زمستانی پاییزی
                                                                                        <span>از فروردین ۱۴۰۱ در فروشگاه موجود است</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="shop-2-column.html">
                                                                                        مجموعه‌های راحتی
                                                                                        <span>از فروردین ۱۴۰۱ در فروشگاه موجود است</span>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="shop-4-column.html">
                                                                                        مجموعه‌های مجلسی
                                                                                        <span>از فروردین ۱۴۰۱ در فروشگاه موجود است</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h4>شبکه فروشگاهی</h4>
                                                                            <ul>
                                                                                <li><a href="shop-2-column.html">فروشگاه ۲ ستون</a></li>
                                                                                <li><a href="shop-3-column.html">فروشگاه ۳ ستون</a></li>
                                                                                <li><a href="shop-4-column.html">فروشگاه ۴ ستون</a></li>
                                                                                <li><a href="shop-5-column.html">فروشگاه ۵ ستون</a></li>
                                                                                <li><a href="shop-6-column.html">فروشگاه ۶ ستون</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h4>صفحات فروشگاه</h4>
                                                                            <ul>
                                                                                <li><a href="shop-list-left.html">لیست فروشگاه از چپ</a></li>
                                                                                <li><a href="shop-list-left-sidebar.html">لیست فروشگاه با ساید بار از چپ</a></li>
                                                                                <li><a href="shop-list-right.html">لیست فروشگاه از راست</a></li>
                                                                                <li><a href="shop-list-right-sidebar.html">لیست فروشگاه با سایدبار از راست</a></li>
                                                                                <li><a href="shop-detail-left.html">جزئیات فروشگاه از چپ</a></li>
                                                                                <li><a href="shop-detail-right.html">جزئیات فروشگاه از راست</a></li>
                                                                                <li><a href="shop-detail-tab-left.html">برگه جزئیات فروشگاه از چپ</a></li>
                                                                                <li><a href="shop-detail-tab-right.html">برگه جزئیات فروشگاه از راست</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <h4>صفحات دیگر</h4>
                                                                            <ul>
                                                                                <li><a href="cart.html">سبد خرید</a></li>
                                                                                <li><a href="checkout.html">برگه پرداخت</a></li>
                                                                                <li><a href="compare.html">مقایسه </a></li>
                                                                                <li><a href="category.html">دسته بندی</a></li>
                                                                                <li><a href="wishlist.html">لیست علاقه مندی ها</a></li>
                                                                                <li><a href="tracking.html">پیگیری</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!">وبلاگ</a>
                                                <ul class="submenu-list">
                                                    <li>
                                                        <a href="#!">شبکه</a>
                                                        <ul>
                                                            <li><a href="blog-2-column.html">وبلاگ ۲ ستون</a></li>
                                                            <li><a href="blog-3-column.html">وبلاگ ۳ ستون</a></li>
                                                            <li><a href="blog-4-column.html">وبلاگ ۴ ستون</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">لیست</a>
                                                        <ul>
                                                            <li><a href="blog-list-left.html">لیست وبلاگ از چپ</a></li>
                                                            <li><a href="blog-list-left-sidebar.html">لیست وبلاگ از چپ با سایدبار</a></li>
                                                            <li><a href="blog-list-right.html">لیست وبلاگ از راست</a></li>
                                                            <li><a href="blog-list-right-sidebar.html">لیست وبلاگ از راست با سایدبار</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">جزئیات</a>
                                                        <ul>
                                                            <li><a href="blog-detail-right.html">جزئیات با سایدبار از راست</a></li>
                                                            <li><a href="blog-detail-left.html">جزئیات با سایدبار از چپ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">مقالات</a>
                                                        <ul>
                                                            <li><a href="blog-masonry-2-column.html">مقالات ۲ ستون</a></li>
                                                            <li><a href="blog-masonry-3-column.html">مقالات ۳ ستون</a></li>
                                                            <li><a href="blog-masonry-4-column.html">مقالات ۴ ستون</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">تماس با ما</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- mobile menu -->
                                <nav class="navbar p-0 mobile-menu position-static">
                                    <div class="header-menu position-static">
                                        <ul class="menu">
                                            <li class="active">
                                                <a href="#!">خانه</a>
                                                <ul>
                                                    <li><a href="index.html">خانه ۱</a></li>
                                                    <li><a href="index2.html">خانه ۲</a></li>
                                                    <li><a href="index3.html">خانه ۳</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">درباره</a></li>
                                            <li>
                                                <a href="#!">صفحات</a>
                                                <ul>
                                                    <li><a href="about.html">درباره</a></li>
                                                    <li>
                                                        <a href="#!">اکانت</a>
                                                        <ul>
                                                            <li><a href="account.html">اکانت</a></li>
                                                            <li><a href="login.html">ورود</a></li>
                                                            <li><a href="register.html">ثبت نام</a></li>
                                                            <li><a href="my-account.html">اکانت من</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="faq.html">سوالات متدوال</a></li>
                                                    <li><a href="coming-soon.html">بزودی</a></li>
                                                    <li><a href="contact.html">تماس</a></li>
                                                    <li><a href="404.html">۴۰۴ ارور</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">فروشگاه</a>
                                                <ul>
                                                    <li>
                                                        <a href="#!">مجموعه</a>
                                                        <ul>
                                                            <li><a href="shop-4-column.html">مجموعه بهاری تابستانی</a></li>
                                                            <li><a href="shop-3-column.html">مجموعه پاییزی زمستانی</a></li>
                                                            <li><a href="shop-2-column.html">مجموعه راحتی</a></li>
                                                            <li><a href="shop-5-column.html">مجموعه مجلسی</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">شبکه فروشگاه</a>
                                                        <ul>
                                                            <li><a href="shop-2-column.html">فروشگاه ۲ ستون</a></li>
                                                            <li><a href="shop-3-column.html">فروشگاه ۳ ستون</a></li>
                                                            <li><a href="shop-4-column.html">فروشگاه ۴ ستون</a></li>
                                                            <li><a href="shop-5-column.html">فروشگاه ۵ ستون</a></li>
                                                            <li><a href="shop-6-column.html">فروشگاه ۶ ستون</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">صفحات فروشگاه</a>
                                                        <ul>
                                                            <li><a href="shop-list-left.html">لیست فروشگاه از چپ</a></li>
                                                            <li><a href="shop-list-left-sidebar.html">لیست فروشگاه با ساید بار از چپ</a></li>
                                                            <li><a href="shop-list-right.html">لیست فروشگاه از راست</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">لیست فروشگاه با سایدبار از راست</a></li>
                                                            <li><a href="shop-detail-left.html">جزئیات فروشگاه از چپ</a></li>
                                                            <li><a href="shop-detail-right.html">جزئیات فروشگاه از راست</a></li>
                                                            <li><a href="shop-detail-tab-left.html">برگه جزئیات فروشگاه از چپ</a></li>
                                                            <li><a href="shop-detail-tab-right.html">برگه جزئیات فروشگاه از راست</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">صفحات دیگر</a>
                                                        <ul>
                                                            <li><a href="cart.html">سبد خرید</a></li>
                                                            <li><a href="checkout.html">برگه پرداخت</a></li>
                                                            <li><a href="compare.html">مقایسه </a></li>
                                                            <li><a href="category.html">دسته بندی</a></li>
                                                            <li><a href="wishlist.html">لیست علاقه مندی ها</a></li>
                                                            <li><a href="tracking.html">پیگیری</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#!">وبلاگ</a>
                                                <ul class="submenu-list">
                                                    <li>
                                                        <a href="#!">شبکه</a>
                                                        <ul>
                                                            <li><a href="blog-2-column.html">وبلاگ ۲ ستون</a></li>
                                                            <li><a href="blog-3-column.html">وبلاگ ۳ ستون</a></li>
                                                            <li><a href="blog-4-column.html">وبلاگ ۴ ستون</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">لیست</a>
                                                        <ul>
                                                            <li><a href="blog-list-left.html">لیست وبلاگ از چپ</a></li>
                                                            <li><a href="blog-list-left-sidebar.html">لیست وبلاگ از چپ با سایدبار</a></li>
                                                            <li><a href="blog-list-right.html">لیست وبلاگ از راست</a></li>
                                                            <li><a href="blog-list-right-sidebar.html">لیست وبلاگ از راست با سایدبار</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">جزئیات</a>
                                                        <ul>
                                                            <li><a href="blog-detail-right.html">جزئیات با سایدبار از راست</a></li>
                                                            <li><a href="blog-detail-left.html">جزئیات با سایدبار از چپ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#!">مقالات</a>
                                                        <ul>
                                                            <li><a href="blog-masonry-2-column.html">مقالات ۲ ستون</a></li>
                                                            <li><a href="blog-masonry-3-column.html">مقالات ۳ ستون</a></li>
                                                            <li><a href="blog-masonry-4-column.html">مقالات ۴ ستون</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">تماس با ما</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- notification -->
                            <div class="col-lg-2 col-md-4 col-sm-5 right-col">
                                <div class="notification">
                                    <ul class="d-flex justify-content-end">
                                        <li>
                                            <a href="account.html">
                                                <i class="flaticon-user-1"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <i class="flaticon-heart"></i>
                                                <span class="quantity">۰۱</span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <span class="quantity">۰۲</span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <div class="heading d-flex justify-content-between">
                                                        <h5>۳ مورد</h5>
                                                        <a href="cart.html">دیدن سبد خرید</a>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="d-flex position-relative">
                                                                <img src="assets/images/home1/product/img1.jpg" alt="Product Image" />
                                                                <div class="text">
                                                                    <a href="shop-detail-left.html">
                                                                        <h5>لباس نخی سایز بزرگ</h5>
                                                                    </a>
                                                                    <p>۱ X ۱۳۵۰۰۰</p>
                                                                    <a href="#!" class="icon">
                                                                        <i class="far fa-times-circle"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="total d-flex justify-content-between">
                                                        <p>جمع</p>
                                                        <p>۱۳۵۰۰۰</p>
                                                    </div>
                                                    <div class="check">
                                                        <a href="checkout.html" class="button-style1">پرداخت <span class="btn-dot"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end menubar area -->
    </header>
    <!-- end header area -->

    <!-- start banner area -->
    <section class="inner-page banner" data-img="assets/images/inner/banner-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>فروشگاه 5 ستون</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> / فروشگاه</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner area -->

    <!-- start category area -->
    <section class="shop-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title d-flex justify-content-between align-items-center">
                        <p>نمایش ۱–۹ از ۲۰ نتیجه</p>
                        <div class="sort d-flex align-items-center">
                            <p>مرتب سازی براساس</p>
                            <select class="select">
                                <option value="1">محبوبیت</option>
                                <option value="2">پرفروش</option>
                                <option value="3">جدیدترین</option>
                                <option value="4">بروزترین</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 home1 trending">
                    <div class="row">
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p1a.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p1b.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی راحتی لوکس سفید</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p2a.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p2b.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی لوکس باغ</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p3a.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p3b.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی سالن</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p4a.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p4b.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی داپیباس</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p5a.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p5b.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>مبل چوبی لوکس</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p1b.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p1a.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی راحتی استیل طلایی</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p2b.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p2a.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>صندلی راحتی لوکس سفید</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p3b.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p3a.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>مبل لوکس شرکتی</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p4b.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p4a.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>سالن لوکس تجاری</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                <span class="offer">-۲۹%</span>
                                <div class="image">
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p5b.png" class="img-main" alt="Product">
                                    </a>
                                    <a href="shop-detail-left.html">
                                        <img src="assets/images/home1/product/p5a.png" class="img-hover" alt="Product">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="shop-detail-left.html">
                                        <h6>مبل مخملی قرمز</h6>
                                    </a>
                                    <p><span>۱ میلیون</span> - ۵۰۰۰۰۰ تومان</p>
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <div class="action">
                                        <ul class="d-flex">
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="flaticon-visibility"></i>
                                                    <p class="my-tooltip">
                                                        نمایش
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="flaticon-refresh"></i>
                                                    <p class="my-tooltip">
                                                        مقایسه
                                                    </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pagination -->
                        <div class="col-lg-12">
                            <div class="pages">
                                <ul class="d-flex justify-content-center">
                                    <li><a href="#!"><i class="flaticon-chevron"></i></a></li>
                                    <li><a href="#!" class="active">۱</a></li>
                                    <li><a href="#!">۲</a></li>
                                    <li><a href="#!">۳</a></li>
                                    <li><a href="#!">۴</a></li>
                                    <li><a href="#!"><i class="flaticon-chevron-1"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end category area -->

    <!-- start overview area -->
    <section class="home1 overview">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg">
                        <div class="bg-inner">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <div class="icon">
                                            <i class="flaticon-fire-truck"></i>
                                        </div>
                                        <div class="text">
                                            <h5>حمل و نقل رایگان</h5>
                                            <h6>سفارشات بالای ۶۰۰ هزار تومان</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <div class="icon">
                                            <i class="flaticon-cards"></i>
                                        </div>
                                        <div class="text">
                                            <h5>پرداخت سریع</h5>
                                            <h6>پرداخت ۱۰۰% مطمئن</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item d-flex align-items-center justify-content-center">
                                        <div class="icon">
                                            <i class="flaticon-gift-box"></i>
                                        </div>
                                        <div class="text">
                                            <h5>گواهی هدیه</h5>
                                            <h6>اکنون ۱ میلیون بخرید</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="item d-flex align-items-center justify-content-center last-item">
                                        <div class="icon">
                                            <i class="flaticon-customer-service"></i>
                                        </div>
                                        <div class="text">
                                            <h5>پشتیبانی</h5>
                                            <h6>پشتیبانی سریع</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end overview area -->

    <!-- start footer area -->
    <footer class="footer">
        <!-- start footer-top area -->
        <section class="footer-top pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>درباره ما</h5>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            <div class="follow">
                                <h6>راه های ارتباطی</h6>
                                <ul class="d-flex social">
                                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>اکانت من</h5>
                            </div>
                            <ul>
                                <li><a href="my-account.html">اکانت من</a></li>
                                <li><a href="wishlist.html">لیست علاقه مندی ها</a></li>
                                <li><a href="login.html">ورود</a></li>
                                <li><a href="contact.html">آدرس</a></li>
                                <li><a href="shop-4-column.html">محصول جدید</a></li>
                                <li><a href="faq.html">سوالات متداول</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>پشتیبانی</h5>
                            </div>
                            <ul>
                                <li><a href="#!">کمک</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                                <li><a href="#!">بازخورد</a></li>
                                <li><a href="#!">خدمات مشتری</a></li>
                                <li><a href="#!">رزرو</a></li>
                                <li><a href="#!">مکان های فروشگاه</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>تماس با ما</h5>
                            </div>
                            <ul class="address">
                                <li class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-phone"></i>
                                    </div>
                                    <div class="text">
                                        <h6>تماس</h6>
                                        <p>۰۹۱۲۳۴۵۶۷۸۹</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="text">
                                        <h6>ایمیل</h6>
                                        <p>makhlaghi۳۴۹@gmail.com</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    <div class="text">
                                        <h6>اینستاگرام</h6>
                                        <p>Mahdi__۰۳۷</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="content">
                            <div class="title">
                                <h5>لینک های مفید</h5>
                            </div>
                            <ul>
                                <li><a href="#!">حریم خصوصی</a></li>
                                <li><a href="#!">نقشه سایت</a></li>
                                <li><a href="#!">محل فروشگاه</a></li>
                                <li><a href="my-account.html">اکانت من</a></li>
                                <li><a href="#!">پیگیری سفارشات</a></li>
                                <li><a href="#!">شرایط استفاده از خدمات</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-top area -->

        <!-- start footer-bottom area -->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-area">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <p>کلیه حقوق این قالب متعلق به براکت است</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="payment">
                                        <ul class="d-flex justify-content-end">
                                            <li>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end footer-bottom area -->
    </footer>
    <!-- end footer area -->

    <!-- start product-detail modal -->
    <div class="modal fade quick-view-modal" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="image-area">
                                <div class="product-gallery swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="item swiper-slide">
                                            <img id="zoom_01" src="assets/images/shop/img1.jpg" alt="Product" data-zoom-image="assets/images/shop/img1.jpg">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img id="zoom_02" src="assets/images/shop/img2.jpg" alt="Product" data-zoom-image="assets/images/shop/img2.jpg">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img id="zoom_03" src="assets/images/shop/img3.jpg" alt="Product" data-zoom-image="assets/images/shop/img3.jpg">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img id="zoom_04" src="assets/images/shop/img4.jpg" alt="Product" data-zoom-image="assets/images/shop/img4.jpg">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-thumb swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="item swiper-slide">
                                            <img src="assets/images/shop/img-sm1.jpg" alt="Product">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img src="assets/images/shop/img-sm2.jpg" alt="Product">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img src="assets/images/shop/img-sm3.jpg" alt="Product">
                                        </div>
                                        <div class="item swiper-slide">
                                            <img src="assets/images/shop/img-sm4.jpg" alt="Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="detail-content">
                                <p class="stock">دسترسی:<span> در انبار</span></p>
                                <h5>مجموعه های مبلمان لوکس طرح زندگی </h5>
                                <div class="review-area d-flex align-items-center">
                                    <ul class="rating d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <p>(۲ نظر مشتری)</p>
                                </div>
                                <h5>۵۰۰۰۰۰ تومان – <span>۱ میلیون</span></h5>
                                <p class="desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>

                                <div class="color-pallate d-flex align-items-center">
                                    <p>رنگ : </p>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#!" class="blue"></a>
                                        </li>
                                        <li>
                                            <a href="#!" class="red"></a>
                                        </li>
                                        <li>
                                            <a href="#!" class="pink"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="category">
                                    <p>دسته بندی : <a href="#!">خانه,</a> <a href="#!">تخت,</a> <a href="#!">مبل</a></p>
                                    <p>برچسب : <a href="#!">خانه,</a> <a href="#!">مبلمان</a></p>
                                </div>

                                <div class="border-area">
                                    <div class="cart-part d-flex align-items-center">
                                        <div class="d-flex number-spinner">
                                            <button data-dir="dwn" class="down-btn"><i class="fas fa-minus"></i></button>
                                            <input type="text" class="form-control text-center input-value" value="1">
                                            <button data-dir="up" class="up-btn"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <a href="#!" class="cart">سبد خرید <span class="btn-dot"></span></a>
                                        <div class="add-more d-flex align-items-center">
                                            <a href="#!"><i class="flaticon-heart"></i></a>
                                            <a href="#!"><i class="flaticon-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="share d-flex align-items-center">
                                    <h5>اشتراک گذاری : </h5>
                                    <ul class="d-flex">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product-detail modal -->

    @include('sections.footer')
</body>


</html>
