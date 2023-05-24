<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Helpers\FileManager;



class BrandController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }



    public function index()
    {
        $brands = Brand::orderBy('id','asc')->where('category_id',0)->get();
        return view('admin.brands.index',compact('brands'));
    }


    public function add_sub_subcat($id)
    {
        $brands = Brand::where('category_id',$id)->get();
        $brand = Brand::where('id',$id)->first();
        return view('admin.brands.sub_subcat_index',compact('brand','brands'));
    }
    
    public function sub_subcat($id){
        $brand = Brand::where('id',$id)->first();
        return view('admin.brands.add_sub_subcat',compact('brand'));
    }

    public function edit_sub_subcat($category_id, $id)
    {
        $main_cat = Brand::where('id',$category_id)->first();
        $brand = Brand::findOrFail($id);
        $brands = Brand::get();
        return view('admin.brands.edit_sub_subcat',compact('brand','brands','main_cat'));
    }




    public function add_subcat($id)
    {
        $brands = Brand::where('category_id',$id)->get();
        $brand = Brand::where('id',$id)->first();
        return view('admin.brands.subcat_index',compact('brand','brands'));
    }
    
    public function subcat($id){
        $brand = Brand::where('id',$id)->first();
        return view('admin.brands.add_subcat',compact('brand'));
    }

    public function edit_subcat($category_id, $id)
    {
        $main_cat = Brand::where('id',$category_id)->first();
        $brand = Brand::findOrFail($id);
        $brands = Brand::get();
        return view('admin.brands.edit_subcat',compact('brand','brands','main_cat'));
    }



    public function store(Request $request)
    {
      
            $brand = new Brand();
                     $data = $request->all();

            if ($request->hasFile('images')) {
                $data['images'] = [];
                foreach ($request->file('images') as $key => $file) {
                    $data['images'][$key] = FileManager::fileUpload($file, 'brand');
                }
            $brand->images = $data['images'];
            }
            
            if(!($request->hasFile('images'))){
                return redirect()->back();
            }
            else{
                 $brand->setTranslation('name', app()->getLocale(), $request->name);
            $brand->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $brand->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
            $brand->setTranslation('meta_keyw', app()->getLocale(), $request->meta_keyw);
            $brand->setTranslation('desc',app()->getLocale(),$request->desc);
            $brand->image = $this->crud->common_image('brand',$request,'image');
            $brand->logo = $this->crud->common_image('brand',$request,'logo');


            $brand->category_id = $request->category_id;
            $brand->save();

            $notification = [
                'message' => __('brand_new'),
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.brands')->with($notification);
            }

          
            
            
           
     
    }

   
    public function show()
    {
        $brands = Brand::orderBy('id','asc')->where('category_id',0)->get();
        return view('admin.brands.add',compact('brands'));
    }


    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        $brands = Brand::get();
        return view('admin.brands.edit',compact('brand','brands'));
    }

   

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        if ($request->file('image')) {
            File::delete($brand->image);
            $brand->image = $this->crud->common_image('brand',$request,'image');
        }
        if ($request->file('logo')) {
            File::delete($brand->logo);
            $brand->logo = $this->crud->common_image('brand',$request,'logo');
        }


    $data['images'] = $brand->images ?? [];
        if ($request->hasFile('images')) {
            if($request->has('images')){
                foreach ($request->file('images') as $key => $file) {
                    array_push($data['images'], FileManager::fileUpload($file, 'brand'));
                }
            }
            $brand->images = $data['images'];
        }
        
        
        $brand->setTranslation('name', app()->getLocale(), $request->name);
        $brand->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
        $brand->setTranslation('meta_desc', app()->getLocale(), $request->meta_desc);
        $brand->setTranslation('meta_keyw', app()->getLocale(), $request->meta_keyw);
        $brand->setTranslation('desc',app()->getLocale(),$request->desc);
        
        $brand->category_id = $request->category_id;
        $brand->save();
       

        $notification = [
            'message' => __('brand_edit'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.brands')->with($notification);
    }


    public function destroy($id)
    {
        $brands = Brand::find($id)->delete();

        $notification = array(
            'message' => __('brands_destroy'),
            'alert-type' => 'success'
        );
        
        return redirect()->route('admin.brands')->with($notification);
    }
    
        public function delete_images_photos($id, Request $request){
        $key = $request->key;
        $data = $request->all();
        
        $fullImgPath = storage_path("uploads/brand/$key.jpg");
        $brand = Brand::find($id);
        $images = $brand->images;
        unset($images[$key]);
        $brand->update([
            'images'=>$images,
        ]);
        //  foreach ($photos->image as $img) {
        //     FileManager::fileDelete('photos', $img);
        //  }
    return response()->json(['success'=>true,'images'=>$brand->images]);
    }



   

}
