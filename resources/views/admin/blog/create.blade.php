@extends('layouts.master_admin')
@section('title')
    Add Blog
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
                <h3>Add a New Blog</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\BlogController@store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Title</label>
                        <div class="controls">
                            <input name="title" type="text" id="basicinput" placeholder="Type title here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Content</label>
                        <div class="controls">
                            <textarea name="description" id="basicinput" class="span8" placeholder="please write in details"></textarea>
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
                            <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8">
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
