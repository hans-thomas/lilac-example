<?php


    Route::get( '/', function() {
        return view( 'pages.index' );
    } );

    Route::get( '/list', function() {
        return view( 'pages.list' );
    } );

    Route::get( '/detail', function() {
        return view( 'pages.detail' );
    } );
