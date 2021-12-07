@extends('layouts.master_admin')
@section('title')
    Add Car
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
                <h3>Add a New Car</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\CarController@store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name</label>
                        <div class="controls">
                            <input name="name" type="text" id="basicinput" placeholder="Type name here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Model</label>
                        <div class="controls">
                            <input name="model" type="text" id="basicinput" placeholder="Type model here..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">No of Seats</label>
                        <div class="controls">
                            <input name="no_of_seats" type="text" id="basicinput" placeholder="Type no of seats..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Rent</label>
                        <div class="controls">
                            <input name="rent" type="text" id="basicinput" placeholder="Type rent..." class="span8">
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
