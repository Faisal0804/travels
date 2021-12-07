<?php

namespace App\Http\Controllers\Admin;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $gallery=new Gallery();
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $gallery->images = $fileName;
            $request->imageName->move('public/uploads/galleryImages/',$fileName);
        }
        $gallery->save();
        return redirect()->to('admin/gallery/list');
    }

    public function update_page($id)
    {
        $gallery= Gallery::find($id);
        return view('admin.gallery.update',compact('gallery'));
    }

    public function update(Request $request)
    {
        $gallery = Gallery::find($request->id);
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/galleryImages/'.$gallery->images);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->title,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $gallery->images = $fileName;
            $request->imageName->move('public/uploads/galleryImages/',$fileName);
        }
        $gallery->save();
        return redirect()->to('admin/gallery/list');
    }

    public function delete($id)
    {
        $gallery= Gallery::find($id);
        $path = public_path('uploads/galleryImages/'.$gallery->images);
        if(file_exists($path)){
            unlink($path);
        }
        $gallery->delete();
        return redirect()->back();
    }
}
