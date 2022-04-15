<?php


    Route::get( '/', function() {
        return view( 'pages.index' );
    } )->name( 'home' );

    Route::get( '/products/{category}', function( \App\Models\Shop\Category $category ) {
        return view( 'pages.list', [ 'products' => $category->products()->with( 'categories' )->paginate( 1 ) ] );
    } )->name( 'products.index' );

    Route::get( '/details/{product}', function( \App\Models\Shop\Product $product ) {
        return view( 'pages.detail', compact( 'product' ) );
    } )->name( 'products.show' );
