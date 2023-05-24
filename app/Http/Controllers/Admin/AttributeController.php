<?php

namespace App\Http\Controllers\Admin;


use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;



class AttributeController extends Controller
{
  
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $attributes = Attribute::orderBy('id','asc')->get();
        return view('admin.attribute.index',compact('attributes'));
    }


    public function store(Request $request)
    {
    
            
            $attribute = new Attribute();
            $attribute->setTranslation('name', app()->getLocale(), $request->name);
            $attribute->setTranslation('desc', app()->getLocale(), $request->desc);
            $attribute->image = $this->crud->common_image('attribute',$request,'image');

            $attribute->save();
            $notification = [
                'message' => __('attribute_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.attribute')->with($notification);
       
    }

   
    
    public function show()
    {
        return view('admin.attribute.add');
    }

    public function edit($id)
    {
       
        $attribute = Attribute::findOrFail($id);
        return view('admin.attribute.edit', compact('attribute'));
    }

  
    public function update(Request $request, $id)
    {
   
             $attribute = Attribute::findOrFail($id);

                
            if ($request->file('image')) {
                File::delete($attribute->image);
                $attribute->image = $this->crud->common_image('attribute',$request,'image');
            }

             
            $attribute->setTranslation('name', app()->getLocale(), $request->name);
            $attribute->setTranslation('desc', app()->getLocale(), $request->desc);
            $attribute->save();

            $notification = [
                'message' => __('attribute_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.attribute')->with($notification);
     
    }

    public function destroy($id)
    {
        Attribute::find($id)->delete();

        $notification = array(
            'message' => __('attribute_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.attribute')->with($notification);
    }


}
