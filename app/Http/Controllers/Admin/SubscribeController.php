<?php


namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;
use App\Exports\SubscriberExport;
use Maatwebsite\Excel\Facades\Excel;


class SubscribeController extends Controller
{
    
    public function index()
    {
        $forms = Subscribe::get();
        return view('admin.subcribe.index',compact('forms'));
    }


    public function send(Request $request){
        $form = new Subscribe();
        $form->email = $request->email;
        $form->save();
        
        toastr()->success(__('form_new'));

    return redirect()->back();

    }


    public function subscribe_export()
    {
    return Excel::download(new SubscriberExport(), 'subscribe.xlsx');
    }





}
