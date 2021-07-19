<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
        <span aria-hidden="true" style="color: white;">&times;</span>
    </button>
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
            <input class="search-input" type="text" placeholder="Seacrh Keyboard">
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
                                            data-ride="carousel" >
                                            <div class=" carousel-inner
                            text-center text-lg-left text-md-left " >
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
                                                                screening</a >
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
                <img src="{{asset('front/img/logo.png')}}" alt="Logo" />
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
                <li> <button class="search " data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-search"></i></button></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @foreach($categories as $category)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('category',$category->id)}}"
                        >{{$category->name}} <span class="sr-only">(current)</span></a >
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
</div>
<!-- End of Navigation -->
