<?php


    use App\Http\Controllers\V1\Home\IndexController;
    use App\Http\Controllers\V1\Shop\CategoryController;
    use App\Http\Controllers\V1\Shop\ProductController;
    use App\Http\Controllers\V1\Shop\SetController;

    Route::get( '/', IndexController::class )->name( 'home' );

    Route::get( '/categories/{category}', [ CategoryController::class, 'show' ] )->name( 'categories.index' );

    Route::get( '/products/{product}', [ ProductController::class, 'show' ] )->name( 'products.show' );

    Route::get( '/sets/{set}', [ SetController::class, 'show' ] )->name( 'sets.show' );
