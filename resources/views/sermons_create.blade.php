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
        <form method="POST" action="/sermons">
    	  {{ csrf_field() }}
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pastor Name</label>
                        <input type="text" class="form-control" name="pastor_name" placeholder="Enter Pastor Name" value="{{ old('pastor_name') }}" >
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Enter Location" value="{{ old('location') }}" >
                    </div>
                    <div class="form-group">
                        <label>Sermon Name</label>
                        <input type="text" class="form-control" name="sermon_name" placeholder="Enter Sermon Name" value="{{ old('sermon_name') }}" >
                    </div>
                    <div class="form-group">
                        <label>Youtube Video Link</label>
                        <input type="text" class="form-control" name="video" placeholder="Enter Youtube Video Link" value="{{ old('video') }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sermon Text</label>
                        <textarea class="form-control" rows="4" name= "sermon_text" placeholder="Description ..." ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Day</label>
                        <input type="number" class="form-control" name="day" placeholder="Enter Day 1 to 31" value="{{ old('day') }}">
                    </div>
                    <div class="form-group">
                        <label>Month</label>
                        <select class="form-control" name="month">
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
            <div class="col-md-12">
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection