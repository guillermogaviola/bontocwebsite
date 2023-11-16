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
       <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <br>
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Upcoming</span> &nbsp;Events</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Popular</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/380788366_283000534497024_3506934122928243935_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">The Municipality of Bontoc under the leadership of Mayor Noel E...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380790822_283000664497011_7694618737861356543_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The Municipality of Bontoc under the leadership of Mayor Noel E...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380795198_283000917830319_3012740300248297688_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The Municipality of Bontoc under the leadership of Mayor Noel E...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/380983426_283003054496772_5761171801701344449_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">The Municipality of Bontoc under the leadership of Mayor Noel E...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/381527611_283000124497065_1959940677603633586_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The Municipality of Bontoc under the leadership of Mayor Noel E...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/381528975_282999924497085_8741520516038219354_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The Municipality of Bontoc under the leadership of Mayor Noel E...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="{{asset('resources/img/Picture1.jpg')}}" alt=""></a>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Latest</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/381690464_283000237830387_1538672235401107666_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Lorem ipsum...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/381811442_283003184496759_1339875591568001399_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/382092490_283002764496801_854494578659885034_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/382130917_283000357830375_4924509793611219194_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Lorem ipsum...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/382240917_283000031163741_6524583850418605306_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/382445134_283003321163412_3639723104418806360_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Lorem ipsum...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="{{asset('resources/img/LGUBontocTourismPage/lgubontoctourism.jpg')}}" alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tourism</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379648790_295662436532605_5346653382277613239_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379926131_295662249865957_606775849395380006_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379855040_295662126532636_958854200198990175_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379855040_295662126532636_958854200198990175_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379853788_295662176532631_298570711173342383_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379652499_295662479865934_7784922696817997887_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379648790_295662436532605_5346653382277613239_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/358098598_255737790525070_3866223464367922328_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379607867_295662136532635_7503342341667756952_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/378390320_295662333199282_8291648439619282409_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/358098180_255737537191762_511096645561435252_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/378012574_295662556532593_2693366340400807375_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/378124314_295662516532597_6544729059121559954_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">Lorem ipsum...</a>
                            </div>
                        </div>
                    </div>
                    <!-- Popular News End -->


                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->

      <!-- Footer Start -->
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#"></a>All Rights Reserved.
            Designed by <a class="font-weight-bold" href="">Gaviola, Guillermo S. et al. 2023</a>
        </p>
    </div>
    <!-- Footer End -->

</div>
@endsection