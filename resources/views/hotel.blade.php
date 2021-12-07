@extends('layouts.main')
@section('title','Hotel')
@section('content')
    <div class="tm-section tm-bg-img" id="tm-section-1" style="background-image:url({{asset('public/asset/img/hotelgardeninn.jpg')}})">
                <div class=" ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            
                            </div>                        
                        </div>      
                    </div>
                </div>                  
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
            
            <div class="tm-section tm-position-relative">
                 
                <div class="container tm-pt-5 tm-pb-4">
                    <div class="row text-center">
                        @foreach ($hotels as $item)
                            <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">                            
                            <img src="{{asset('public/uploads/hotelImages/'.$item->image)}}" style="width: 200px;height: 150px;margin-bottom: 20px;">
                            <h3 class="tm-color-primary tm-article-title-1">{{$item->name}}</h3>
                            <p class="mb-0"><span class="text-success">Type:</span> {{$item->hoteltype['name']}}</p>
                            <p><span class="text-warning">Address:</span> {{$item->address}}</p>
                            <p><span class="text-primary">Price:</span> {{$item->price}} TK.</p>
                        </article>
                        @endforeach
                    </div>    
                </div>
                <div class="container">
                     <div class="row">
                        {{$hotels->links()}}    
                    </div> 
                </div>
            </div>
@endsection