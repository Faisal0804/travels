@extends('layouts.master_admin')
@section('title')
    Update Blog
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
                <h3>Update Blog</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\BlogController@update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$blog->id}}"/>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Title</label>
                        <div class="controls">
                            <input name="title" type="text" id="basicinput" placeholder="Type title here..." class="span8" value="{{$blog->title}}>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Content</label>
                        <div class="controls">
                            <textarea name="description" id="basicinput" class="span8" placeholder="please write in details">{{$blog->description}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Image</label>
                        <div class="controls">
                            <input onchange="document.getElementById('dept_img').src = window.URL.createObjectURL(this.files[0])" name="imageName" type="file" id="imageName" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            @if ($blog->image == 'default.jpg')
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/image/default.jpg')}}">
                            @else
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/uploads/blogImages/'.$blog->image)}}">
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
