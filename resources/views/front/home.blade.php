@extends('front.layouts.master')
@section('title', 'Cənub Tv')
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
                            <div class="carousel-item">
                                <div class="single-box-home">
                                    <a href="{{route('news.inner',$news->slug)}}">
                                        <div class="img-area">
                                            <img src="{{asset($news->image)}}"
                                                   alt="{{$news->title}}" />
                                        </div></a>
                                    <div class="img-text">
                                        <div class="grid-category">
                                            @foreach($news->tag as $tag)
                                                <a href="#"><span class="tags fashion"
                                                                 style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
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
                                            <li class="author">
                                                <i class="fas fa-clock"></i>
                                                <span> {{$news->tarix}} </span>
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
            <div class="col-xl-6 col-lg-12  home-right p-3" >
                <ul class="home-right-side">
                    @foreach($newNews2 as $news)
                        <li>
                            <div class="row">
                                <div class="col-md-6 col-5">
                                    <a href="{{route('news.inner',$news->slug)}}">
                                        <div class="img-area-home">
                                            <img
                                                src="{{asset($news->image)}}"
                                                alt=""
                                                class="w-100"/>
                                        </div></a>
                                </div>
                                <div class="col-md-6 col-7 pl-2">
                                    <div class="img-text-home">
                                        @foreach($news->tag as $tag)
                                            <a href="#"><span class="tags fashion"
                                                              style="background:{{$tag->color}}">{{$tag->name}}</span> </a>
                                        @endforeach
                                        <a href="{{route('news.inner',$news->slug)}}"><h6>
                                                {{$news->title}}
                                            </h6></a>
                                        <span>
                          <i class="fas fa-clock text-dark"></i>
                          <a class="text-dark">
                            {{$news->tarix}}
                          </a></span >
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
                    <h3>TECH</h3>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <a href="./news.html" target="_blank"><div class="img-area-story">
                                <img
                                    src="./resources/images/tech_5-600x398.jpg"
                                    alt=""
                                    class="w-100" />
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="grid-category">
                            <a href=""><span class="tags tech">tech</span> </a>
                        </div>
                        <div class="img-text-story">
                            <a href="./news.html" target="_blank"><h4>The property complete with a 30-seat screen img</h4></a>
                            <ul class="post-meta-info d-flex text-dark ">
                                <li class="author mr-3">
                                    <i class="fas fa-user"></i>
                                    <span class="text-dark"> digiQoles </span>
                                </li>
                                <li class="author">
                                    <i class="fas fa-clock"></i>
                                    <span class="text-dark"> June 30, 2019 </span>
                                </li>
                            </ul>
                        </div>
                        <p>
                            Struggling to sell one multi-million dollar home currently on
                            the market won’t stop actress and singer Jennifer Lopez from
                            expanding
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="./news.html" target="_blank"> <div class="img-area-story"> <img
                                            src="./resources/images/tech_2-600x398.jpg"
                                            alt=""
                                            class="w-100"
                                        /> </div></a>
                            </div>
                            <div class="col-md-6">
                                <div class="img-text-story">
                                    <a href="./categories.html"><span class="tags tech">tech</span></a>
                                    <a href="./news.html" target="_blank"><h6>The property complete with a 30-seat screen img</h6></a>
                                    <span>
                    <i class="fas fa-clock text-dark"></i>
                    <span  class="text-dark"> June 30, 2019 </span></span  >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="./news.html" target="_blank"> <div class="img-area-story"> <img
                                            src="./resources/images/tech_2-600x398.jpg"
                                            alt=""
                                            class="w-100"
                                        /> </div></a>
                            </div>
                            <div class="col-md-6">
                                <div class="img-text-story">
                                    <a href="./categories.html"><span class="tags tech">tech</span></a>
                                    <a href="./news.html" target="_blank"><h6>The property complete with a 30-seat screen img</h6></a>
                                    <span>
                   <i class="fas fa-clock text-dark"></i>
                   <span class="text-dark"> June 30, 2019 </span></span >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="./news.html" target="_blank"> <div class="img-area-story"> <img
                                            src="./resources/images/tech_2-600x398.jpg"
                                            alt=""
                                            class="w-100"
                                        /> </div></a>
                            </div>
                            <div class="col-md-6">
                                <div class="img-text-story">
                                    <a href="./categories.html"><span class="tags tech">tech</span></a>
                                    <a href="./news.html" target="_blank"><h6>The property complete with a 30-seat screen img</h6></a>
                                    <span>
             <i class="fas fa-clock text-dark"></i>
             <span  class="text-dark"> June 30, 2019 </span></span >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="./news.html" target="_blank"> <div class="img-area-story"> <img
                                            src="./resources/images/tech_2-600x398.jpg"
                                            alt=""
                                            class="w-100" /> </div></a>
                            </div>
                            <div class="col-md-6">
                                <div class="img-text-story">
                                    <a href="./categories.html"><span class="tags tech">tech</span></a>
                                    <a href="./news.html" target="_blank"><h6>The property complete with a 30-seat screen img</h6></a>
                                    <span>
             <i class="fas fa-clock text-dark"></i>
             <span class="text-dark"> June 30, 2019 </span></span >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 ">
                <div class=" my-card card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">COVID-19 WORLDWIDE <br> STATISTICS</h5>
                    </div>
                </div>
                <div class="information">
                    <h6 class="pt-4">GLOBAL TOTAL</h6>
                    <p>Last update on: 2021-06-24 21:21:33</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Cases</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">180,554,890</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Deaths</h6>
                    </div>
                </div>
                <div class="live-numbers-red">
                    <p class="px-3">3,911,126</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Recovered</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">165,250,624</p>
                </div>
                <div class="d-flex">
                    <div class="blob red"></div>
                    <div class="live-text">
                        <h6>Active</h6>
                    </div>
                </div>
                <div class="live-numbers-green">
                    <p class="px-3">11,393,140</p>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.5810491929788!2d49.90771911525776!3d40.41813097936491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4030637b8559b7d9%3A0xd2ac86cbe2e95ad!2sCaspian%20Sport%20Hotel%20and%20Plaza!5e0!3m2!1sen!2s!4v1624559111183!5m2!1sen!2s"
                    width="90%" height="" ; style="border:0; " allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
    <!-- End of technology -->


    <!--First Carousel  -->
    <div class="container first-carousel">
        <div class="row">
            <div class="col-lg-12 px-3">
                <div class="text my-5">
                    <h3>WHAT YOU NEED TO KNOW</h3>
                </div>
                <div
                    id="carouselExampleIndicators2"
                    class="carousel slide"
                    data-ride="carousel">
                    <ol class="carousel-indicators first-carousel-indicator">
                        <li
                            data-target="#carouselExampleIndicators2"
                            data-slide-to="0"
                            class="active" ></li>
                        <li
                            data-target="#carouselExampleIndicators2"
                            data-slide-to="1"></li>
                        <li
                            data-target="#carouselExampleIndicators2"
                            data-slide-to="2" ></li>
                        <li
                            data-target="#carouselExampleIndicators2"
                            data-slide-to="3" ></li>
                        <li
                            data-target="#carouselExampleIndicators2"
                            data-slide-to="4" ></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 px-3">
                                    <div class="single-box">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <span href="">June 30, 2019 </span>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"/>
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <span href="">June 30, 2019 </span>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12  px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <span href="">June 30, 2019 </span>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <span href="">June 30, 2019 </span>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <span href="">June 30, 2019 </span>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12  px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12  px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12  px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box ">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                          <i class="fas fa-clock"></i>
                          <span href="">June 30, 2019 </span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of carousel -->



    <!-- Second Carousel -->
    <div class="container second-carousel" >
        <div class="row" >
            <div class="text my-5">
                <h3>MAKING SENSE OF COVID-19</h3>
            </div>
            <div class="col-lg-12 col-12" >
                <div
                    id="carouselExampleIndicators3"
                    class="carousel slide"
                    data-ride="carousel">
                    <ol class="carousel-indicators second-carousel-indicator">
                        <li
                            data-target="#carouselExampleIndicators3"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li
                            data-target="#carouselExampleIndicators3"
                            data-slide-to="1"
                        ></li>
                        <li
                            data-target="#carouselExampleIndicators3"
                            data-slide-to="2"

                        ></li>
                        <li data-target="#carouselExampleIndicators3"
                            data-slide-to="3" ></li>
                        <li data-target="#carouselExampleIndicators3"
                            data-slide-to="4" >
                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12 px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-md-block d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img

                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank">   <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12  px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-md-block px-3 d-none">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend ">
                                        <a href="./news.html" target="_blank"><div class="img-area ">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    class="w-100"
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12  px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-md-block px-3 d-none">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend ">
                                        <a href="./news.html" target="_blank"><div class="img-area ">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    class="w-100"
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12  px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-md-block px-3 d-none">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend ">
                                        <a href="./news.html" target="_blank"><div class="img-area ">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    class="w-100"
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12  px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"   />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-md-block px-3 d-none">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"> <div class="img-area">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"/>
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend ">
                                        <a href="./news.html" target="_blank"><div class="img-area ">
                                                <img
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"
                                                />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-lg-block d-md-none d-none px-3">
                                    <div class="single-box top-weekend">
                                        <a href="./news.html" target="_blank"><div class="img-area">
                                                <img
                                                    class="w-100"
                                                    src="./resources/images/tech_1-600x398.jpg"
                                                    alt="First slide"   />
                                            </div></a>
                                        <div class="img-text">
                                            <div class="grid-category">
                                                <a href=""><span class="tags fashion">Fashion</span></a> <a href=""><span class="tags lifestyle">Lifestyle</span></a>
                                            </div>
                                            <div class="post-title">
                                                <h5>
                                                    <a href="">
                                                        The billionaire Philan thropist read to learn more
                                                        and city
                                                    </a>
                                                </h5>
                                            </div>
                                            <span class="author">
                        <i class="fas fa-clock"></i>
                        <a href="">June 30, 2019 </a>
                      </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of second carousel -->


    <!-- Middle banner -->
    <div class="container middle-banner">
        <div class="row my-5">
            <div class="col-xl-12 col-lg-12 col-md-12 d-lg-block d-xl-block d-md-block d-none">
                <img src="./resources/images/content_banner_3.png" alt="" class="w-100" />
            </div>
        </div>
    </div>
    <!-- End of banner -->


@endsection
