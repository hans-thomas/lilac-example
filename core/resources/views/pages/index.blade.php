<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('sections.header',['title' => 'index page'])

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
<div class="home2 scroll-top">
    <button class="top-to-btn">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>
<!-- end scroll top button -->

<!-- start fancybox area -->
<div class="home2 fancybox">
    <div class="fancybox-bg"></div>
    <div class="fancybox-content">
        <div class="row">
            <div class="col-md-6 img-area">
                <div class="popup-img">
                    <img src="assets/images/fancybox/img2.jpg" alt="Popup">
                </div>
            </div>
            <div class="col-md-6">
                <div class="popup-content text-center" data-img="assets/images/fancybox/shape.png">
                    <h2>دریافت 20٪ تخفیف برای ارسال به صندوق پستی شما</h2>
                    <h5>ثبت نام در خبرنامه</h5>
                    <p>از خبرنامه ما لذت ببرید و از آخرین اخبار و فروش ویژه مطلع شوید. آدرس ایمیل خود را اینجا وارد
                        کنید!</p>
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
    <!-- start topbar area -->
    <section class="home2 topbar">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-5">
                    <p>پیشنهادهای جدید آخر هفته فقط برای دریافت ۵۰% تخفیف</p>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-7">
                    <ul class="d-flex justify-content-end">

                        <li class="notification">
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
                                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="flaticon-shopping-cart-1"></i>
                                            <span class="quantity">۰۲</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <div class="heading d-flex justify-content-between">
                                                <h5>۳ محصول</h5>
                                                <a href="cart.html">سبد خرید</a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="d-flex position-relative">
                                                        <img src="assets/images/home1/product/img1.jpg"
                                                             alt="Product Image"/>
                                                        <div class="text">
                                                            <a href="shop-detail-left.html">
                                                                <h5>لباس نخی سایز بزرگ</h5>
                                                            </a>
                                                            <p>۱ X ۷۸۰۰۰</p>
                                                            <a href="#!" class="icon">
                                                                <i class="far fa-times-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex position-relative">
                                                        <img src="assets/images/home1/product/img2.jpg"
                                                             alt="Product Image"/>
                                                        <div class="text">
                                                            <a href="shop-detail-left.html">
                                                                <h5>دامن مینی گلدار</h5>
                                                            </a>
                                                            <p>۲ X ۸۸۰۰۰</p>
                                                            <a href="#!" class="icon">
                                                                <i class="far fa-times-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex position-relative">
                                                        <img src="assets/images/home1/product/img3.jpg"
                                                             alt="Product Image"/>
                                                        <div class="text">
                                                            <a href="shop-detail-left.html">
                                                                <h5>شلوار آجدار گشاد</h5>
                                                            </a>
                                                            <p>۱ X ۷۸۰۰۰</p>
                                                            <a href="#!" class="icon">
                                                                <i class="far fa-times-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="total d-flex justify-content-between">
                                                <p>مجموع</p>
                                                <p>۴۹۹۰۰۰</p>
                                            </div>
                                            <div class="check">
                                                <a href="checkout.html" class="button-style2">پرداخت
                                                    <span class="btn-dot"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end topbar area -->

    <!-- start menubar area -->
    @include('sections.menubar')
    <!-- end menubar area -->
</header>
<!-- end header area -->

<!-- start banner area -->
<section class="home2 banner" data-img="assets/images/home2/banner/banner-bg.jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-7 col-lg-6 order-1 order-lg-0">
                <div class="text-part">
                    <h6>مجموعه جدید</h6>
                    <h1>مجموعه مد بزرگ ۱۴۰۱</h1>
                    <p>تا 40٪ تخفیف برای اقلام فروش نهایی <br> همین حالا!</p>
                    <a href="shop-5-column.html" class="button-style2">نمایش مجموعه</a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-6 order-0 order-lg-1">
                <div class="image text-center">
                    <img src="assets/images/home2/banner/banner-img1.png" alt="Banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner area -->

