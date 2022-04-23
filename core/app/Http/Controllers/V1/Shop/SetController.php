<?php

    namespace App\Http\Controllers\V1\Shop;

    use App\Http\Controllers\Controller;
    use App\Models\Shop\Product;
    use App\Models\Shop\Set;
    use Illuminate\Database\Eloquent\Builder;

    class SetController extends Controller {
        public function show( Set $set ) {
            $set->loadMissing( 'products.categories' );
            $featured = Product::query()
                               ->whereHas( 'categories', fn( Builder $builder ) => $builder->whereIn( 'product_id',
                                   $set->products()->pluck( 'id' ) ) )
                               ->limit( 5 )
                               ->get();

            return view( 'pages.sets-detail', compact( 'set', 'featured' ) );
        }
    }
