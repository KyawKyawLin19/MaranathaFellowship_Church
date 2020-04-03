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
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Address</td>
                        <td>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-red">55%</span></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>GOOGLE MAP Location</td>
                        <td>
                            <div class="progress xs">
                                <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-yellow">70%</span></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>G-mail</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-light-blue">30%</span></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Phone Number</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Open Day and Time</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>City</td>
                        <td>
                            <div class="progress xs progress-striped active">
                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                            </div>
                        </td>
                        <td><span class="badge bg-green">90%</span></td>
                    </tr>
                </tbody></table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
@endsection