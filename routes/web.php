<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/about',[MainController::class,'about'])->name('about');
Route::get('/portfolio/images',[MainController::class,'portfolio_images'])->name('portfolio_images');
Route::get('/portfolio/videos',[MainController::class,'portfolio_videos'])->name('portfolio_videos');
Route::post('/send/form/message',[FormController::class,'send'])->name('send_form');
Route::post('/send/subscribe/message',[SubscribeController::class,'send'])->name('subscribe');
Route::post('/ckeditor/upload',[MainController::class,'ckeditor_upload'])->name('ckeditor.upload');
Route::get('/services',[MainController::class,'services'])->name('services');
Route::get('/blogs',[MainController::class,'blogs'])->name('blogs');
Route::get('/blog_single/{slug}',[MainController::class,'blog_single'])->name('blog_single');
Route::get('/category/{slug}',[MainController::class,'category'])->name('category');
Route::get('/subcategory/{slug}',[MainController::class,'subcategory'])->name('subcategory');
Route::get('/products/{slug}',[MainController::class,'products'])->name('products');
Route::get('count_images/{id}/{category_id}/{image}/{alt_category_id}/{alt_alt_category_id}',[MainController::class,'count_images'])->name('count_images');
Route::get('/brands',[MainController::class,'brands'])->name('brands');
Route::get('/search/{q?}', [ProductController::class, 'search'])->name('search');

