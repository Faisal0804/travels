@extends('layouts.master_admin')
@section('title')
    Update Gallery
@endsection
@section('content')
    <div class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="module">
            <div class="module-head">
                <h3>Update Gallery</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\GalleryController@update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$gallery->id}}"/>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Image</label>
                        <div class="controls">
                            <input onchange="document.getElementById('dept_img').src = window.URL.createObjectURL(this.files[0])" name="imageName" type="file" id="imageName" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8">
                            @if ($gallery->images == 'default.jpg')
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/image/default.jpg')}}">
                            @else
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/uploads/galleryImages/'.$gallery->images)}}">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.content-->
    </div>
@endsection
