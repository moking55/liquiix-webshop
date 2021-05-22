<?php

// Include router class
include_once 'routes.php';

// Add base route (startpage)
Route::add('/',function(){
    include './pages/portal-new.php';
});
Route::add('/shop',function(){
    include './pages/shop-index.php';
});
Route::add('/shop/login',function(){
    include './pages/shop-login.php';
});
Route::add('/shop/catalog',function(){
    include './pages/catalog.php';
});


Route::run('/');