<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }

    public function index()
    {
        $sliders = Slider::orderBy('id','asc')->get();
        return view('admin.slider.index',compact('sliders'));
    }


    
    public function store(Request $request)
    {

     

         
            $slider = new Slider();
            $slider->setTranslation('desc', app()->getLocale(), $request->desc);
            $slider->setTranslation('desc_1', app()->getLocale(), $request->desc_1);
            $slider->setTranslation('alt', app()->getLocale(), $request->alt);
            $slider->link = $request->link;
            $slider->image = $this->crud->common_image('slider',$request,'image');

            if($request->file('video')) {
              $slider->video = $path;
            }

            $slider->save();

            $notification = [
                'message' => __('slider_new'),
                'alert-type' => 'success'
            ];

            return redirect()->route('admin.slider')->with($notification);       
    }

      
    public function show()
    {
        return view('admin.slider.add');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

  
             
        if ($request->file('image')) {
            File::delete($slider->image);
            $slider->image = $this->crud->common_image('slider',$request,'image');
        }
          
        $slider->setTranslation('desc', app()->getLocale(), $request->desc);
        $slider->setTranslation('desc_1', app()->getLocale(), $request->desc_1);
        $slider->setTranslation('alt', app()->getLocale(), $request->alt);
        $slider->link = $request->link;
        $slider->save();

        $notification = [
            'message' => __('slider_edit'),
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.slider')->with($notification);
    }

    public function destroy($id)
    {
       Slider::find($id)->delete();

        $notification = array(
            'message' => __('slider_destroy'),
            'alert-type' => 'success'
        );

        return redirect()->route('admin.slider')->with($notification);
    }








}
