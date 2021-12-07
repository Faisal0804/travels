@extends('layouts.main')
@section('title','Contact')
@section('content')
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <div class="tm-section tm-section-pad tm-bg-img tm-position-relative" id="tm-section-6">
    
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                            <img src="{{asset('public/asset/img/madhabkunda-map.JPG')}}" alt="map" />        
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0">
                            <div class="tm-bg-white tm-p-4">
                                <form action="{{action('ContactController@store')}}" method="post" class="contact-form">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="contact_email" name="email" class="form-control" placeholder="Email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject"/>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="contact_message" name="message" class="form-control" rows="9" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
                                </form>
                            </div>                            
                        </div>
                    </div>        
                </div>
            </div>
@endsection