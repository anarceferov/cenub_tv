<!DOCTYPE html>
<div lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
            integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('/front/resources/style.css')}}"/>
        <title>Cənub Tv</title>
    </head>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: white;">&times;</span>
        </button>
        <div class="modal-dialog modal-dialog-centered" role="document">

            <div class="modal-content">
                <input class="search-input" type="text" placeholder="Axtar">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
    <!-- End of modal -->


    <!-- Topbar -->
    <div class="topbar topbar-gray mb-3">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-lg-9 col-md-10 col-sm-12 align-item-center px-4">
                    <div class="trending">
                        <div class="trending-bar">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 text-center">
                      <span class="trending-title">
                        <i class="fas fa-bolt"></i> Trending
                      </span>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                            <div
                                                id="tredingcarousel"
                                                class="
                          trending-slide
                          carousel
                          slide
                          trending-slide-bg "
                                                data-ride="carousel">
                                                <div class=" carousel-inner
                            text-center text-lg-left text-md-left ">
                                                    <div class="carousel-item active">
                                                        <div class="post-content">
                                                            <p class="post-title title-small">
                                                                <a href="#">
                                                                    Ratcliffe to be Director of nation talent
                                                                    Trump ignored</a
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="post-content">
                                                            <p class="post-title title-small">
                                                                <a href="#"
                                                                >Nancy multi Chinese business woman
                                                                    trying</a
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="post-content">
                                                            <p class="post-title title-small">
                                                                <a href="#"
                                                                >Harbour amid a Slowen down in singer city
                                                                    screening</a
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="post-content">
                                                            <p class="post-title title-small">
                                                                <a href="#"
                                                                >Class property employ ancho red multi level
                                                                    mansion</a
                                                                >
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="post-content">
                                                            <p class="post-title title-small">
                                                                <a href="#"
                                                                >The secret to moving this ancient sphinx
                                                                    screening</a>
                                                            </p>
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
                </div>
                <div
                    class="
            col-lg-3 col-md-2 col-sm-12
            align-item-center
            text-right text-sm-center
          "
                >
                    <ul class="top-info text-center">
                        <li>
                            <i class="fas fa-calendar-check" aria-hidden="true"></i> June
                            15, 2021
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of topbar -->


    <!-- Banner -->
    <div class="container topbanner my-3">
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 align-self-center mx-auto">
                <div class="logo-area">
                    <img src="{{asset('/front/resources/images/logo.png/')}}" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Banner -->

    <!-- Navigation -->
    <div class="container-fluid  navigation " style="background-color: red;">
        <nav class="navbar navbar-expand-xl navbar-dark container align-items-xl-center">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-social">
                <ul class="xs-social-list xs-social-list-v6 digiqole-social-list">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li>
                        <button class="search " data-toggle="modal" data-target="#exampleModalCenter"><i
                                class="fas fa-search"></i></button>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @foreach($frd['menu'] as $menu)
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('category',$menu->id)}}"
                            >{{$menu->name}}
                                {{--                            <span class="sr-only">(current)</span>--}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <!-- End of Navigation -->

@yield('content')

<!-- Middle banner -->
    <div class="container middle-banner">
        <div class="row my-5">
            <div class="col-xl-12 col-lg-12 col-md-12 d-lg-block d-xl-block d-md-block d-none">
                <img src="{{asset('/front/resources/images/content_banner_3.png')}}" alt="Logo" class="w-100"/>
            </div>
        </div>
    </div>
    <!-- End of banner -->
    <!-- Footer -->
    <footer class="ts-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 fadeInUp">
                    <div class="footer-left-widget">
                        <h3 class="widget-title">
                            <span>Haqqımızda</span>
                        </h3>
                        <div class="textwidget">
                            <p>Hidden Hills property with mountain and city view boast nine bedrooms including a master
                                suite with private terrace and an entertainment. wing which includes a 20-seat
                                theater.</p>
                        </div>
                    </div>
                    <div class="widget_text footer-left-widget">
                        <div class="textwidget custom-html-widget">
                            <ul class="footer-info">
                                <li>
                                    <i class="fa fa-home"></i> 15 Cliff St, New York NY 10038, USA
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> +1 212-602-9641
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>info@example.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-left-widget">
                        <div class="footer-social">
                            <ul class="xs-social-list xs-social-list-v6 digiqole-social-list">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12  offset-lg-1 ">
                    <div class="footer-widget footer-center-widget">
                        <h3 class="widget-title"><span>Məşhur xəbərlər</span></h3>
                        <div class="recent-posts-widget post-list-item">
                            <div class="post-tab-list">
                                @foreach($viewNews as $news)
                                    <div class="post-content media">
                                        <div class="row mb-3">
                                            <div class="col-xl-6 col-lg-5 col-md-6 col-6">
                                                <div class="post-thumb">
                                                    <a href="{{route('news.inner',$news->slug)}}" rel="bookmark">
                                                        <img src="{{asset($news->image)}}" alt="{{$news->title}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-7  col-md-6 col-6">
                                                <div class="post-info media-body">
                                                    <h6 class="post-title">
                                                        <a href="{{route('news.inner',$news->slug)}}" rel="bookmark"
                                                           title="{{$news->title}}">{{$news->title}}</a>
                                                    </h6>
                                                    <div class="post-meta"><span class="post-date"><i
                                                                class="fa fa-clock"
                                                                aria-hidden="true"></i>{{$news->tarix}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-12 my-3">
                    <div class="footer-widget footer-right-widget">
                        <a href="#">
                            <img width="285" height="375" src="{{asset('front/img/widget_banner.png')}}"
                                 class="image wp-image-3495  attachment-full size-full" alt="Footer ads"
                                 style="max-width: 100%; height: auto;"/></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of footer -->


    <!-- Copyright -->
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 col-lg-11 align-items-xl-center align-items-lg-center">
                    <div class="copyright-text text-center">
                        <p> © 2021, Digiqole - News Magazine WordPress Theme. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-1">
                    <a href="#" style="text-decoration: none">
                        <div class="backTo">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of copyright -->


    <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{--<script src="./script.js"></script>--}}
    </body>
    </html>
