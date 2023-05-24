<?php

namespace App\Http\Controllers\Admin;


use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Helpers\FileManager;


class ClientController extends Controller
{
 
    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
       $clients = Client::get();
       return view('admin.client.index',compact('clients'));
    }

    public function edit($id){
        $client = Client::findOrFail($id);
        return view('admin.client.edit',compact('client'));
    }
    public function store(Request $request)
    {
    
            $client = new Client();
            $data = $request->all();

            if ($request->hasFile('images')) {
                $data['images'] = [];
                foreach ($request->file('images') as $key => $file) {
                    $data['images'][$key] = FileManager::fileUpload($file, 'client');
                }
            }

            $client->images = $data['images'];
            $client->setTranslation('alt', app()->getLocale(), $request->alt);
          

            $client->save();

            $notification = [
                'message' => __('client_new'),
                'alert-type' => 'success'
            ];

        return redirect()->route('admin.client')->with($notification);
       
    }


    public function show()
    {
        return view('admin.client.add');
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);


        $data = $request->all();
        $data['images'] = $client->images ?? [];
        if ($request->hasFile('images')) {
            if($request->has('images')){
                foreach ($request->file('images') as $key => $file) {
                    array_push($data['images'], FileManager::fileUpload($file, 'client'));
                }
            }
            $client->images = $data['images'];
        }

        $client->setTranslation('alt', app()->getLocale(), $request->alt);
          
        $client->save();

        $notification = [
            'message' => __('client_edit'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.client')->with($notification);

    }




    public function delete_images_photos($id, Request $request){
        $key = $request->key;
        $data = $request->all();
        
        $fullImgPath = storage_path("uploads/client/$key.jpg");
        $client = Client::find($id);
        $images = $client->images;
        unset($images[$key]);
        $client->update([
            'images'=>$images,
        ]);
        //  foreach ($photos->image as $img) {
        //     FileManager::fileDelete('photos', $img);
        //  }
    return response()->json(['success'=>true,'images'=>$client->images]);
    }

}
