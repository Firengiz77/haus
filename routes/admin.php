<?php

use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\MetaTagController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\PortfolioVideoController;
use App\Http\Controllers\Admin\PortfolioImgController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubscribeController;


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
 
 // language routes
 Route::get('/language',[LanguageController::class,'index'])->name('language');
 Route::get('/language/edit/{id}',[LanguageController::class,'edit'])->name('language_edit');
 Route::post('/language/add',[LanguageController::class,'store'])->name('language_add');
 Route::get('/language/show',[LanguageController::class,'show'])->name('language_show');
 Route::post('/language/update/{id}',[LanguageController::class,'update'])->name('language_update');
 Route::get('/language/delete/{id}',[LanguageController::class,'destroy'])->name('language_delete');


  // blog routes
  Route::get('/blog',[BlogController::class,'index'])->name('blog');
  Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog_edit');
  Route::post('/blog/add',[BlogController::class,'store'])->name('blog_add');
  Route::get('/blog/show',[BlogController::class,'show'])->name('blog_show');
  Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog_update');
  Route::get('/blog/delete/{id}',[BlogController::class,'destroy'])->name('blog_delete');
 

    // tag routes
    Route::get('/tags',[TagController::class,'index'])->name('tags');
    Route::get('/tags/edit/{id}',[TagController::class,'edit'])->name('tags_edit');
    Route::post('/tags/add',[TagController::class,'store'])->name('tags_add');
    Route::get('/tags/show',[TagController::class,'show'])->name('tags_show');
    Route::post('/tags/update/{id}',[TagController::class,'update'])->name('tags_update');
    Route::get('/tags/delete/{id}',[TagController::class,'destroy'])->name('tags_delete');
 
    
      // meta tags routes
      Route::get('/meta_tags',[MetaTagController::class,'index'])->name('meta_tags');
      Route::get('/meta_tags/edit/{id}',[MetaTagController::class,'edit'])->name('meta_tags_edit');
      Route::post('/meta_tags/add',[MetaTagController::class,'store'])->name('meta_tags_add');
      Route::get('/meta_tags/show',[MetaTagController::class,'show'])->name('meta_tags_show');
      Route::post('/meta_tags/update/{id}',[MetaTagController::class,'update'])->name('meta_tags_update');
      Route::get('/meta_tags/delete/{id}',[MetaTagController::class,'destroy'])->name('meta_tags_delete');
   

         //  Contact routes
         Route::get('/contact',[ContactController::class,'index'])->name('contact');
         Route::get('/contact/edit/{id}',[ContactController::class,'edit'])->name('contact_edit');
         Route::post('/contact/add',[ContactController::class,'store'])->name('contact_add');
         Route::get('/contact/show',[ContactController::class,'show'])->name('contact_show');
         Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact_update');
        

    //  Slider routes
    Route::get('/slider',[SliderController::class,'index'])->name('slider');
    Route::get('/slider/edit/{id}',[SliderController::class,'edit'])->name('slider_edit');
    Route::post('/slider/add',[SliderController::class,'store'])->name('slider_add');
    Route::get('/slider/show',[SliderController::class,'show'])->name('slider_show');
    Route::post('/slider/update/{id}',[SliderController::class,'update'])->name('slider_update');
    Route::get('/slider/delete/{id}',[SliderController::class,'destroy'])->name('slider_delete');
  

    //  About routes
         Route::get('/about',[AboutController::class,'index'])->name('about');
         Route::get('/about/edit/{id}',[AboutController::class,'edit'])->name('about_edit');
         Route::post('/about/add',[AboutController::class,'store'])->name('about_add');
         Route::get('/about/show',[AboutController::class,'show'])->name('about_show');
         Route::post('/about/update/{id}',[AboutController::class,'update'])->name('about_update');
        

  //  Client routes
  Route::get('/client',[ClientController::class,'index'])->name('client');
  Route::post('/client/delete_images/{id}',[ClientController::class,'delete_images_photos'])->name('delete_images_gallery');
  Route::post('/client/update/{id}',[ClientController::class,'update'])->name('client_update');

  Route::get('/client_add_show',[ClientController::class,'show'])->name('client_add_show');
  Route::post('client_add',[ClientController::class,'store'])->name('client_add');
  Route::get('/client_edit/{id}',[ClientController::class,'edit'])->name('client_edit');
 

   // Common routes
 Route::get('/common',[CommonController::class,'index'])->name('common');
 Route::get('/common/edit/{id}',[CommonController::class,'edit'])->name('common_edit');
 Route::post('/common/add',[CommonController::class,'store'])->name('common_add');
 Route::get('/common/show',[CommonController::class,'show'])->name('common_show');
 Route::post('/common/update/{id}',[CommonController::class,'update'])->name('common_update');
 Route::get('/common/delete/{id}',[CommonController::class,'destroy'])->name('common_delete');

  


  
   //  Attribute routes
   Route::get('/attribute',[AttributeController::class,'index'])->name('attribute');
   Route::get('/attribute/edit/{id}',[AttributeController::class,'edit'])->name('attribute_edit');
   Route::post('/attribute/add',[AttributeController::class,'store'])->name('attribute_add');
   Route::get('/attribute/show',[AttributeController::class,'show'])->name('attribute_show');
   Route::post('/attribute/update/{id}',[AttributeController::class,'update'])->name('attribute_update');
   Route::get('/attribute/delete/{id}',[AttributeController::class,'destroy'])->name('attribute_delete');

