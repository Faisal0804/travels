<?php

namespace App\Http\Controllers\Admin;
use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.car.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_of_seats' => 'required',
            'rent' => 'required',
            'model' => 'required',
        ]);
        $car=new Car();
        $car->name=$request->name;
        $car->no_of_seats=$request->no_of_seats;
        $car->rent=$request->rent;
        $car->model=$request->model;
        if($request->hasFile('imageName')){
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $car->image = $fileName;
            $request->imageName->move('public/uploads/carImages/',$fileName);
        }
        $car->save();
        return redirect()->to('admin/car/list');
    }

    public function update_page($id)
    {
        $car= Car::find($id);
        return view('admin.car.update',compact('car'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'no_of_seats' => 'required',
            'rent' => 'required',
            'model' => 'required',
        ]);
        $car = Car::find($request->id);
        $car->name=$request->name;
        $car->no_of_seats=$request->no_of_seats;
        $car->rent=$request->rent;
        $car->model=$request->model;
        if($request->hasFile('imageName')){  
            $path = public_path('uploads/carImages/'.$car->image);
          if(file_exists($path)){
            unlink($path);
          }
            $extension = $request->imageName->extension();
            $fileName = Str::slug($request->name,'_').'_'.md5(date('Y-m-d H:i:s'));
            $fileName = $fileName.'.'.$extension;
            $car->image = $fileName;
            $request->imageName->move('public/uploads/carImages/',$fileName);
        }
        $car->save();
        return redirect()->to('admin/car/list');
    }

    public function delete($id)
    {
        $car= car::find($id);
        $path = public_path('uploads/carImages/'.$car->image);
        if(file_exists($path)){
            unlink($path);
        }
        $car->delete();
        return redirect()->back();
    }
}
