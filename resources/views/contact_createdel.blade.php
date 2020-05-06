@extends('layouts.app')
@section('content')
<div class="container">
		@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		<form method="POST" action="/receipe/{{$receipe->id}}">
			{{ method_field("PATCH") }}
			{{ csrf_field() }}
            <div class="row">
                <h1 class="text-red" style="font-family: 'Kaushan Script', cursive;">
                    Edit Receipe
                </h1>
                <div class="col-md-6">
        			<div class="form-group">
        				<label style="color: white;">Receipe Name</label>
        				<input type="text" name="name" class="form-control" value="{{$receipe->name}}" required>
        			</div>
        			<div class="form-group">
        				<label style="color: white;">Ingredients</label>
        				<input type="text" name="ingredients" class="form-control" value="{{$receipe->ingredients}}" required>
        			</div>
        			<div class="form-group">
        				<select class="form-control" name="category">
        					@foreach($category as $value)
        						<option value="{{$value->id}}"
        							{{$receipe->categories->id == $value->id? "selected" : ""}}>
        							{{$value->name}}
        						</option>
        					@endforeach
        				</select>
        			</div>
                    <div class="form-group">
                        <label style="color: white;">Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter description ..."></textarea>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        		</div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputFile" style="color: white;">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                </div>
            </div>
		</form>
	</div>
@endsection