<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Client;
use App\Models\Blog;
use App\Models\Slider;

class AdminController extends Controller
{
    public function all_admin(){
        $admins = User::get();
        return view('admin.user.all_admin',compact('admins'));
    }
    
   public function index(){
    $product = Product::get();
    $user = User::get();
    $blog = Blog::get();
    $slider = Slider::get();
    

    return view('admin.user.dashboard',compact('product','user','blog','slider'));
   }

   public function account(){
      return view('admin.user.account');
     }


}
