@extends('layouts.app')

@section('content')
    <div class="col-md-12">
    @if (session("message"))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> 
            {{session("message")}}
        </div>
    @endif
    @if(session("message_update"))
        <div class="alert alert-info alert-dismissable">
            <i class="fa fa-info"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> 
            {{session("message_update")}}
        </div>
    @elseif(session("message_delete"))
            <div class="alert alert-info alert-dismissable">
                <i class="fa fa-info"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <b>Alert!</b> 
                {{session("message_delete")}}
            </div>
    @endif
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Pastor Name</th>
                        <th>Location</th>
                        <th>Sermon Name</th>
                        <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                    @foreach($sermons as $sermon)
                    <tr>
                        <td>{{$sermon->id}}</td>
                        <td>{{$sermon->pastor_name}}</td>
                        <td>{{$sermon->location}}</td>
                        <td><a href="/sermons/{{$sermon->id}}/edit"> {{$sermon->sermon_name}}</a></td>
                    </tr>
                    @endforeach
                </tbody></table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div><!-- /.box -->
    </div>
@endsection
