@extends('front.partials.app')
@section('content')
<!-- Main Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8">
            <div class="main-title">
                <h1>{{$news->title}}</h1>
            </div>
            <div class="d-flex main-header-icons">
                @foreach($news->tag as $tag)
                    <a href="#"><span class="tags" style="background: {{$tag->color}}">{{$tag->name}}</span></a>
                @endforeach
                <div class="d-flex title-icons">
                    <i class="far fa-clock"></i>
                    <p>{{$news->created_at->isoFormat("LLL")}}</p>
                </div>
                <div class="d-flex title-icons">
                    <i class="fas fa-fire-alt"></i>
                    <p>{{$news->view}}</p>
                </div>
            </div>
            <div class="youtube-video">
                <img  class="img-fluid"  src="{{asset($news->image)}}" alt="{{$news->title}}">
            </div>
            <div class="video-text">
                {!! $news->content !!}
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="row px-2 my-5 side-banner">
                <div class="col-lg-12 d-xl-block d-lg-block d-md-none d-none">
                    <div class="discount">
                        <a href="#"><img
                                src="{{asset('front/img/sidebar_banner.png')}}"
                                class="w-100"
                                alt=""
                            /></a>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-xl-12 col-lg-12 mt-3">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="recent-tab"
                                data-toggle="tab"
                                href="#recent"
                                role="tab"
                                aria-controls="recent"
                                aria-selected="true"
                            >Ən son xəbərlər</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="popular-tab"
                                data-toggle="tab"
                                href="#popular"
                                role="tab"
                                aria-controls="popular"
                                aria-selected="false"
                            >Məşhur xəbərlər</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div
                            class="tab-pane show active"
                            id="recent"
                            role="tabpanel"
                            aria-labelledby="recent-tab">
                            <ul class="recent">
                                @foreach($newNews as $news)
                                    <li>
                                        <div class="row align-items-md-center">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <a href="{{route('news.inner',$news->slug)}}">
                                                    <div class="img-area-recent">
                                                        <img
                                                            src="{{asset($news->image)}}"
                                                            alt=""
                                                            class="w-100"
                                                        />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
                                                <div class="img-text-recent">
                                                    @foreach($news->tag as $tag)
                                                        <a href=""><span class="tags travel"
                                                                         style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                                                    @endforeach
                                                    <a href="{{route('news.inner',$news->slug)}}">
                                                        <h6>{{$news->title}}</h6></a>
                                                    <span>
                               <i class="fas fa-clock text-dark"></i>
                               <span class="text-dark">{{$news->created_at->isoFormat("LLL")}} </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div
                            class="tab-pane"
                            id="popular"
                            role="tabpanel"
                            aria-labelledby="popular-tab">
                            <ul class="popular">
                                @foreach($viewNews as $news)
                                    <li>
                                        <div class="row align-items-md-center">
                                            <div class="col-lg-4 col-4">
                                                <a href="{{route('news.inner',$news->slug)}}">
                                                    <div class="img-area-popular">
                                                        <img
                                                            src="{{asset($news->image)}}"
                                                            alt=""
                                                            class="w-100"
                                                        />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-lg-8 col-8 ">
                                                <div class="img-text-popular">
                                                    @foreach($news->tag as $tag)
                                                        <a href=""><span class="tags travel"
                                                                         style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                                                    @endforeach
                                                    <a href="{{route('news.inner',$news->slug)}}">
                                                        <h6>{{$news->title}}</h6></a>
                                                    <span>
                               <i class="fas fa-clock text-dark"></i>
                               <span class="text-dark"> {{$news->created_at->isoFormat("LLL")}} </span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="right">
                        @foreach($categories as $category)
                            <li
                                style="background-image: url({{asset($category->image)}})">
                                <a href="{{route('category',$category->id)}}">
                                    <span class="tag">{{$category->name}}</span>
                                    <span class="bar"></span>
                                    <span class="count">{{$category->news_count}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-xl-12">
                    <div class="text tag-text">
                        <h3>Tags</h3>
                    </div>
                    <div class="tag-container">
                        @foreach($tags as $tag)
                            <a href="#" style="background: {{$tag->color}};color: #fff">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of main area -->
@endsection
