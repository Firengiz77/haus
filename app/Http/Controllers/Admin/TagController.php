<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
   
    public function index()
    {
        $tags = Tag::orderBy('id','asc')->get();
        return view('admin.tags.index',compact('tags'));
    }

    public function store(Request $request)
    {
        $exists_product = Tag::where('title', $request->title)->doesntExist();
        if ($exists_product) {
            $tag = new Tag();
            $tag->setTranslation('title', app()->getLocale(), $request->title);
            $tag->save();

            $notification = [
                'message' => __('tag_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.tags')->with($notification);
        } else {

            $notification = [
                'message' => __('exists_language'),
                'alert-type' => 'success'
            ];
            return redirect()->back()->with('error', __('exists_language'));
        }
    }


    public function show(Tag $tag)
    {
        return view('admin.tags.add');
    }

    public function edit($id)
    {
        $tag = Tag::where('id',$id)->first();
        return view('admin.tags.edit',compact('tag'));
    }

 
    public function update(Request $request,$id)
    {
            $tag = Tag::find($id);
      
            $tag->setTranslation('title', app()->getLocale(), $request->title);
            $tag->save();

            $notification = [
                'message' => __('tag_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.tags')->with($notification);
     
    }


    public function destroy($id)
    {
     $tag = Tag::find($id);
     $tag->delete();

        $notification = [
            'message' => __('tag_destroy'),
            'alert-type' => 'success'
        ];
        return redirect()->route('admin.tags')->with($notification);
    }
}
