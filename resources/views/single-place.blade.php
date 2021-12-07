@extends('layouts.main')
@section('title','Single-Place')
@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="tm-article-carousel">
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="{{asset('public/uploads/placeImages/'.$table->images)}}" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">{{$table->name}}</h3></header>
                                <p>{{$table->description}}</p>
                                {{-- <a href="#" class="text-uppercase btn-primary tm-btn-primary">Get More Info.</a> --}}
                            </div>                                
                        </article>
                    </div>    
                </div>
                
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-recommended-container">
                    <div class="tm-bg-white">
                        <div class="tm-bg-primary tm-sidebar-pad">
                            <h3 class="tm-color-white tm-sidebar-title">Recommended Places</h3>
                            <p class="tm-color-white tm-margin-b-0 tm-font-light">Places you can try</p>
                        </div>
                        <div class="tm-sidebar-pad-2">
                            @foreach ($places as $item)
                                <a href="{{action('User\HomeController@single_place',['id' => $item->id, 'slug' => Str::slug($item->name)])}}" class="media tm-media tm-recommended-item">
                                <img width="100" height="100" src="{{asset('public/uploads/placeImages/'.$item->images)}}" alt="Image">
                                <div class="media-body tm-media-body tm-bg-gray">
                                    <h6 class="tm-font-semibold tm-sidebar-item-title">{{$item->name}}</h6>
                                </div>                                        
                            </a>
                            @endforeach
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
@endsection