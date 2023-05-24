<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\About;
use App\Models\Attribute;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Client;
use App\Models\Product;
use App\Models\PortfolioImg;
use App\Models\PortfolioVideo;
use App\Models\CountImage;

class MainController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('id','desc')->get();
        $blogs = Blog::orderBy('id','desc')->take(4)->get();
        $clients = Client::get();
        $random_images = Product::where('category_id',12)->take(4)->first();
        return view('front.pages.index',compact('sliders','blogs','clients','random_images'));
    }
    
      public function brands(){
        return view('front.pages.brands');
    }
    
    
    
  
    public function portfolio_images(){
        $portfolio = PortfolioImg::first();
        return view('front.pages.portfolio_images',compact('portfolio'));
    }

    public function portfolio_videos(){
        $portfolio = PortfolioVideo::get();
        return view('front.pages.portfolio_videos',compact('portfolio'));
    }

    public function about(){
       $about = About::firstOrFail();
       $attributes = Attribute::orderBy('id','desc')->get();
       return view('front.pages.about',compact('about','attributes'));
    }

    public function contact(){
        return view('front.pages.contact');
    }

    public function blogs(){
        $blogs = Blog::orderBy('id','desc')->paginate(10);
        $tags = Tag::get();
        return view('front.pages.blogs',compact('blogs','tags'));
    }

    public function blog_single($slug){
        $blog = Blog::where('slug','like','%'.$slug.'%')->firstOrFail();
        $tags = Tag::get();
        $related_blogs = Blog::orderBy('id','desc')->take(2)->get();

        return view('front.pages.blog_single',compact('blog','tags','related_blogs'));
    }

    public function category($slug){
        $brand = Brand::where('slug','like','%'.$slug.'%')->first();
        $brands = Brand::where('category_id',$brand->id)->get();
        $random_images = Product::where('category_id',12)->take(4)->first();
        return view('front.pages.category',compact('brands','brand','random_images'));
    }

    public function subcategory($slug){
        $brand = Brand::where('slug','like','%'.$slug.'%')->first();
        $brands = Brand::where('category_id',$brand->id)->get();
        $random_images = Product::where('category_id',12)->take(4)->first();
        return view('front.pages.subcategory',compact('brands','brand','random_images'));
    }
    public function products($slug){
        $brand = Brand::where('slug','like','%'.$slug.'%')->first();
        $products = Product::where('category_id',$brand->id)->firstOrFail();
        return view('front.pages.product',compact('brand','products'));
    }

    public function ckeditor_upload(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function count_images($id,$category_id,$image,$alt_category_id,$alt_alt_category_id){
      
        if(CountImage::where('image',$image)->exists()){
            $count = CountImage::where('image',$image)->firstOrFail();
            $count->count +=1;
            $count->save();
        }else{
            $count = new CountImage();
            $count->count = 1;
            $count->image = $image;
            $count->category_id = $category_id;
            $count->alt_category_id = $alt_category_id;
            $count->alt_alt_category_id = $alt_alt_category_id;
            $count->save();
    
        return redirect()->back();

        }
         
    }

}
