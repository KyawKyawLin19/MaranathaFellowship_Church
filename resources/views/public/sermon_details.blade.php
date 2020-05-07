@extends('public.public_layout')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/sermons" style="text-decoration:none;"><i class="fa fa-home"></i>Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sermon Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Sermons Area Start ##### -->
    <div class="sermons-details-area" style="padding-top:20px;">
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
                                <!-- <p>{{ $sermon->sermon_text }}</p> -->
                                <blockquote>
                                    <div class="blockquote-text">
                                        <h6>“{{ $sermon->sermon_text }}” </h6>
                                        <h6><span>{{$sermon->pastor_name}}</span></h6>
                                    </div>
                                </blockquote>
                                <!-- <p>He assignments are fast-paced and our services address client needs for efficiency and flexibility. Our staff is experienced in working with architects, interior design firms, engineers, developers and clients in the public and private sectors.</p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>News</h6>
                            </div>
                        @foreach($news as $new)
                            <!-- Single Latest Posts -->
                            <div class="single-latest-post">
                                <p>
                                    <h6 style="font-weight: bold;color:#c92f2f;">{{$new->title}}</h6>
                                <p>
                                <div class="sermons-meta-data">
                                    <p><i class="fa fa-user" aria-hidden="true"></i> Sermon From: <span>{{$new->pastor_name}}</span></p>
                                    <p><i class="fa fa-tag" aria-hidden="true"></i> Time: <span>{{$new->time}}</span></p>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> Date <span>{{$new->date}}</span></p>
                                </div>
                            </div>
                        @endforeach
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Sermon Speaker</h6>
                            </div>
                            <ol class="crose-catagories">
                                <li><p><i class="fa fa-user" aria-hidden="true" style="width:15px;color:#c92f2f;"></i> Saya Saw Patrick</p></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Sermons Area End ##### -->
@endsection