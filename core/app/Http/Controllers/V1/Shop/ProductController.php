<?php

    namespace App\Http\Controllers\V1\Shop;

    use App\Http\Controllers\Controller;
    use App\Models\Shop\Product;
    use Lilac;

    class ProductController extends Controller {
        public function show( Product $product ) {
            $product->loadMissing( 'categories' );
            $featured = Lilac::recommendedModels( $product, limit: 5 );

            return view( 'pages.products-detail', compact( 'product', 'featured' ) );
        }
    }
