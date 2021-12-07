@extends('layouts.master_admin')
@section('title')
    Update Hotel Type
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
                <h3>Update Hotel Type</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\HotelTypeController@update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$hoteltype->id}}"/>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name</label>
                        <div class="controls">
                            <input name="name" type="text" id="basicinput" placeholder="Type name here..." class="span8" value="{{$hoteltype->name}}">
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
