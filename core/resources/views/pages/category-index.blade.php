<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @include('sections.header')
    <title>لیست محصولات</title>
</head>
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
                <h2>لیست محصولات</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">خانه</a></li>
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
                    @foreach($sets as $set)
                        <div class="col-xl-1-5 col-lg-4 col-md-6 col-sm-6">
                            <div class="single">
                                @if(rand(0,100) / 60 > 1)
                                    <span class="offer">-{{ rand(3,50) }}%</span>
                                @endif
                                <div class="image-area position-relative">
                                    <div class="product-gallery-tab swiper-container" data-gallery="{{ $set->id }}">
                                        <div class="swiper-wrapper">
                                            @foreach(range(1,10) as $index => $key)
                                                <div class="item swiper-slide">
                                                    <img
                                                        id="zoom_{{ $set->id . $index }}"
                                                        src="{{ asset("assets/images/home1/product/p{$key}a.png") }}"
                                                        alt="Product"
                                                        data-zoom-image="{{ asset("assets/images/home1/product/p{$key}a.png") }}"
                                                    />
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button
                                            class="btn-prev"
                                            tabindex="0"
                                            role="button"
                                            aria-label="Previous slide"
                                            aria-disabled="false"
                                        >
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                        <button class="btn-next" tabindex="0" role="button" aria-label="Next slide"
                                                aria-disabled="false">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="{{ route('sets.show',$set) }}">
                                        <h6>{{ $set->name }}</h6>
                                    </a>
                                    <p>{{ $set->description }}</p>
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
                                                <a href="#">
                                                    <i class="flaticon-heart"></i>
                                                    <p class="my-tooltip">
                                                        علاقه مندی
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="flaticon-shopping-cart-1"></i>
                                                    <p class="my-tooltip">
                                                        خرید
                                                    </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
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
                @endforeach
                <!-- pagination -->
                    <div class="custom-pagination">
                        {!! $sets->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end category area -->

<!-- start overview area -->
@include('sections.overview')
<!-- end overview area -->

<!-- start footer area -->
@include('sections.footer')
<!-- end footer area -->

@include('sections.scripts')
</body>


</html>
