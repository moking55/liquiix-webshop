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
Route::add('/shop/topup',function(){
    include './pages/topup.php';
});
Route::add('/news',function(){
    include './pages/updates.php';
});


// Admin Route
Route::add('/admin',function(){
    include './pages/admin-index.php';
});
Route::add('/admin/news/add',function(){
    include './pages/news-add.php';
});
Route::add('/admin/products/add',function(){
    include './pages/product-add.php';
});
Route::add('/admin/products',function(){
    include './pages/products.php';
});

Route::run('/');