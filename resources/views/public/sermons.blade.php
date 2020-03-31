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
                            <li class="breadcrumb-item active" aria-current="page">Sermons</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-content-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sermons-content-thumbnail">
                        <img src="img/bg-img/31.jpg" alt="">
                    </div>
                    <!-- Sermons Text -->
                    <div class="sermons-text text-center">
                        <h2>Start a New Way of Living</h2>
                        <div class="sermons-meta-data d-flex flex-wrap justify-content-center">
                            <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                            <!-- <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p> -->
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassin.</p>
                        <div class="read-more-share d-flex flex-wrap justify-content-between">
                            <div class="read-more-btn">
                                <a href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Sermons Area End ##### -->

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
                                <img src="{{$sermon->image}}" alt="">
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
                                    <a href="#" style="font-weight: 700;color: #c92f2f;">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ##### Latest Sermons Area End ##### -->
<!-- ##### Subscribe Area Start ##### -->
<section class="subscribe-area">
        <div class="container">
            <div class="row align-items-center">
                <!-- Subscribe Text -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <!-- Subscribe Form -->
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form text-right">
                        <form action="#">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                            <button type="submit" class="btn crose-btn">subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->
    
@endsection

