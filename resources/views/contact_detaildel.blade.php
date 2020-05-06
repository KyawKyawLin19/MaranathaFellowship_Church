@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contact Page Information</h3>
            </div><!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table">
                    <tbody><tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Address</td>
                        <td>
                            {{$contact->address}}
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>G-mail</td>
                        <td>
                            {{$contact->gmail}}
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Phone Number</td>
                        <td>
                            {{$contact->ph_no}}
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Open Day and Time</td>
                        <td>
                            {{$contact->opening_hours}}
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>City</td>
                        <td>
                            {{$contact->city}}
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Google Map Location</td>
                        <td>
                            <textarea name="" id="" cols="30" rows="10" readonly>{{$contact->googlemap}}</textarea>
                        </td>
                    </tr>
                </tbody></table>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <a href="#" style="float:left;margin-right: 20px;"><button class="btn btn-primary">Edit</button></a>
            </div>        
        </div><!-- /.box -->
    </div>
@endsection