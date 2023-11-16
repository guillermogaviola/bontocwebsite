@extends('layouts.frontend')

@section('content')

<!-- Favicon -->
    <link href="{{asset('resources/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('resources/https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap')}}" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="{{asset('resources/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('resources/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('resources/css/style.css')}}" rel="stylesheet">



<div class="container">

<br>
<br>

<h1 style="text-align: center;"><span style="color: #046631;">POPULAR DESTINATIONS</span></h1>

<br>
<br>


    <div class="container-fluid" style="padding:0px;">
            <!-- Slideshow -->

            <div class="section">
                <div id="slides" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#slides" data-slide-to="0" class="active"></li>
                        <li data-target="#slides" data-slide-to="1" class=""></li>
                        <li data-target="#slides" data-slide-to="2" class=""></li>
                        <li data-target="#slides" data-slide-to="3" class=""></li>
                        <li data-target="#slides" data-slide-to="4" class=""></li>
                        <li data-target="#slides" data-slide-to="5" class=""></li>
                         <li data-target="#slides" data-slide-to="6" class=""></li>
                         <li data-target="#slides" data-slide-to="8" class=""></li>
                         <li data-target="#slides" data-slide-to="9" class=""></li>
                         <li data-target="#slides" data-slide-to="10" class=""></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/357726720_255738203858362_6916040560477426120_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>Municipal Hall Lobby</h3>
                              <p>We'd love to serve you!</p>
                            </div>  -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/357758985_255738227191693_7770152592398406372_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>Municipal Hall Lobby</h3>
                              <p>We'd love to serve you!</p>
                            </div>  -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/358088530_255737810525068_4706605546751720629_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>Municipal Hall Stair</h3>
                              <p>Thank you for visiting Kapalong!</p>
                            </div>   -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/357715021_255741877191328_557352104818833066_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div>  -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/357721356_255738340525015_724184738969647289_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>Municipal Hall Stair</h3>
                              <p>Thank you for visiting Kapalong!</p>
                            </div>  -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/358098180_255737537191762_511096645561435252_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/358098598_255737790525070_3866223464367922328_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div>  -->
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/357558305_255741803858002_2033430698253589036_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div>  -->
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/292065104_125257293537656_1015438326623572769_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div>  -->
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/292253149_125257220204330_2218283621063189345_n.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                            <!-- <div class="carousel-caption">
                              <h3>LGU Compound Exit</h3>
                              <p>We'd love to see you again!</p>
                            </div>  -->
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#slides" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slides" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <!-- End Slideshow -->

                <!-- End Section -->

                <!-- Slogan -->
                <!-- <div class="container-fluid" id="slogan">
                  <div class="row">
                    <div class="col-sm-12 col-lg-12">
                      <img width="100%" height="450" class="img-fluid" src="../resources/img/slides/slogan.png">
                    </div>
                  </div>
                </div> -->
                <!-- End Slogan -->
            </div>
    </div>
  
</div>
@endsection