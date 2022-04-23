<section class="home1 home2 menubar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-bg">
                    <div class="row align-items-center">
                        <!-- main menu -->
                        <div class="col-lg-12">
                            <!-- desktop-menu -->
                            <nav class="navbar position-static justify-content-center desktop-menu p-0">
                                <div class="main-menu">
                                    <ul class="menu">
                                        <li>
                                            <a href="{{ route('home') }}">خانه</a>
                                        </li>
                                        <li>
                                            <a href="#">فروشگاه</a>
                                            <div class="mega-submenu">
                                                <div class="submenu-inside">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="row">

                                                                    <div class="col-lg-3">
                                                                        <h4>دسته بندی های منتخب</h4>
                                                                        <ul class="big-item">
                                                                            @foreach(\App\Models\Shop\Category::query()->inRandomOrder()->limit(4)->get() as $category)
                                                                                <li>
                                                                                    <a href="{{ route('categories.show',$category) }}">{{ $category->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>


                                                                    <div class="col-lg-3">
                                                                        <h4>دسته بندی های جدید</h4>
                                                                        <ul class="big-item">
                                                                            @foreach(\App\Models\Shop\Category::query()->orderByDesc('created_at')->limit(4)->get() as $category)
                                                                                <li>
                                                                                    <a href="{{ route('categories.show',$category) }}">{{ $category->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <h4>دسته بندی های پربازدید</h4>
                                                                        <ul class="big-item">
                                                                            @foreach(\App\Models\Shop\Category::query()->inRandomOrder()->limit(4)->get() as $category)
                                                                                <li>
                                                                                    <a href="{{ route('categories.show',$category) }}">{{ $category->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <h4>دسته بندی های اختصاصی</h4>
                                                                        <ul class="big-item">
                                                                            @foreach(\App\Models\Shop\Category::query()->inRandomOrder()->limit(4)->get() as $category)
                                                                                <li>
                                                                                    <a href="{{ route('categories.show',$category) }}">{{ $category->name }}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="logo">
                                            <a href="{{ route('home') }}">
                                                <img width="130px" height="130px"
                                                     src="{{ asset('assets/images/home2/logo.png') }}"
                                                     alt="Logo">
                                            </a>
                                        </li>
                                        <li><a href="#">درباره ما</a></li>
                                        <li><a href="#">تماس با ما</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- mobile menu -->
                            <nav class="navbar p-0 mobile-menu position-static">
                                <div class="header-menu position-static">
                                    <ul class="menu">
                                        <li class="active">
                                            <a href="#">خانه</a>
                                        </li>
                                        <li><a href="#">درباره</a></li>
                                        <li>
                                            <a href="#!">صفحات</a>
                                        </li>
                                        <li>
                                            <a href="#!">فروشگاه</a>
                                        </li>
                                        <li>
                                            <a href="#!">وبلاگ</a>
                                        </li>
                                        <li><a href="#">تماس با ما</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
