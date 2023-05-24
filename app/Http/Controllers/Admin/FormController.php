<?php

namespace App\Http\Controllers\Admin;
 
use App\Models\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::get();

        return view('admin.form.index',compact('forms'));
    }

 
    public function show($id)
    {
         $form = Form::findOrFail($id);
         return view('admin.form.show',compact('form'));
    }

    public function send(Request $request){
        $form = new Form();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->message = $request->message;
        $form->save();
        
        toastr()->success(__('form_new'));

    return redirect()->back();

    }
   
}
