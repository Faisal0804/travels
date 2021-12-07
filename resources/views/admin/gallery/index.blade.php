@extends('layouts.master_admin')
@section('title')
    Gallery
@endsection

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="module">
        <div class="module-option clearfix">
            <div class="pull-left">
                Add Gallery
            </div>
            <div class="pull-right">
                <a href="{{action('Admin\GalleryController@create')}}" class="btn btn-primary">Add Gallery</a>
            </div>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>
                All Galleries</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Image</th>
                    <th style="text-align:right;">Action</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($galleries as $item)
                        <tr class="odd gradeX">
                            <td>{{$i++}}</td>
                            <td>@if ($item->images == 'default.jpg')
                                <img width="50" height="30" src="{{asset('public/image/default.jpg')}}" alt="">
                            @else
                            <img width="50" height="30" src="{{asset('public/uploads/galleryImages/'.$item->images)}}" alt="">
                            @endif</td>
                            <td style="text-align:right;">
                                <a class="btn btn-success btn-xs" href="{{action('Admin\GalleryController@update_page',['id'=> $item->id])}}"><i class="icon-edit"></i></a>
                                <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-xs" href="{{action('Admin\GalleryController@delete',['id'=> $item->id])}}"><i class="icon-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
