@extends('public.public_layout')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" style="text-decoration:none;"><i class="fa fa-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sermons</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Latest Sermons Area Start ##### -->
    <section class="latest-sermons-area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Popular Sermons</h2>
                        <p>Loaded with fast-paced worship, activities, and video teachings to address real issues that students face each day</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($sermons as $sermon)
                <!-- Single Latest Sermons -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-latest-sermons mb-100">
                            <div class="sermons-thumbnail">
                                <img src="/images/5e8e026a3c98e.jpg" alt="">
                                <!-- Date -->
                                <div class="sermons-date">
                                    <h6><span>{{$sermon->day}}</span>{{$sermon->month}}</h6>
                                </div>
                            </div>
                            <div class="sermons-content">
                                <h4>{{$sermon->sermon_name}}</h4>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>{{$sermon->pastor_name}}</span></p>
                                    <!-- <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p> -->
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> {{$sermon->month}} {{$sermon->day}} 
                                        <!-- on <span>9:00 am - 11:00 am</span> -->
                                    </p>
                                    <div class="read-more-share d-flex flex-wrap justify-content-between">
                                <div class="read-more-btn">
                                    <a href="sermons/{{ $sermon->id }}" style="font-weight: 700;color: #c92f2f;text-decoration:none;">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12">
                    <div class="pagination-area" style = "margin-bottom:50px;">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{$sermons->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
@endsection

