<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\PortfolioVideo;

class PortfolioVideoController extends Controller
{
   

    public function index()
    {
        $links = PortfolioVideo::get();
        return view('admin.video.index',compact('links'));

    }
   public function store(Request $request)
    {
    
            
            $links = new PortfolioVideo();
            $links->link = $request->link;
            $links->save();
            $notification = [
                'message' => __('links_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.video')->with($notification);
       
    }

   
    
    public function show()
    {
        return view('admin.video.add');
    }

    public function edit($id)
    {
       
        $link = PortfolioVideo::findOrFail($id);
        return view('admin.video.edit', compact('link'));
    }

  
    public function update(Request $request, $id)
    {
   
             $links = PortfolioVideo::findOrFail($id);
             $links->link = $request->link;
            $links->save();

            $notification = [
                'message' => __('links_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.video')->with($notification);
     
    }

    public function destroy($id)
    {
        PortfolioVideo::find($id)->delete();

        $notification = array(
            'message' => __('video_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.video')->with($notification);
    }

}
