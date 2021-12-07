@extends('layouts.main')
@section('title','Blog')
@section('content')
    <div class="tm-section tm-bg-img" id="tm-section-1" style="background-image:url({{asset('public/asset/img/21.jpg')}})">
                <div class=" ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">                       
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            
            <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-recommended-container">
                            <div class="tm-bg-white">
                                <div class="tm-bg-primary tm-sidebar-pad">
                                    <h3 class="tm-color-white tm-sidebar-title">Blog Posts</h3>
                                </div>
                                <div class="tm-sidebar-pad-2">
                                    @foreach ($blogs as $item)
                                        <a href="#" class="media tm-media tm-recommended-item details-btn" data-id="{{$item->id}}" data-name="{{$item->title}}" data-description="{{$item->description}}" data-placeimage="{{asset('public/uploads/blogImages/'.$item->image)}}">
                                            <img width="100" height="100" src="{{asset('public/uploads/blogImages/'.$item->image)}}" alt="Image">
                                            <div class="media-body tm-media-body tm-bg-gray">
                                                <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">{{Str::limit($item->title,15,'...')}}</h4>
                                            </div>                                        
                                        </a>
                                    @endforeach
                                </div>
                            </div>                            
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                            <div class="tm-article-carousel">                            
                                <h3>Blog Details</h3>
                                <article class="tm-bg-white mr-2 tm-carousel-item" id="place_details">
                                    <img alt="Image" class="img-fluid mt-4" style="width: 200px; height:200px;">
                                    <div class="tm-article-pad">
                                        <header><h3 class="text-uppercase tm-article-title-2"></h3></header>
                                        <p></p>
                                    </div>                                
                                </article>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
            $('#place_details').hide();
            $('.details-btn').click(function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                var name = $(this).data('name');
                var des = $(this).data('description');
                var placeImage = $(this).data('placeimage');

                $('#place_details').show();

                $('#place_details h3').html(name);
                $('#place_details p').html(des);
                $('#place_details img').attr('src',placeImage);
            });
    </script>
@endsection