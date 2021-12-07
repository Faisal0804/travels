<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car',compact('cars'));
    }
}
