<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $about = About::orderBy('id','asc')->get();
        return view('admin.about.index',compact('about'));
    }


    public function store(Request $request)
    {
    
            $about = new About();
            $about->setTranslation('desc', app()->getLocale(), $request->desc);
            $about->image = $this->crud->common_image('about',$request,'image');
            $about->save();

            $notification = [
                'message' => __('about_new'),
                'alert-type' => 'success'
            ];

        return redirect()->route('admin.about')->with($notification);
       
    }

   
    
    public function show()
    {
        return view('admin.about.add');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

  
    public function update(Request $request, $id)
    {
   
      
             $about = About::findOrFail($id);
             
            if ($request->file('image')) {
                File::delete($about->image);
                $about->image = $this->crud->common_image('about',$request,'image');
            }
            $about->setTranslation('desc', app()->getLocale(), $request->desc);
            $about->save();

            $notification = [
                'message' => __('about_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.about')->with($notification);
     
    }




   

  
}