<!-- start category area -->
<section class="home2 category pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item item-animation">
                                    <img src="assets/images/home2/category/item1.jpg" alt="Category">
                                    <div class="content">
                                        <h6>زنانه</h6>
                                        <h5>تا ۷۰% تخفیف و ارسال رایگان</h5>
                                        <a href="shop-4-column.html">مشاهده تخفیف ها <img
                                                style="padding-right:5px; width: 21px; height: 16px;"
                                                src="assets/images/arrow-pointing-to-left.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-item item-animation">
                                    <img src="assets/images/home2/category/item2.jpg" alt="Category">
                                    <div class="content">
                                        <h6>مردانه</h6>
                                        <h5>ارسال رایگان برای سفارش بالای ۲۲۰ هزار تومان</h5>
                                        <a href="shop-4-column.html">مشاهده تخفیف ها <img
                                                style="padding-right:5px; width: 21px; height: 16px;"
                                                src="assets/images/arrow-pointing-to-left.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-item item-animation">
                                    <img src="assets/images/home2/category/item4.jpg" alt="Category">
                                    <div class="content">
                                        <h6>۲۵ درصد تخفیف</h6>
                                        <h5>مدل کیف زین چرمی</h5>
                                        <a href="shop-4-column.html">مشاهده تخفیف ها <img
                                                style="padding-right:5px; width: 21px; height: 16px;"
                                                src="assets/images/arrow-pointing-to-left.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="single-item item-animation">
                            <img src="assets/images/home2/category/item3.jpg" alt="Category">
                            <div class="content">
                                <h6>۱۷ درصد تخفیف</h6>
                                <h5>مجموعه اختصاصی بهار ۱۴۰۱</h5>
                                <a href="shop-4-column.html">مشاهده تخفیف ها <img
                                        style="padding-right:5px; width: 21px; height: 16px;"
                                        src="assets/images/arrow-pointing-to-left.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end category area -->

<!-- start product area -->
<section class="home2 product p-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>محصولات جدید</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">محصولات جدید
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">مد
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">جدید
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>لباس نخی سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>مردانه، ژاکت</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت قرمز اختصاصی</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت پنبه ای </h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>پیراهن، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>پیراهن نخی </h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>تی شرت مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>تی شرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تاب های زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>لباس نخی سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>مردانه، ژاکت</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت قرمز اختصاصی</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت پنبه ای</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>پیراهن، زنان</p>
                                        <a href="shop-detail-left.html">
                                            <h6>پیراهن نخی هوشمند</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>تی شرت مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>تی شرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تاب های زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p9b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p10b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تاب های زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p1b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>لباس نخی سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p2b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه سایز بزرگ</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p3b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>مردانه، ژاکت</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت قرمز اختصاصی</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p4b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>ژاکت پنبه ای</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p5b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>پیراهن، زنان</p>
                                        <a href="shop-detail-left.html">
                                            <h6>پیراهن نخی</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p6b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>ژاکت، زنانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>کت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p7b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>تی شرت مردانه</p>
                                        <a href="shop-detail-left.html">
                                            <h6>تی شرت مردانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                                <div class="single">
                                    <span class="offer">-۲۹%</span>
                                    <div class="image">
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8a.jpg" class="img-main"
                                                 alt="Product">
                                        </a>
                                        <a href="shop-detail-left.html">
                                            <img src="assets/images/home2/product/p8b.jpg" class="img-hover"
                                                 alt="Product">
                                        </a>
                                    </div>
                                    <div class="content text-center">
                                        <p>لباس، زنان</p>
                                        <a href="shop-detail-left.html">
                                            <h6>بهترین تیشرت زنانه</h6>
                                        </a>
                                        <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                        <div class="action">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="wishlist.html">
                                                        <i class="flaticon-heart"></i>
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
                                            <a href="cart.html" class="add-cart"><i
                                                    class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                        </div>
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
<!-- end product area -->

<!-- start deal area -->
<section class="home2 deal" data-img="assets/images/home2/deal-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>قرعه کشی بزرگ</h3>
                </div>
                <div class="content text-center">
                    <div id="offer-time">
                        <ul class="d-flex justify-content-center">
                            <li class="text-center">
                                <h3 class="days"></h3>
                                <span>روز</span>
                            </li>
                            <li class="text-center">
                                <h3 class="hours"></h3>
                                <span>ساعت</span>
                            </li>
                            <li class="text-center">
                                <h3 class="minutes"></h3>
                                <span>دقیقه</span>
                            </li>
                            <li class="text-center">
                                <h3 class="secounds"></h3>
                                <span>ثانیه</span>
                            </li>
                        </ul>
                    </div>
                    <a href="shop-4-column.html" class="button-style2">حالا خرید کنید</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end deal area -->

