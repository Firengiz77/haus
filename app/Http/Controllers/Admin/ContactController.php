<?php

namespace App\Http\Controllers\Admin;


use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    
    public function index()
    {
        $contact = Contact::orderBy('id','asc')->get();
        return view('admin.contact.index',compact('contact'));
    }
  
  
    public function store(Request $request)
    {
    

            $contact  = new Contact();
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->fb = $request->fb;
            $contact->wp = $request->wp;
            $contact->insta = $request->insta;
            $contact->linkedin = $request->linkedin;
            $contact->setTranslation('address', app()->getLocale(), $request->address);
            $contact->setTranslation('desc', app()->getLocale(), $request->desc);
            $contact->save();


            $notification = [
                'message' => __('contact_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.contact')->with($notification);
       
    }

    public function show()
    {
        return view('admin.contact.add');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
   
        $contact  = Contact::findOrFail($id);
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->fb = $request->fb;
        $contact->wp = $request->wp;
        $contact->insta = $request->insta;
        $contact->linkedin = $request->linkedin;
    
        $contact->setTranslation('address', app()->getLocale(), $request->address);
        $contact->setTranslation('desc', app()->getLocale(), $request->desc);
        $contact->save();

        $notification = [
            'message' => __('contact_edit'),
            'alert-type' => 'success'
        ];
        
        return redirect()->route('admin.contact')->with($notification);
     
    }


}
