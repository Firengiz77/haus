<?php

namespace App\Http\Controllers\Admin;


use App\Models\Product;
use App\Helpers\Crud;
use App\Helpers\FileManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class ProductController extends Controller
{
    
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

 
    public function index()
    {
        $products = Product::orderBy('id','asc')->paginate(10);
        return view('admin.product.index',compact('products'));
    }

    public function show()
    {
        $brands = Brand::orderBy('id')->where('category_id',0)->get();
        return view('admin.product.add',compact('brands'));
    }

    public function store(Request $request)
    {

        $product = new Product();
        $data = $request->all();
        if ($request->hasFile('images')) {
            $data['images'] = [];
            foreach ($request->file('images') as $key => $file) {
                $data['images'][$key] = FileManager::fileUpload($file, 'products');
            }
        }

   
        $product->setTranslation('alt', app()->getLocale(), $request->alt);
        $product->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
        $product->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
        $product->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
        $product->category_id = $request->category_id;

        $product->images = $data['images'];

        $product->save();

        $notification = [
            'message' => __('product_new'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.product')->with($notification);
    }


    public function edit($id)
    {
        $brands = Brand::orderBy('id')->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('brands','product'));
    }

    public function update(Request $request, $id)
    {

         $product = Product::findOrFail($id);

        $data = $request->all();
        $data['images'] = $product->images ?? [];
        if ($request->hasFile('images')) {
            if($request->has('images')){
                foreach ($request->file('images') as $key => $file) {
                    array_push($data['images'], FileManager::fileUpload($file, 'products'));
                }
            }
            $product->images = $data['images'];
             }

       
          
            $product->setTranslation('alt', app()->getLocale(), $request->alt);
            $product->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $product->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
            $product->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
            $product->category_id = $request->category_id;
       
            $product->save();

            $notification = [
                'message' => __('product_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.product')->with($notification);
     
    }

    public function destroy($id)
    {
      Product::find($id)->delete();
   

        $notification = array(
            'message' => __('product_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.product')->with($notification);
    }


    public function delete_images_photos($id, Request $request){
        $key = $request->key;
        $data = $request->all();
        
        $fullImgPath = storage_path("uploads/product/$key.jpg");
        $product = Product::find($id);
        $images = $product->images;
        unset($images[$key]);
        $product->update([
            'images'=>$images,
        ]);
        //  foreach ($photos->image as $img) {
        //     FileManager::fileDelete('photos', $img);
        //  }
    return response()->json(['success'=>true,'images'=>$product->images]);
    }


    public function categories($category_id)
    {
        $subcategories = Brand::where('category_id', $category_id)->orderBy('name')->get();
        if ($subcategories) {
            return view('admin.widget._subcategory_ajax', compact('subcategories'));
        }

        return redirect()->back();
    }

    public function search(Request $request)
    {
         if ($request->q === null || $request->q === "" || $request->q === " " ) {
         return response()->json(['error' => 'Mehsul Tapilmadi']);
         }
        
        $name = 'name';
        if ($request->q) {
        //   $results = Product::where($name, 'LIKE', "%$request->q%")
        //     ->orderByDesc('id')->get();

        $brand = Brand::where($name, 'LIKE', "%$request->q%")->first();
       $products = Product::where('category_id',$brand->id)->get();

        return view('front.partials.search', compact('products'));
              
        }
    }




}
