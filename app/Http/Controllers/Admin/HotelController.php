<?php

namespace App\Http\Controllers\Admin;
use App\Hotel;
use App\HotelType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        $hoteltypes = HotelType::all();
        return view('admin.hotel.index',compact('hotels','hoteltypes'));
    }

    public function create()
    {
        $hoteltypes = HotelType::all();
        return view('admin.hotel.create',compact('hoteltypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required | numeric',
            'hotel_type_id' => 'required',
            'address' => 'required',
        ]);
        $hotel=new Hotel();
        $hotel->name=$request->name;
        $hotel->slug=Str::slug($request->name,'_');
        $hotel->price=$request->price;
        $hotel->address=$request->address;
        $hotel->hotel_type_id=$request->hotel_type_id;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $hotel->image = $fileName;
            $request->imageName->move('public/uploads/hotelImages/',$fileName);
        }
        $hotel->save();
        return redirect()->to('admin/hotel/list');
    }

    public function update_page($id)
    {
        $hotel= Hotel::find($id);
        $hoteltypes = HotelType::all();
        return view('admin.hotel.update',compact('hotel','hoteltypes'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required | numeric',
            'hotel_type_id' => 'required',
            'address' => 'required',
        ]);
        $hotel = Hotel::find($request->id);
        $hotel->name=$request->name;
        $hotel->slug=Str::slug($request->name,'_');
        $hotel->price=$request->price;
        $hotel->address=$request->address;
        $hotel->hotel_type_id=$request->hotel_type_id;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/hotelImages/'.$hotel->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $hotel->image = $fileName;
            $request->imageName->move('public/uploads/hotelImages/',$fileName);
        }
        $hotel->save();
        return redirect()->to('admin/hotel/list');
    }

    public function delete($id)
    {
        $hotel= Hotel::find($id);
        $path = public_path('uploads/hotelImages/'.$hotel->image);
        if(file_exists($path)){
            unlink($path);
        }
        $hotel->delete();
        return redirect()->back();
    }
}
