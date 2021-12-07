<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Place;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog',compact('blogs'));
    }
    public function place()
    {
        $places = Place::all();
        return view('place',compact('places'));
    }
}
