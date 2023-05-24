<?php

namespace App\Http\Controllers\Admin;

use App\Models\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }



    public function index()
    {
        $common = Common::orderBy('id','asc')->get();
        return view('admin.common.index',compact('common'));
    }


    public function store(Request $request)
    {
    
            $common = new Common();
            $common->setTranslation('service_desc', app()->getLocale(), $request->service_desc);
            $common->setTranslation('project_desc', app()->getLocale(), $request->project_desc);
           
            $common->icon1 = $this->crud->common_image('common',$request,'icon1');
            $common->icon2 = $this->crud->common_image('common',$request,'icon2');
            $common->save();

    

            $notification = [
                'message' => __('common_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.common')->with($notification);
       
    }

    public function show()
    {

        return view('admin.common.add');
    }

    public function edit($id)
    {
        $common = Common::findOrFail($id);
        return view('admin.common.edit', compact('common'));
    }

    public function update(Request $request, $id)
    {

             $common = Common::findOrFail($id);
             
            if ($request->file('icon1')) {
                File::delete($common->icon1);
                $common->icon1 = $this->crud->common_image('common',$request,'icon1');
            }
            if ($request->file('icon2')) {
                File::delete($common->icon2);
                $common->icon2 = $this->crud->common_image('common',$request,'icon2');
            }
        
            $common->setTranslation('contact_desc', app()->getLocale(), $request->contact_desc);
            
            $common->save();
  

            $notification = [
                'message' => __('common_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.common')->with($notification);
     
    }

    public function destroy($id)
    {
        $common = Common::find($id)->delete();

        $notification = array(
            'message' => __('common_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.common')->with($notification);
    }


   
}
