@extends('layouts.master_admin')
@section('title')
    Update Hotel
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
                <h3>Update Hotel</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\HotelController@update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$hotel->id}}"/>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name</label>
                        <div class="controls">
                            <input name="name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" type="text" id="basicinput" placeholder="Type name here..." class="span8" value="{{$hotel->name}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Address</label>
                        <div class="controls">
                            <input name="address" type="text" id="basicinput" placeholder="Type address here..." class="span8" value="{{$hotel->address}}">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Hotel type</label>
                        <div class="controls">
                            <select name="hotel_type_id" type="text" id="basicinput" class="span8">
                                <option value=""> Select a HotelType </option>
                                @foreach ($hoteltypes as $hoteltype)
                                <option value="{{$hoteltype->id}}" @if ($hotel->hotel_type_id == $hoteltype->id) selected @endif> {{$hoteltype->name}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Price</label>
                        <div class="controls">
                            <input name="price" type="text" id="basicinput" placeholder="Type price here..." class="span8" value="{{$hotel->price}}">
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
                            @if ($hotel->image == 'default.jpg')
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/image/default.jpg')}}">
                            @else
                              <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image" class="span8" src="{{asset('public/uploads/hotelImages/'.$hotel->image)}}">
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
