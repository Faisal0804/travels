<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\Car;
use App\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Place;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(3);
        $places = Place::paginate(5);
        $hotels = Hotel::paginate(3);
        $blogs = Blog::paginate(4);
        return view('welcome',compact('cars','places','hotels','blogs'));
    }

    public function hotel(){
        $hotels = Hotel::paginate(10);
        return view('hotel',compact('hotels'));
    }
	
	public function contact(){
        return view('contact');
    }

    public function single_place($id)
    {
        $table = Place::find($id);
        $places = Place::paginate(5);
        return view('single-place',compact('table','places'));
    }
}
