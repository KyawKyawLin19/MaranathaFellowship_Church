@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create Sermon</h3>
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
        <form method="POST" action="/sermons/{{$sermon->id}}" enctype="multipart/form-data">
        {{ method_field("PATCH") }}
        {{ csrf_field() }}
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pastor Name</label>
                        <input type="text" class="form-control" name="pastor_name" placeholder="Enter Pastor Name" value="{{$sermon->pastor_name}}" >
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Enter Location" value="{{$sermon->location}}" >
                    </div>
                    <div class="form-group">
                        <label>Sermon Name</label>
                        <input type="text" class="form-control" name="sermon_name" placeholder="Enter Sermon Name" value="{{$sermon->sermon_name}}" >
                    </div>
                    <div class="form-group">
                        <label>Sermon Image</label>
                        <input type="file" name="image">
                        <img src="{{'/images/'.$sermon->image}}" width="150" height="150">
                        <!-- <p class="help-block">Please Choose Sermon Image.</p> -->
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Youtube Video Link</label>
                        <input type="text" class="form-control" name="video" placeholder="Enter Youtube Video Link" value="{{$sermon->video}}">
                    </div>
                    <div class="form-group">
                        <label>Sermon Text</label>
                        <textarea class="form-control" rows="4" name= "sermon_text">{{$sermon->sermon_text}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Day</label>
                        <input type="text" class="form-control" name="day" placeholder="Enter Day 1 to 31" value="{{$sermon->day}}">
                    </div>
                    <div class="form-group">
                        <label>Month</label>
                        <select class="form-control" name="month">
                            <option value="{{$sermon->month}}" selected>Please Select</option>
                            <option value="Jan">Jan</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Apr">Apr</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="July">July</option>
                            <option value="Aug">Aug</option>
                            <option value="Sept">Sept</option>
                            <option value="Oct">Oct</option>
                            <option value="Nov">Nov</option>
                            <option value="Dec">Dec</option>
                        </select> 
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <div class="box-footer">
        <form method="POST" action="/sermons/{{$sermon->id}}">
                {{ method_field("DELETE") }}
                {{ csrf_field() }}
            <!-- <button type="submit">Delete</button> -->
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </div>
    </div>
</div>
@endsection