@extends('layouts.main')
@section('title','Car')
@section('content')
    <div class="tm-section tm-bg-img" id="tm-section-1" style="background-image:url({{asset('public/asset/img/0.jpg')}})">
                <div class=" ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            
            <div class="tm-section-2 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">We are here to help you?</h2>
                            <p class="tm-color-white tm-section-subtitle">Subscribe to get our newsletters</p>
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