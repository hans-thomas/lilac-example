<?php


    Route::get( '/', function() {
        return view( 'pages.index' );
    } )->name( 'home' );

    Route::get( '/products/{category}', function( \App\Models\Shop\Category $category ) {
        return view( 'pages.list', [ 'products' => $category->products()->with( 'categories' )->paginate( 1 ) ] );
    } )->name( 'products.index' );

    Route::get( '/details/{product}', function( \App\Models\Shop\Product $product ) {
        $product->loadMissing( 'categories' );
        $featured = \App\Models\Shop\Product::query()
                                            ->whereHas( 'categories',
                                                fn( \Illuminate\Database\Eloquent\Builder $builder ) => $builder->whereIn( 'category_id',
                                                    $product->categories->pluck( 'id' ) ) )
                                            ->limit( 5 )
                                            ->get();

        return view( 'pages.detail', compact( 'product', 'featured' ) );
    } )->name( 'products.show' );