<!-- start trending area -->
<section class="home2 trending p-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>محصولات پرطرفدار</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="single-item">
                                <img src="assets/images/home2/trending/big-img.jpg" alt="Product">
                                <div class="content">
                                    <a href="shop-4-column.html">
                                        <h4>مجموعه زمستانی فروش پایان فصل تا ۳۰٪</h4>
                                    </a>
                                    <p>دسترسی: <span>۰۷ موجود است</span></p>
                                    <h6> تومان۸۴۵۰۰۰ <span>تومان ۹۹۹۰۰۰</span></h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p1.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس، زنانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین کیف زنانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p2.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس، زنانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین تیشرت زنانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p3.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس، زنانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین کت زنانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p4.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس، زنانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین تیشرت زنانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p5.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس، زنانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین کیف زنانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <div class="single">
                                        <span class="offer">-۲۹%</span>
                                        <div class="image">
                                            <a href="shop-detail-left.html">
                                                <img src="assets/images/home2/trending/p6.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content text-center">
                                            <p>لباس مردانه</p>
                                            <a href="shop-detail-left.html">
                                                <h6>بهترین کت مردانه</h6>
                                            </a>
                                            <p><span>تومان ۱۱۰۰۰۰</span> - تومان۹۹۰۰۰</p>
                                            <div class="action">
                                                <ul class="d-flex justify-content-center">
                                                    <li>
                                                        <a href="wishlist.html">
                                                            <i class="flaticon-heart"></i>
                                                            <p class="my-tooltip">
                                                                خرید
                                                            </p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#!" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal">
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
                                                <a href="cart.html" class="add-cart"><i
                                                        class="flaticon-shopping-cart-1"></i>اضافه به سبد خرید</a>
                                            </div>
                                        </div>
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
<!-- end trending area -->

<!-- start video area -->
<section class="home2 video pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content" data-img="assets/images/home3/video-bg.jpg">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-xl-6 col-lg-8 order-1 order-lg-1">
                            <h6>تبلیغات</h6>
                            <h2>آخرین تجارت آنلاین هرگز سخت تر از این نبوده است</h2>
                            <a href="shop-5-column.html" class="button-style2">حالا خرید کنید</a>
                        </div>
                        <div class="col-xxl-7 col-xl-6 col-lg-4 order-0 order-lg-0">
                            <div class="vid-area text-center">
                                <a class="venobox" data-autoplay="true" data-vbtype="video"
                                   href="https://www.youtube.com/watch?v=LCmsrVOXzZc">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end video area -->

<!-- start quick-view area -->
<section class="home2 quick-view pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="big-item">
                    <img src="assets/images/home2/quick/img-big1.jpg" alt="Product">
                    <div class="content">
                        <div class="text">
                            <a href="shop-5-column.html">
                                <h5>مجموعه زنانه</h5>
                            </a>
                            <h2>حداقل ۴۰ - ۷۰٪ تخفیف</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="title">
                    <h5>ویژه</h5>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img1.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>پارچه برش ماهی </h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img2.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>پارچه زرق و برق دار</h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img3.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>لباس مد</h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="big-item">
                    <img src="assets/images/home2/quick/img-big2.jpg" alt="Product">
                    <div class="content">
                        <div class="text">
                            <a href="shop-6-column.html">
                                <h5>ساعت مردانه</h5>
                            </a>
                            <h2>حداقل ۴۰ - ۷۰٪ تخفیف</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="title">
                    <h5>بیشترین فروش</h5>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img4.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>تی شرت طراح</h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img5.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>کیف طراح</h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="item d-flex align-items-center">
                    <div class="image">
                        <a href="shop-detail-right.html">
                            <img src="assets/images/home2/quick/img6.jpg" alt="Product">
                        </a>
                    </div>
                    <div class="text">
                        <a href="shop-detail-right.html">
                            <h6>تیشرت مد</h6>
                        </a>
                        <p> تومان۹۹۰۰۰</p>
                        <ul class="d-flex">
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end quick-view area -->

