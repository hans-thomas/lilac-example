<?php

    namespace App\Http\Controllers\V1\Home;

    use App\Http\Controllers\Controller;

    class IndexController extends Controller {
        public function __invoke() {
            return view( 'pages.home' );
        }
    }
