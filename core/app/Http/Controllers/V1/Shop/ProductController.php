<?php

    namespace App\Http\Controllers\V1\Shop;

    use App\Http\Controllers\Controller;
    use App\Models\Shop\Product;
    use Illuminate\Database\Eloquent\Builder;

    class ProductController extends Controller {
        public function show( Product $product ) {
            $product->loadMissing( 'categories' );
            $featured = Product::query()
                               ->whereHas( 'categories', fn( Builder $builder ) => $builder->whereIn( 'category_id',
                                   $product->categories->pluck( 'id' ) ) )
                               ->limit( 5 )
                               ->get();

            return view( 'pages.products-detail', compact( 'product', 'featured' ) );
        }
    }
