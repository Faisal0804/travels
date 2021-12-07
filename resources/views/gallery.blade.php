@extends('layouts.main')
@section('title','Gallery')
@section('content')
   <div class="tm-section tm-position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#ee5057" points="0,0  100,0  50,60"></polygon>                   
                </svg> 
                <div class="container tm-pt-5 tm-pb-4">
                    <div class="row text-center">
                        @foreach ($gallerys as $item)
                            <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                            <img src="{{asset('public/uploads/galleryImages/'.$item->images)}}" style="width: 200px;height: 150px;margin-bottom: 20px;">
                        </article>
                        @endforeach
                    </div>    
                </div>
                <div class="container">
                     <div class="row">
                           
                    </div> 
                </div>
    </div>
@endsection