@extends('public.public_layout')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Events Area Start ##### -->
    <div class="events-area" style="margin:20px 0 50px 0;">
        <div class="container">
            <div class="row">

                <!-- Events Title -->
                <div class="col-12">
                    <div class="events-title">
                        <h2>Latest News</h2>
                    </div>
                </div>

            @foreach($news as $new)
                <div class="col-12">
                    <!-- Single Upcoming Events Area -->
                    <div class="single-upcoming-events-area d-flex flex-wrap align-items-center">
                        <!-- Thumbnail -->
                        <div class="upcoming-events-thumbnail">
                            <img src="img/bg-img/24.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="upcoming-events-content d-flex flex-wrap align-items-center">
                            <div class="events-text">
                                <h4>{{$new->title}}</h4>
                                <div class="events-meta">
                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{$new->date}}</a>
                                    <a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$new->time}}</a>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Maranathafellowship Church</a>
                                </div>
                                <p>{{$new->description}}</p>
                                <!-- <a href="#">Read More <i class="fa fa-angle-double-right"></i></a> -->
                            </div>
                            <!-- <div class="find-out-more-btn">
                                <a href="#" class="btn crose-btn btn-2">Find Out More</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- ##### Events Area End ##### -->

@endsection