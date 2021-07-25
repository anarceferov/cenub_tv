@extends('front.partials.app')
@section('content')

    <!-- MAIN AREA -->
    <!-- Home -->
    <div class="container home">
        <div class="row">
            <div class=" col-xl-6 col-lg-12 p-3 home-carousel">
                <div
                    id="carouselExampleControls"
                    class="carousel slide"
                    data-ride="carousel">
                    <ol class="carousel-indicators top-weekend-indicator">
                        <li
                            data-target="#carouselExampleControls"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li
                            data-target="#carouselExampleControls"
                            data-slide-to="1"
                        ></li>
                        <li
                            data-target="#carouselExampleControls"
                            data-slide-to="2"

                        ></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach($newNews as $news)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="single-box-home">
                                    <a href="{{route('news.inner',$news->slug)}}">
                                        <div class="img-area">
                                            <img
                                                src="{{asset($news->image)}}"
                                                alt="{{$news->title}}"/>
                                        </div>
                                    </a>
                                    <div class="img-text">
                                        <div class="grid-category">
                                            @foreach($news->tag as $tag)
                                                <a href="#"><span class="tags fashion"
                                                                  style="background:{{$tag->color}}">{{$tag->name}}</span>
                                                </a>
                                            @endforeach
                                        </div>
                                        <div class="post-title">
                                            <h2>
                                                <a href="{{route('news.inner',$news->slug)}}">
                                                    {{$news->title}} 
                                                </a>
                                            </h2>
                                        </div>
                                        <ul class="post-meta-info d-flex">
                                            {{--                                        <li class="author">--}}
                                            {{--                                            <i class="fas fa-user"></i>--}}
                                            {{--                                            <span href=""> digiQoles </span>--}}
                                            {{--                                        </li>--}}
                                            <li class="author">
                                                <i class="fas fa-clock" style="margin-right:5px"></i> 
                                                <span> {{$news->created_at->isoFormat("LLL")}}  </span>
                                            </li>
                                            <li class="author">
                                                <i class="fas fa-fire"></i>
                                                <span> {{$news->view}} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12  home-right p-3">
                <ul class="home-right-side">
                    @foreach($newNews2 as $news)
                        <li>
                            <div class="row">
                                <div class="col-md-6 col-5">
                                    <a href="{{route('news.inner',$news->slug)}}">
                                        <div class="img-area-home">
                                            <img
                                                src="{{asset($news->image)}}"
                                                alt="{{$news->title}}"
                                                class="w-100 mb-4"/>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-7 pl-2">
                                    <div class="img-text-home">
                                        @foreach($news->tag as $tag)
                                            <a href="#"><span class="tags fashion"
                                                              style="background:{{$tag->color}}">{{$tag->name}}</span>
                                            </a>
                                        @endforeach
                                        <a href="{{route('news.inner',$news->slug)}}"><h6>
                                                {{$news->title}}
                                            </h6></a>
                                        <span>
                      <i class="fas fa-clock text-dark"></i>
                      <a href="" class="text-dark">
                         {{$news->created_at->isoFormat("LLL")}}
                      </a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- End of home -->



    <!-- Top stories -->
    <div class="container top-story mt-3">
        <div class="row mt-3">
            <div class="col-xl-8 col-lg-12">
                <div class="text story-text my-3">
                    <h3>Texnologiya</h3>
                </div>
                @foreach($tech as $news)
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 mb-5">
                                <a href="{{route('news.inner',$news->slug)}}">
                                    <div class="img-area-story">
                                        <img
                                            src="{{asset($news->image)}}"
                                            alt=""
                                            class="w-100"/>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="grid-category">
                                    <a href="#"><span class="tags tech">{{$news->category->name}}</span> </a>
                                </div>
                                <div class="img-text-story my-3">
                                    <a href="{{route('news.inner',$news->slug)}}">
                                        <h4>{{$news->title}}</h4></a>
                                    <ul class="post-meta-info d-flex text-dark ">
                                        {{--                                    <li class="author mr-3">--}}
                                        {{--                                        <i class="fas fa-user"></i>--}}
                                        {{--                                        <span class="text-dark"> digiQoles </span>--}}
                                        {{--                                    </li>--}}
                                        <li class="author">
                                            <i class="fas fa-clock"></i>
                                            <span class="text-dark"> {{$news->created_at->isoFormat("LLL")}} </span>
                                        </li>
                                    </ul>
                                </div>
                                {{--                            <p>--}}
                                {{--                                Struggling to sell one multi-million dollar home currently on--}}
                                {{--                                the market won’t stop actress and singer Jennifer Lopez from--}}
                                {{--                                expanding--}}
                                {{--                            </p>--}}
                            {{--    {!! Str::limit($news->content ,250)!!} --}}
                            </div>
                        </div>
                @endforeach
            </div>
            
            
            
           
            
            
            @php
                $response = \Illuminate\Support\Facades\Http::get('https://api.covid19api.com/summary')->json()['Global'];
            @endphp
            <div class="col-xl-4 col-lg-12 ">
                <div class=" my-card card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">COVID-19 Dünya <br> statistikası</h5>
                    </div>
                </div>
                <div class="information">
                    <h6 class="pt-4">ÜMUMİ STATİSTİKA</h6>
                    <p>Last update on: {{$response['Date']}}</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Virusa yoluxan</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">{{$response['NewConfirmed']}}</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Ölüm halı</h6>
                    </div>
                </div>
                <div class="live-numbers-red">
                    <p class="px-3">{{$response['NewDeaths']}}</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Sağalan</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">{{$response['NewRecovered']}}</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Aktiv koronavirus xəstəsi</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">{{$response['TotalConfirmed']}}</p>
                </div>
    
            </div>
        </div>
    </div>
    <!-- End of technology -->





















    {{--  first carousel  --}}
    <div class="container first-carousel">
        <div class="row">
            <div class="col-lg-12 px-3">
                <div class="text my-5">
                    <h3>Digər xəbərlər</h3>
                </div>
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators first-carousel-indicator">
              @for ($i = 1; $i <= round($randomNews->count() /3);$i++)
                            <li data-target="#carouselExampleIndicators2" data-slide-to="{{$i - 1}}"
                                class="@if($i == 1) active @endif"></li>
                        @endfor
                    </ol>
                    <div class="carousel-inner">
                        @foreach($randomNews->chunk(3) as $row)
                            @php
                                $say =1;
                            @endphp
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="row">
                                    @foreach($row as $news)
                                        @if($say == 1)
                                            <div class="col-lg-4 col-md-6 col-12  px-3">
                                                @elseif($say == 2)
                                                    <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                                        @elseif($say == 3)
                                                            <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                                                @endif
                                                                @php
                                                                    $say ++;
                                                                @endphp
                                                                <div class="single-box ">
                                                                    <a href="{{route('news.inner',$news->slug)}}">
                                                                        <div class="img-area">
                                                                            <img src="{{asset($news->image)}}"
                                                                                 alt="{{$news->title}}">
                                                                        </div>
                                                                    </a>
                                                                    <div class="img-text">
                                                                        <div class="grid-category">
                                                                            @foreach($news->tag as $tag)
                                                                                <a href="#"><span class="tags"
                                                                                                  style="background: {{$tag->color}}">{{$tag->name}}</span></a>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="post-title">
                                                                            <h5>
                                                                                <a href="{{route('news.inner',$news->slug)}}">
                                                                                    {{$news->title}}
                                                                                </a>
                                                                            </h5>
                                                                        </div>
                                                                        <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">{{$news->created_at->isoFormat("LLL")}} </span>
                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                    </div>
                                            </div>
                                            @endforeach
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        {{-- end of first carousel--}}

        <!-- Second Carousel -->
            <div class="container second-carousel">
                <div class="row">
                    <div class="col-lg-12 col-12">
                    <div class="text my-5">
                        <h3>Covid 19</h3>
                    </div>
                        <div
                            id="carouselExampleIndicators3"
                            class="carousel slide"
                            data-ride="carousel">
                            <ol class="carousel-indicators second-carousel-indicator">
                                
              @for ($i = 1; $i <= round($covid->count() /3);$i++)
                                    <li data-target="#carouselExampleIndicators3"
                                        data-slide-to="{{$i - 1}}"
                                        class="@if($i == 1) active @endif"></li>
                        @endfor
                            </ol>
                            <div class="carousel-inner">
                                @foreach($covid->chunk(3) as $row)
                                    @php
                                        $say =1;
                                    @endphp
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <div class="row">
                                            @foreach($row as $news)
                                                @if($say == 1)
                                                    <div class="col-lg-4 col-md-6 col-12  px-3">
                                                        @elseif($say == 2)
                                                            <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                                                @elseif($say == 3)
                                                                    <div
                                                                        class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                                                        @endif
                                                                        @php
                                                                            $say ++;
                                                                        @endphp
                                                                        <div class="single-box top-weekend">
                                                                            <a href="{{route('news.inner',$news->slug)}}">
                                                                                <div class="img-area">
                                                                                    <img
                                                                                        src="{{asset($news->image)}}"
                                                                                        alt="{{$news->title}}"
                                                                                    />
                                                                                </div>
                                                                            </a>
                                                                            <div class="img-text">
                                                                                <div class="grid-category">
                                                                                    @foreach($news->tag as $tag)
                                                                                        <a href="#"><span class="tags"
                                                                                                          style="background: {{$tag->color}}">{{$tag->name}}</span></a>
                                                                                    @endforeach
                                                                                </div>
                                                                                <div class="post-title">
                                                                                    <h5>
                                                                                        <a href="{{route('news.inner',$news->slug)}}">
                                                                                            {{$news->title}}
                                                                                        </a>
                                                                                    </h5>
                                                                                </div>
                                                                                <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">{{$news->created_at->isoFormat("LLL")}}</a>
                      </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                            </div>
                                                    </div>
                                                    @endforeach
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of second carousel -->

@endsection
