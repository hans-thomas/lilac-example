<?php

    namespace App\Http\Controllers\V1\Shop;

    use App\Http\Controllers\Controller;
    use App\Models\Shop\Set;
    use Lilac;

    class SetController extends Controller {
        public function show( Set $set ) {
            $set->loadMissing( 'products.categories' );
            $featured = Lilac::recommendedModels( $set->products, limit: 5 );

            return view( 'pages.sets-detail', compact( 'set', 'featured' ) );
        }
    }
