<section dir="ltr" class="shop-page shop-detail">
    <div class="container">
        <div class="row">
            <div dir="rtl" class="col-xxl-10 offset-xxl-1">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="image-area">
                            <div class="product-gallery-tab swiper-container" data-gallery="{{ $product->id }}">
                                <div class="swiper-wrapper">
                                    @foreach(range(1,4) as $key)
                                        <div class="item swiper-slide">
                                            <img id="zoom_0{{ $key }}"
                                                 src="{{ asset("assets/images/shop/img{$key}.jpg") }}"
                                                 alt="Product"
                                                 data-zoom-image="{{ asset("assets/images/shop/img{$key}.jpg") }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-thumb-tab swiper-container" data-thumb="{{ $product->id }}">
                                <div class="swiper-wrapper">
                                    @foreach(range(1,4) as $key)
                                        <div class="item swiper-slide">
                                            <img src="{{ asset("assets/images/shop/img-sm{$key}.jpg") }}" alt="Product">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="detail-content">
                            <p class="stock">
                                دسترسی:<span>{{ $product->quantity > 0 ? ' موجود در انبار':' اتمام موجودی'}}</span>
                            </p>
                            <h5>
                                <a href="{{ route('products.show',$product) }}">
                                    {{ $product->title }}
                                </a>
                            </h5>
                            <div class="review-area d-flex align-items-center">
                                <ul class="rating d-flex">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <h5>{{ number_format($product->price) .' تومن' }}</h5>
                            <p class="desc">{{ $product->description }}</p>

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
                                <p>دسته بندی :
                                    @foreach($product->categories as $category)
                                        <a href="{{ route('categories.show',$category) }}">{{ $category->name }}</a> {{ $loop->last ? null:', ' }}
                                    @endforeach
                                </p>
                            </div>

                            <div class="border-area">
                                @if($product->quantity > 0)

                                    <div class="cart-part d-flex align-items-center">
                                        <div class="d-flex number-spinner">
                                            <button data-dir="dwn" class="down-btn"><i class="fas fa-minus"></i>
                                            </button>
                                            <input type="text" class="form-control text-center input-value"
                                                   value="1">
                                            <button data-dir="up" class="up-btn"><i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <a href="#!" class="cart">سبد خرید <span class="btn-dot"></span></a>
                                        <div class="add-more d-flex align-items-center">
                                            <a href="#!"><i class="flaticon-heart"></i></a>
                                            <a href="#!"><i class="flaticon-refresh"></i></a>
                                        </div>
                                    </div>
                                @else
                                    <div class="cart-part d-flex align-items-center">
                                        <a href="#!" class="cart">موجود شد خبرم کن<span class="btn-dot"></span></a>
                                        <div class="add-more d-flex align-items-center">
                                            <a href="#!"><i class="flaticon-heart"></i></a>
                                            <a href="#!"><i class="flaticon-refresh"></i></a>
                                        </div>
                                    </div>
                                @endif
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
