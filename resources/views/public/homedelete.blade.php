@extends('public.public_layout')
@section('content')
   <!-- ##### Breadcrumb Area Start ##### -->
   <!-- <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> -->
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Post Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">

                    @foreach($sermons as $sermon)
                        <!-- Single Blog Post Area -->
                        <div class="col-12 col-md-6">
                        <div class="single-latest-sermons mb-100">
                            <div class="sermons-thumbnail">
                                <img src="{{'/images/'.$sermon->image}}" alt="">
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
                                <div class="rgead-more-btn">
                                    <a href="sermons/{{ $sermon->id }}" style="font-weight: 700;color: #c92f2f;">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach

                    </div>

                    <div class="pagination-area">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ol class="crose-catagories">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Religion</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Hope</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Donate</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Church</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Event</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Children</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Recent News</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Weekly meeting in companies Think Room</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Six important methods to keep servers safe</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>New management method which rocks</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Seven ways to get ready for a business contract</h6>
                                </a>
                                <p class="post-date">November 11, 2017</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Archives</h6>
                            </div>
                            <ol class="crose-archives">
                                <li><a href="#">July 2015</a></li>
                                <li><a href="#">March 2015</a></li>
                            </ol>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Sermons</a></li>
                                <li><a href="#">Cross</a></li>
                                <li><a href="#">Pray</a></li>
                                <li><a href="#">Holly Cross</a></li>
                                <li><a href="#">Event</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection