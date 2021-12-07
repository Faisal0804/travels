<?php

namespace App\Http\Controllers\Admin;
use App\Place;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('admin.place.index',compact('places'));
    }

    public function create()
    {
        return view('admin.place.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $place=new Place();
        $place->name=$request->name;
        $place->slug = Str::slug($request->name,'_');
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $place->images = $fileName;
            $request->imageName->move('public/uploads/placeImages/',$fileName);
        }
        $place->description=$request->description;
        $place->save();
        return redirect()->to('admin/place/list');
    }

    public function update_page($id)
    {
        $place= Place::find($id);
        return view('admin.place.update',compact('place'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $place = Place::find($request->id);
        $place->name=$request->name;
        $place->slug = Str::slug($request->name,'_');
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/placeImages/'.$place->images);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $place->images = $fileName;
            $request->imageName->move('public/uploads/placeImages/',$fileName);
        }
        $place->description=$request->description;
        $place->save();
        return redirect()->to('admin/place/list');
    }

    public function delete($id)
    {
        $place= Place::find($id);
        $path = public_path('uploads/placeImages/'.$place->images);
        if(file_exists($path)){
            unlink($path);
        }
        $place->delete();
        return redirect()->back();
    }
}