<!-- start client area -->
<section class="home1 home2 client pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>نظرات شما</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single text-center">
                            <div class="quote">
                                <img src="assets/images/home1/quote/img1.png" alt="Quote">
                            </div>
                            <h5>کوثر بختیاری</h5>
                            <span>مدل</span>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <ul class="d-flex justify-content-center">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single text-center center-item">
                            <div class="quote">
                                <img src="assets/images/home2/quote/quote.png" alt="Quote">
                            </div>
                            <h5>علی اکبر رشیدی</h5>
                            <span>طراح</span>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است </p>
                            <ul class="d-flex justify-content-center">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single text-center">
                            <div class="quote">
                                <img src="assets/images/home1/quote/img1.png" alt="Quote">
                            </div>
                            <h5>محمد مهدی اخلاقی</h5>
                            <span>برنامه نویس</span>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <ul class="d-flex justify-content-center">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end client area -->

<!-- start blog area -->
<section class="home1 home2 blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>وبلاگ</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single">
                            <div class="image item-animation2">
                                <a href="blog-detail-left.html">
                                    <img src="assets/images/home2/blog/blog1.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#!">
                                    <p>۱۱ , فروردین , ۱۴۰۱</p>
                                </a>
                                <a href="blog-detail-left.html">
                                    <h6>مطلب شماره 1</h6>
                                </a>
                                <a href="blog-detail-left.html" class="button-style2">خواندن ادامه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single">
                            <div class="image item-animation2">
                                <a href="blog-detail-left.html">
                                    <img src="assets/images/home2/blog/blog2.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#!">
                                    <p>۱۱ , فروردین , ۱۴۰۱</p>
                                </a>
                                <a href="blog-detail-left.html">
                                    <h6>مطلب شماره 2</h6>
                                </a>
                                <a href="blog-detail-left.html" class="button-style2">خواندن ادامه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single">
                            <div class="image item-animation2">
                                <a href="blog-detail-left.html">
                                    <img src="assets/images/home2/blog/blog3.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#!">
                                    <p>۱۱ , فروردین , ۱۴۰۱</p>
                                </a>
                                <a href="blog-detail-left.html">
                                    <h6>مطلب شماره 3</h6>
                                </a>
                                <a href="blog-detail-left.html" class="button-style2">خواندن ادامه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single">
                            <div class="image item-animation2">
                                <a href="blog-detail-left.html">
                                    <img src="assets/images/home2/blog/blog4.jpg" alt="Blog">
                                </a>
                            </div>
                            <div class="content">
                                <a href="#!">
                                    <p>۱۱ , فروردین , ۱۴۰۱</p>
                                </a>
                                <a href="blog-detail-left.html">
                                    <h6>مطلب شماره 4</h6>
                                </a>
                                <a href="blog-detail-left.html" class="button-style2">خواندن ادامه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog area -->

<!-- start overview area -->
<section class="home1 home2 overview">
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
<footer class="home2 footer">
    <!-- start footer-top area -->
    <section class="footer-top pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <div class="title">
                            <h5>درباره ما</h5>
                        </div>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
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
                                        <img id="zoom_01" src="assets/images/shop/img1.jpg" alt="Product"
                                             data-zoom-image="assets/images/shop/img1.jpg">
                                    </div>
                                    <div class="item swiper-slide">
                                        <img id="zoom_02" src="assets/images/shop/img2.jpg" alt="Product"
                                             data-zoom-image="assets/images/shop/img2.jpg">
                                    </div>
                                    <div class="item swiper-slide">
                                        <img id="zoom_03" src="assets/images/shop/img3.jpg" alt="Product"
                                             data-zoom-image="assets/images/shop/img3.jpg">
                                    </div>
                                    <div class="item swiper-slide">
                                        <img id="zoom_04" src="assets/images/shop/img4.jpg" alt="Product"
                                             data-zoom-image="assets/images/shop/img4.jpg">
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
                            <p class="desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                است </p>

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
