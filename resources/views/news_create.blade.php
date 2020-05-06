@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Create News</h3>
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
        <form method="POST" action="/news" enctype="multipart/form-data">
    	  {{ csrf_field() }}
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}" >
                    </div>
                    <div class="form-group">
                        <label>Pastor Name</label>
                        <input type="text" class="form-control" name="pastor_name" placeholder="Enter Pastor Name" value="{{ old('pastor_name') }}" >
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input type="text" class="form-control" name="time" placeholder="Enter Time" value="{{ old('time') }}" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name= "description" placeholder="Description ..." ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" name="date" placeholder="Enter Date" value="{{ old('date') }}">
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box-footer" style="padding-left:25px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection