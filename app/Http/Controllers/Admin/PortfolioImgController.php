<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\PortfolioImg;
use App\Helpers\FileManager;

class PortfolioImgController extends Controller
{
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }



    public function index()
    {
        $portfolio_images = PortfolioImg::first();
       return view('admin.images.index',compact('portfolio_images'));
    }

    public function store(Request $request)
    {
    
            $portfolio_images = new PortfolioImg();
            $data = $request->all();

            if ($request->hasFile('image')) {
                $data['image'] = [];
                foreach ($request->file('image') as $key => $file) {
                    $data['image'][$key] = FileManager::fileUpload($file, 'portfolio');
                }
            }

            $portfolio_images->image = $data['image'];
            $portfolio_images->save();

            $notification = [
                'message' => __('images_new'),
                'alert-type' => 'success'
            ];


        return redirect()->route('admin.images')->with($notification);
       
    }


    public function show()
    {
        return view('admin.images.add');
    }

    public function update(Request $request, $id)
    {
        $portfolio_images = PortfolioImg::find($id);
        $portfolio_images->setTranslation('title', app()->getLocale(), $request->title);



        $data = $request->all();
        $data['image'] = $portfolio_images->image ?? [];
        if ($request->hasFile('image')) {
            if($request->has('image')){
                foreach ($request->file('image') as $key => $file) {
                    array_push($data['image'], FileManager::fileUpload($file, 'portfolio'));
                }
            }
            $portfolio_images->image = $data['image'];
        }


        $portfolio_images->save();

        $notification = [
            'message' => __('image_edit'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.images')->with($notification);

    }




    public function delete_images_portfolio($id, Request $request){
        $key = $request->key;
        $data = $request->all();
        
        $fullImgPath = storage_path("uploads/portfolio/$key.jpg");
        $portfolio_images = PortfolioImg::find($id);
        $image = $portfolio_images->image;
        unset($image[$key]);
        $portfolio_images->update([
            'image'=>$image,
        ]);
 
    return response()->json(['success'=>true,'images'=>$portfolio_images->image]);
    }

}
