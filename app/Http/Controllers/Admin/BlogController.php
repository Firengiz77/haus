<?php

namespace App\Http\Controllers\Admin;


use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Helpers\Crud;
use App\Http\Controllers\Controller;
use App\Models\Tag;



class BlogController extends Controller
{

    protected $crud;
    public function __construct(Crud $crud)
    {
        $this->crud = $crud;
    }


    public function index()
    {
        $all_news = Blog::orderBy('id','asc')->get();
        return view('admin.news.index',compact('all_news'));
    }


    public function store(Request $request)
    {
    
            $tags = Tag::findOrFail($request->tags);

            $blog = new Blog();
            $blog->setTranslation('title', app()->getLocale(), $request->title);
            $blog->setTranslation('desc', app()->getLocale(), $request->desc);
            $blog->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $blog->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
            $blog->setTranslation('meta_description', app()->getLocale(), $request->meta_description);
            $blog->setTranslation('alt', app()->getLocale(), $request->alt);
       
            $blog->image = $this->crud->common_image('blog',$request,'image');
            $blog->save();

            $blog->tags()->attach($tags);

            $notification = [
                'message' => __('blog_new'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.blog')->with($notification);
       
    }

   
    
    public function show()
    {
        $tags = Tag::orderBy('title')->get();
        return view('admin.news.add',compact('tags'));
    }

    public function edit($id)
    {
        $tags = Tag::orderBy('title')->get();
        $news = Blog::findOrFail($id);
        return view('admin.news.edit', compact('tags', 'news'));
    }

  
    public function update(Request $request, $id)
    {
   
            $tags = Tag::findOrFail($request->tags);

             $blog = Blog::findOrFail($id);
             
            if ($request->file('image')) {
                File::delete($blog->image);
                $blog->image = $this->crud->common_image('blog',$request,'image');
            }

            $blog->setTranslation('alt', app()->getLocale(), $request->alt);
            $blog->setTranslation('title', app()->getLocale(), $request->title);
            $blog->setTranslation('desc', app()->getLocale(), $request->desc);
            $blog->setTranslation('meta_title', app()->getLocale(), $request->meta_title);
            $blog->setTranslation('meta_keyword', app()->getLocale(), $request->meta_keyword);
            $blog->setTranslation('meta_description', app()->getLocale(), $request->meta_description);
            $blog->save();

            $blog->tags()->sync($tags);

            $notification = [
                'message' => __('blog_edit'),
                'alert-type' => 'success'
            ];
            return redirect()->route('admin.blog')->with($notification);
     
    }

    public function destroy($id)
    {
        $news = Blog::find($id);
        $news->tags()->detach();
        $news->delete();

        $notification = array(
            'message' => __('blog_destroy'),
            'alert-type' => 'success'
        );
        return redirect()->route('admin.blog')->with($notification);
    }
}