//  video routes
Route::get('/video',[PortfolioVideoController::class,'index'])->name('video');
Route::get('/video/edit/{id}',[PortfolioVideoController::class,'edit'])->name('video_edit');
Route::post('/video/add',[PortfolioVideoController::class,'store'])->name('video_add');
Route::get('/video/show',[PortfolioVideoController::class,'show'])->name('video_show');
Route::post('/video/update/{id}',[PortfolioVideoController::class,'update'])->name('video_update');
Route::get('/video/delete/{id}',[PortfolioVideoController::class,'destroy'])->name('video_delete');


  //  images routes
  Route::get('/images',[PortfolioImgController::class,'index'])->name('images');
  Route::post('/images/delete_images/{id}',[PortfolioImgController::class,'delete_images_portfolio'])->name('delete_images_portfolio');
  Route::post('/images/update/{id}',[PortfolioImgController::class,'update'])->name('images_update');
  Route::post('/images/add',[PortfolioImgController::class,'store'])->name('images_add');
  Route::get('/images/show',[PortfolioImgController::class,'show'])->name('images_show');


  // Brands routes
 Route::get('/brands',[BrandController::class,'index'])->name('brands');
 Route::get('/brands/edit/{id}',[BrandController::class,'edit'])->name('brands_edit');
 Route::post('/brands/add',[BrandController::class,'store'])->name('brands_add');
 Route::get('/brands/show',[BrandController::class,'show'])->name('brands_show');
 Route::post('/brands/update/{id}',[BrandController::class,'update'])->name('brands_update');
 Route::get('/brands/delete/{id}',[BrandController::class,'destroy'])->name('brands_delete');

 Route::get('subcat_index/{id}',[BrandController::class,'add_subcat'])->name('add_subcat');
 Route::get('subcat/{id}',[BrandController::class,'subcat'])->name('subcat');
 Route::get('/edit_subcat/edit/{category_id}/{id}',[BrandController::class,'edit_subcat'])->name('edit_subcat');

 Route::get('sub_subcat_index/{id}',[BrandController::class,'add_sub_subcat'])->name('add_sub_subcat');
 Route::get('sub_subcat/{id}',[BrandController::class,'sub_subcat'])->name('sub_subcat');
 Route::get('/edit_sub_subcat/edit/{category_id}/{id}',[BrandController::class,'edit_sub_subcat'])->name('edit_sub_subcat');
 Route::post('/brand/delete_images/{id}',[BrandController::class,'delete_images_photos'])->name('delete_images_brand');


 //  products routes
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product_edit');
Route::post('/product/add',[ProductController::class,'store'])->name('product_add');
Route::get('/product/show',[ProductController::class,'show'])->name('product_show');
Route::post('/product/update/{id}',[ProductController::class,'update'])->name('product_update');
Route::get('/product/delete/{id}',[ProductController::class,'destroy'])->name('product_delete');
Route::post('/product/delete_images/{id}',[ProductController::class,'delete_images_photos'])->name('delete_images_product');
Route::get('/category/ajax/{category_id}', [ProductController::class, 'categories'])->name('category.ajax');


       //  Form message routes
       Route::get('/form_message',[FormController::class,'index'])->name('form_message');
       Route::get('/form_message/show/{id}',[FormController::class,'show'])->name('form_message_show');
   
       //  Form message routes
       Route::get('/subcribe_message',[SubscribeController::class,'index'])->name('subcribe_message');
       Route::get('/subscribe_export',[SubscribeController::class,'subscribe_export'])->name('export.subscribe');







});
