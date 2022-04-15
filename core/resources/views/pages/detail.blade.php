<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include('sections.header',['title' => 'جزئیات محصول'])

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
@includeWhen(false,'sections.fancybox')
<!-- end fancybox area -->

<!-- start header area -->
<header>
    <!-- start menubar area -->
@include('sections.menubar')
<!-- end menubar area -->
</header>
<!-- end header area -->

<!-- start banner area -->
<section class="inner-page banner" data-img="{{ asset('assets/images/inner/banner-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>جزئیات فروشگاه</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> / فروشگاه</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- end banner area -->

<!-- start detail area -->
<section dir="ltr" class="shop-page shop-detail">
    <div class="container">
        <div class="row">
            <div dir="rtl" class="col-xxl-10 offset-xxl-1">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="image-area">
                            <div class="product-gallery-tab swiper-container">
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
                            <div class="product-thumb-tab swiper-container">
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
</section>
<!-- end detail area -->

<!-- start review area -->
<section dir="ltr" class="shop-page shop-review">
    <div class="container">
        <div class="row">
            <div dir="rtl" class="col-xxl-10 offset-xxl-1">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">توضیحات
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">مرور
                            <span>(۲)</span></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="description">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                بهبود ابزارهای کاربردی می باشد</p>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                                بهبود ابزارهای کاربردی می باشد</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-lg-7">
                                <ul class="comment">
                                    <li class="item d-flex">
                                        <div class="image">
                                            <a href="#!">
                                                <img src="assets/images/shop/review1.jpg" alt="Review Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <ul class="rating d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <a href="#!">
                                                <h6>سهراب سپهری</h6>
                                            </a>
                                            <a href="#!">
                                                <p>۱۱ - فروردین</p>
                                            </a>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                                که لازم است</p>
                                        </div>
                                    </li>
                                    <li class="item d-flex">
                                        <div class="image">
                                            <a href="#!">
                                                <img src="assets/images/shop/review2.jpg" alt="Review Image">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <ul class="rating d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <a href="#!">
                                                <h6>مهراد مستوفی</h6>
                                            </a>
                                            <a href="#!">
                                                <p>۱۱ -فروردین</p>
                                            </a>
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                                طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
                                                که لازم است </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-5">
                                <div class="add-review">
                                    <h6>یک نقد اضافه کنید</h6>
                                    <p>آدرس ایمیل شما منتشر نخواهد شد</p>
                                    <!-- Rating Stars Box -->
                                    <div class="rating-stars d-flex">
                                        <p>امتیاز دهید</p>
                                        <ul id="stars">
                                            <li class='star' title='بد' data-value='1'>
                                                <i class='fas fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='متوسط' data-value='2'>
                                                <i class='fas fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='خوب' data-value='3'>
                                                <i class='fas fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='عالی' data-value='4'>
                                                <i class='fas fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='بهترین!!!' data-value='5'>
                                                <i class='fas fa-star fa-fw'></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <form action="#">
                                        <textarea placeholder="نقد شما*" class="inputs" required></textarea>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <input type="text" placeholder="نام*" class="inputs" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input type="email" placeholder="ایمیل*" class="inputs" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit">ارسال <span class="btn-dot"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end review area -->

<!-- start featured area -->
<section class="home1 featured pb-80">
    <div class="title-area pt-80" data-img="assets/images/home1/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>محصولات پرامتیاز</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                    <div class="single">
                        <span class="offer">-۲۹%</span>
                        <div class="image">
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p1a.png" class="img-main" alt="Product">
                            </a>
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p1b.png" class="img-hover" alt="Product">
                            </a>
                        </div>
                        <div class="content">
                            <a href="shop-detail-right.html">
                                <h6>صندلی راحتی لوکس</h6>
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
                                                مورد علاقه
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
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p2a.png" class="img-main" alt="Product">
                            </a>
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p2b.png" class="img-hover" alt="Product">
                            </a>
                        </div>
                        <div class="content">
                            <a href="shop-detail-right.html">
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
                                                مورد علاقه
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
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p3a.png" class="img-main" alt="Product">
                            </a>
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p3b.png" class="img-hover" alt="Product">
                            </a>
                        </div>
                        <div class="content">
                            <a href="shop-detail-right.html">
                                <h6>صندلی سالن راحتی</h6>
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
                                                مورد علاقه
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
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p4a.png" class="img-main" alt="Product">
                            </a>
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p4b.png" class="img-hover" alt="Product">
                            </a>
                        </div>
                        <div class="content">
                            <a href="shop-detail-right.html">
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
                                                مورد علاقه
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
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p5a.png" class="img-main" alt="Product">
                            </a>
                            <a href="shop-detail-right.html">
                                <img src="assets/images/home1/product/p5b.png" class="img-hover" alt="Product">
                            </a>
                        </div>
                        <div class="content">
                            <a href="shop-detail-right.html">
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
                                                مورد علاقه
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
            </div>
        </div>
    </div>
</section>
<!-- end featured area -->

<!-- start overview area -->
@include('sections.overview')
<!-- end overview area -->

<!-- start footer area -->
@include('sections.footer')
<!-- end footer area -->

@include('sections.scripts')
</body>


</html>
