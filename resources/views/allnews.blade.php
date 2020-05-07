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
                        <th>Title</th>
                        <th>Date</th>
                        <!-- <th style="width: 40px">Label</th> -->
                    </tr>
                    @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->pastor_name}}</td>
                        <td>{{$new->date}}</td>
                        <td><a href="/news/{{$new->id}}/edit"> {{$new->title}}</a></td>
                    </tr>
                    @endforeach
                </tbody></table>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                    {{$news->links()}}
                </ul>
            </div>
        </div><!-- /.box -->
    </div>
@endsection
