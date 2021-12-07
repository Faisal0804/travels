@extends('layouts.main')
@section('title','Home')
@section('content')
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('public/asset/img/1.jpg')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/asset/img/2.jpg')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('public/asset/img/3.jpg')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
            <div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">We are here to help you?</h2>
                            <p class="tm-color-white tm-section-subtitle">Subscribe to get our newsletters</p>
                        </div>                
                    </div>
                </div>        
            </div>
            
            <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                            <div class="tm-article-carousel">                            
                                @foreach ($blogs as $item)
                                    <article class="tm-bg-white mr-2 tm-carousel-item">
                                    <img src="{{asset('public/uploads/blogImages/'.$item->image)}}" alt="Image" class="img-fluid">
                                    <div class="tm-article-pad">
                                        <header><h3 class="text-uppercase tm-article-title-2">{{$item->title}}</h3></header>
                                        <p>{{$item->description}}</p>
                                        {{-- <a href="#" class="text-uppercase btn-primary tm-btn-primary">Get More Info.</a> --}}
                                    </div>                                
                                </article>
                                @endforeach
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

            <div class="tm-bg-video">
                <div class="tm-section tm-section-pad tm-bg-img" id="tm-section-5">                                                        
                    <div class="container ie-h-align-center-fix">
                        <div class="row tm-flex-align-center">
                            <div class="col-xs-12 col-md-12 col-lg-3 col-xl-3 tm-media-title-container">
                                <h2 class="text-uppercase tm-section-title-2">Car</h2>
                                <h3 class="tm-color-primary tm-font-semibold tm-section-subtitle-2">List</h3>
                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-9 col-xl-9 mt-0 mt-sm-3">
                                <div class="ml-auto tm-bg-white-shadow tm-pad tm-media-container">
                                     @foreach ($cars as $item)
                                        <article class="media tm-margin-b-20 tm-media-1">
                                        <img src="{{asset('public/uploads/carImages/'.$item->image)}}" style="
    width: 372px;
    height: 200px;
" alt="Image">
                                        <div class="media-body tm-media-body-1 tm-media-body-v-center">
                                            <h3 class="tm-font-semibold tm-color-primary tm-article-title-3">{{$item->name}}</h3>
                                            <p><span class="text-success">Model: </span> {{$item->model}}
                                            <br><span class="text-danger">Rent: </span> {{$item->rent}} TK.<br>
											<span class="text-success">No. Of Seats: </span>{{$item->no_of_seats}}</p>
                                        </div>                                
                                    </article>
                                    @endforeach
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection