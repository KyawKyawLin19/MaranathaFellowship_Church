@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Update News</h3>
        </div><!-- /.box-header -->
        @if (session("message"))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> 
            {{session("message")}}
        </div>
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
        <!-- form start -->
        <form method="POST" action="/news/{{$new->id}}" enctype="multipart/form-data">
        {{ method_field("PATCH") }}
        {{ csrf_field() }}
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$new->title}}" >
                    </div>
                    <div class="form-group">
                        <label>Pastor Name</label>
                        <input type="text" class="form-control" name="pastor_name" placeholder="Enter Pastor Name" value="{{$new->pastor_name}}" >
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input type="text" class="form-control" name="time" placeholder="Enter Category" value="{{$new->time}}" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name= "description" placeholder="Description ..." >{{$new->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" name="date" placeholder="Enter Date" value="{{$new->date}}">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="col-md-12">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
        <div class="col-md-12">
            <div class="box-footer">
                <form method="POST" action="/news/{{$new->id}}">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection