@extends('front.partials.app')
@section('content')

<!-- Main -->
<div class="container">
    <div class="row">
        <div class="col-xl-8 col-lg-8 ">
            @foreach($category_news as $new)
            <div class="row my-5">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="img-area-category">
                        <a href="{{route('news.inner',$new->slug)}}"><img src="{{asset($new->image)}}" alt="{{$new->slug}}" class="w-100" /></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="grid-category">
                        @foreach($new->tag as $tag)
                        <a href=""><span class="tags travel" style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                        @endforeach
                    </div>
                    <div class="img-text-category">
                        <a href="{{route('news.inner',$new->slug)}}">
                            <h4>{{$new->name}}</h4>
                        </a>
                        <ul class="post-meta-info d-flex text-dark ">
                            <li class="author">
                                <i class="fas fa-clock"></i>
                                <a href="" class="text-dark"> {{$tag->created_at->isoFormat("LLL")}} </a>
                            </li>
                        </ul>
                    </div>
                    <p>
                        {{$new->title}}
                        <br> <a href="{{route('news.inner',$new->slug)}}" class="read-more">Davamını oxu</a>
                    </p>
                </div>
            </div>
            @endforeach



            {{$category_news->links()}}
        </div>
        <div class="col-xl-4 col-lg-4">


            <div class="row my-3">
                <div class="col-xl-12 col-lg-12 mt-3">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Ən son xəbərlər</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">Məşhur xəbərlər</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                            <ul class="recent">
                                @foreach($newNews as $news)
                                <li>
                                    <div class="row align-items-md-center">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                            <a href="{{route('news.inner',$news->slug)}}">
                                                <div class="img-area-recent">
                                                    <img src="{{asset($news->image)}}" alt="" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 ">
                                            <div class="img-text-recent">
                                                @foreach($news->tag as $tag)
                                                <a href=""><span class="tags travel" style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                                                @endforeach
                                                <a href="{{route('news.inner',$news->slug)}}">
                                                    <h6>{{$news->title}}</h6>
                                                </a>
                                                <span>
                                                    <i class="fas fa-clock text-dark"></i>
                                                    <span class="text-dark"> {{$tag->created_at->isoFormat("LLL")}} </span></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                            <ul class="popular">
                                @foreach($viewNews as $news)
                                <li>
                                    <div class="row align-items-md-center">
                                        <div class="col-lg-4 col-4">
                                            <a href="{{route('news.inner',$news->slug)}}">
                                                <div class="img-area-popular">
                                                    <img src="{{asset($news->image)}}" alt="" class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-8 col-8 ">
                                            <div class="img-text-popular">
                                                @foreach($news->tag as $tag)
                                                <a href=""><span class="tags travel" style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                                                @endforeach
                                                <a href="{{route('news.inner',$news->slug)}}">
                                                    <h6>{{$news->title}}</h6>
                                                </a>
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
                        <li style="background-image: url({{asset($category->image)}})">
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
<!-- End of Main -->
@endsection