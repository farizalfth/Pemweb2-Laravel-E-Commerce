<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    $title = "Homepage";
    return view('web.homepage',['title'=>$title]);
    });

Route::get('products', function(){
    $title = "Products";
    return view('web.products',['title'=>$title]);
    });

Route::get('products/{slug}', function($slug){
    $title = "Single Product";
    return view('web.single_product',['title'=>$title,'slug'=>$slug]);
    });

Route::get('categories', function(){
    $title = "Categories";
    return view('web.categories',['title'=>$title]);
    });

Route::get('category/{slug}', function($slug){
    $title = "Single Category";
    return view('web.single_category',['title'=>$title,'slug'=>$slug]);
    });

Route::get('cart', function(){
    $title = "Cart";
    return view('web.cart',['title'=>$title]);
    });
    
Route::get('checkout', function(){
    $title = "Checkout";
    return view('web.checkout',['title'=>$title]);
    });

## Kode baru diubah menjadi seperti ini
Route::get('/', [HomepageController::class, 'index']);
Route::get('products', [HomepageController::class, 'products']);
Route::get('product/{slug}', [HomepageController::class, 'product']);
Route::get('category', [HomepageController::class, 'categories'])->name('categories');
Route::get('category/{slug}', [HomepageController::class, 'category'])->name('category.show');
Route::get('cart', [HomepageController::class, 'cart']);
Route::get('checkout', [HomepageController::class, 'checkout']);