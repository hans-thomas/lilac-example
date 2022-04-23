<?php


    Route::get( '/', function() {
        return view( 'pages.index' );
    } )->name( 'home' );

    Route::get( '/categories/{category}', function( \App\Models\Shop\Category $category ) {

        return view( 'pages.list', [
            'sets' => \App\Models\Shop\Set::query()
                //->with( 'products' )
                                          ->whereHas( 'products',
                    fn( \Illuminate\Database\Eloquent\Builder $builder ) => $builder->whereHas( 'categories',
                        fn( \Illuminate\Database\Eloquent\Builder $builder ) => $builder->where( 'category_product.category_id',
                            $category->id ) ) )->paginate()
        ] );
    } )->name( 'categories.index' );

    Route::get( '/products/{product}', function( \App\Models\Shop\Product $product ) {
        $product->loadMissing( 'categories' );
        $featured = \App\Models\Shop\Product::query()
                                            ->whereHas( 'categories',
                                                fn( \Illuminate\Database\Eloquent\Builder $builder ) => $builder->whereIn( 'category_id',
                                                    $product->categories->pluck( 'id' ) ) )
                                            ->limit( 5 )
                                            ->get();

        return view( 'pages.products-detail', compact( 'product', 'featured' ) );
    } )->name( 'products.show' );

    Route::get( '/sets/{set}', function( \App\Models\Shop\Set $set ) {
        $set->loadMissing( 'products' );
        $featured = \App\Models\Shop\Product::query()
                                            ->whereHas( 'categories',
                                                fn( \Illuminate\Database\Eloquent\Builder $builder ) => $builder->whereIn( 'product_id',
                                                    $set->products()->pluck( 'id' ) ) )
                                            ->limit( 5 )
                                            ->get();

        return view( 'pages.sets-detail', compact( 'set', 'featured' ) );
    } )->name( 'sets.show' );
