<?php

namespace App\Http\Controllers\Admin;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index',compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->slug=Str::slug($request->title,'_');
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $blog->image = $fileName;
            $request->imageName->move('public/uploads/blogImages/',$fileName);
        }
        $blog->description=$request->description;
        $blog->save();
        return redirect()->to('admin/blog/list');
    }

    public function update_page($id)
    {
        $blog= Blog::find($id);
        return view('admin.blog.update',compact('blog'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $blog = Blog::find($request->id);
        $blog->title=$request->title;
        $blog->slug=Str::slug($request->name,'_');
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/blogImages/'.$blog->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $blog->image = $fileName;
            $request->imageName->move('public/uploads/blogImages/',$fileName);
        }
        $blog->description=$request->description;
        $blog->save();
        return redirect()->to('admin/blog/list');
    }

    public function delete($id)
    {
        $blog= Blog::find($id);
        $path = public_path('uploads/blogImages/'.$blog->image);
        if(file_exists($path)){
            unlink($path);
        }
        $blog->delete();
        return redirect()->back();
    }
}
