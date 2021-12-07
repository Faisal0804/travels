<?php

namespace App\Http\Controllers\Admin;
use App\HotelType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HotelTypeController extends Controller
{
    public function index()
    {
        $hoteltypes = HotelType::all();
        return view('admin.hotel.type.index',compact('hoteltypes'));
    }

    public function create()
    {
        return view('admin.hotel.type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $hoteltype=new HotelType();
        $hoteltype->name = $request->name;
        $hoteltype->slug = Str::slug($request->name,'_');
        $hoteltype->save();
        return redirect()->to('admin/hotel-type/list');
    }

    public function update_page($id)
    {
        $hoteltype= HotelType::find($id);
        return view('admin.hotel.type.update',compact('hoteltype'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $hoteltype = HotelType::find($request->id);
        $hoteltype->name = $request->name;
        $hoteltype->slug = Str::slug($request->name,'_');
        $hoteltype->save();
        return redirect()->to('admin/hotel-type/list');
    }

    public function delete($id)
    {
        $hoteltype= HotelType::find($id);
        $hoteltype->delete();
        return redirect()->back();
    }
}
