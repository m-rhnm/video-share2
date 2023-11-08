@extends('layout')


@section('content')
        <div id="all-output" class="col-md-12">
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
            <div class="row">
            @foreach($videos as $video)
            <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{ $video->length }}</small>
                            <a href="#"><img src="{{ $video->thumbnail }}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $video->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $video->created_at }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
            <div class="row">
            @foreach($mostViewsVideos as $mostViewsVideo)
            <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{ $mostViewsVideo->length }}</small>
                            <a href="#"><img src="{{ $mostViewsVideo->thumbnail }}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $mostViewsVideo->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $mostViewsVideo->created_at }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
            <div class="row">
            @foreach($mostPopularVideos as $mostPopularVideo)
            <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="video-item">
                        <div class="thumb">
                            <div class="hover-efect"></div>
                            <small class="time">{{ $mostPopularVideo->length }}</small>
                            <a href="#"><img src="{{ $mostPopularVideo->thumbnail }}" alt=""></a>
                        </div>
                        <div class="video-info">
                            <a href="#" class="title">{{ $mostPopularVideo->name }}</a>
                            <a class="channel-name" href="#">مهرداد سامی<span>
                                    <i class="fa fa-check-circle"></i></span></a>
                            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                            <span class="date"><i class="fa fa-clock-o"></i>{{ $mostPopularVideo->created_at }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

@endsection