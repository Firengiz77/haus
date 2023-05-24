<?php

namespace App\Http\Controllers\Admin;


use App\Models\MetaTag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MetaTagController extends Controller
{
 
    public function index()
    {
        $meta_tags = MetaTag::orderBy('id','asc')->get();
        return view('admin.meta_tags.index',compact('meta_tags'));
    }
  

    public function store(Request $request)
    {
    

            $meta_tag  = new MetaTag();
            $meta_tag->setTranslation('about_meta_title', app()->getLocale(), $request->about_meta_title);
            $meta_tag->setTranslation('about_meta_desc', app()->getLocale(), $request->about_meta_desc);
            $meta_tag->setTranslation('about_meta_keyw', app()->getLocale(), $request->about_meta_keyw);

            $meta_tag->setTranslation('home_meta_title', app()->getLocale(), $request->home_meta_title);
            $meta_tag->setTranslation('home_meta_desc', app()->getLocale(), $request->home_meta_desc);
            $meta_tag->setTranslation('home_meta_keyw', app()->getLocale(), $request->home_meta_keyw);

            $meta_tag->setTranslation('contact_meta_title', app()->getLocale(), $request->contact_meta_title);
            $meta_tag->setTranslation('contact_meta_desc', app()->getLocale(), $request->contact_meta_desc);
            $meta_tag->setTranslation('contact_meta_keyw', app()->getLocale(), $request->contact_meta_keyw);

            $meta_tag->setTranslation('portfolio_meta_title', app()->getLocale(), $request->portfolio_meta_title);
            $meta_tag->setTranslation('portfolio_meta_desc', app()->getLocale(), $request->portfolio_meta_desc);
            $meta_tag->setTranslation('portfolio_meta_keyw', app()->getLocale(), $request->portfolio_meta_keyw);

            $meta_tag->setTranslation('blog_meta_title', app()->getLocale(), $request->blog_meta_title);
            $meta_tag->setTranslation('blog_meta_desc', app()->getLocale(), $request->blog_meta_desc);
            $meta_tag->setTranslation('blog_meta_keyw', app()->getLocale(), $request->blog_meta_keyw);




            $meta_tag->save();


            $notification = [
                'message' => __('meta_tags_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.meta_tags')->with($notification);
       
    }

    public function show()
    {
        return view('admin.meta_tags.add');
    }

    public function edit($id)
    {
        $meta_tag = MetaTag::findOrFail($id);
        return view('admin.meta_tags.edit', compact( 'meta_tag'));
    }

    public function update(Request $request, $id)
    {
   
     $meta_tag = MetaTag::where('id',$id)->first();
             
       
     $meta_tag->setTranslation('about_meta_title', app()->getLocale(), $request->about_meta_title);
     $meta_tag->setTranslation('about_meta_desc', app()->getLocale(), $request->about_meta_desc);
     $meta_tag->setTranslation('about_meta_keyw', app()->getLocale(), $request->about_meta_keyw);

     $meta_tag->setTranslation('home_meta_title', app()->getLocale(), $request->home_meta_title);
     $meta_tag->setTranslation('home_meta_desc', app()->getLocale(), $request->home_meta_desc);
     $meta_tag->setTranslation('home_meta_keyw', app()->getLocale(), $request->home_meta_keyw);

     $meta_tag->setTranslation('contact_meta_title', app()->getLocale(), $request->contact_meta_title);
     $meta_tag->setTranslation('contact_meta_desc', app()->getLocale(), $request->contact_meta_desc);
     $meta_tag->setTranslation('contact_meta_keyw', app()->getLocale(), $request->contact_meta_keyw);

     $meta_tag->setTranslation('portfolio_meta_title', app()->getLocale(), $request->portfolio_meta_title);
     $meta_tag->setTranslation('portfolio_meta_desc', app()->getLocale(), $request->portfolio_meta_desc);
     $meta_tag->setTranslation('portfolio_meta_keyw', app()->getLocale(), $request->portfolio_meta_keyw);

     $meta_tag->setTranslation('blog_meta_title', app()->getLocale(), $request->blog_meta_title);
     $meta_tag->setTranslation('blog_meta_desc', app()->getLocale(), $request->blog_meta_desc);
     $meta_tag->setTranslation('blog_meta_keyw', app()->getLocale(), $request->blog_meta_keyw);

     
     $meta_tag->save();

            $notification = [
                'message' => __('meta_tags_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.meta_tags')->with($notification);
     
    }

    public function destroy($id)
    {
       MetaTag::find($id)->delete();
     
        $notification = array(
            'message' => __('meta_tags_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.meta_tags')->with($notification);
    }

 

}
