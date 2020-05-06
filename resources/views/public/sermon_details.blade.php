@extends('public.public_layout')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/sermons">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sermon Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-details-area section-padding-100">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="sermons-details-area">

                        <!-- Sermons Details Area -->
                        <div class="single-post-details-area">
                            <div class="post-content">
                                <h2 class="post-title mb-30">{{ $sermon->sermon_name }}</h2>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <iframe class="embed-responsive-item" src="{{$sermon->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <!-- Catagory & Share -->
                                <div class="catagory-share-meta d-flex flex-wrap justify-content-between align-items-center">
                                    
                                </div>
                                <p>{{ $sermon->sermon_text }}</p>
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.” </h6>
                                        <h6>Ollie Schneider - <span>Parson</span></h6>
                                    </div>
                                </blockquote>
                                <p>He assignments are fast-paced and our services address client needs for efficiency and flexibility. Our staff is experienced in working with architects, interior design firms, engineers, developers and clients in the public and private sectors.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <!-- <div class="single-widget-area">
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" placeholder="Search Here">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>News</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Weekly meeting in companies...</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Six important methods to...</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>New management method...</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                                </div>
                            </div>

                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <a href="#" class="post-title">
                                    <h6>Seven ways to get ready for...</h6>
                                </a>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>Jorge Malone</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> Categories: <span>God, Pray</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> March 10 on <span>9:00 am - 11:00 am</span></p>
                                </div>
                            </div>

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Sermon Speaker</h6>
                            </div>
                            <ol class="crose-catagories">
                                <li><a href="#" class="disabled"><i class="fa fa-angle-right" aria-hidden="true"></i> Saw Patrick</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Sermons Area End ##### -->


@endsection