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
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Ne</span>ws</h1>
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
                                <img class="img-fluid w-100" src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917708234.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">123rd Philippine Civil Service Anniversary...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917710137.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">123rd Philippine Civil Service Anniversary...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917712447.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">123rd Philippine Civil Service Anniversary...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917714202.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">123rd Philippine Civil Service Anniversary...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/coastalcleanupdrive/FB_IMG_1694917516299.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Coastal...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/coastalcleanupdrive/FB_IMG_1694917527783.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Coastal Clean up...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    






                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/1280x565.jpg')}}" alt=""></a>
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
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/380666179_283003124496765_7347300144658206810_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">A step closer towards the arduous journey of the most coveted SGLG...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380775609_282999791163765_6682299848491637579_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380776421_283000584497019_6887839739181987826_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380782748_282999617830449_2766444337793010920_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/NationalLevelValidation/380776509_283002704496807_6729381290295961926_n.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h4" href="">A step closer towards the arduous journey of the most coveted SGLG...</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380777189_282999721163772_7357121143649208306_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380781699_283000187830392_3980876079394994389_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/NationalLevelValidation/380782728_283000961163648_1534310968638030137_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 20, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">A step closer towards the arduous journey of the most coveted SGLG...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="{{asset('resources/img/LGUBontocTourismPage/LovePhilippines.jpg')}}" alt=""></a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">COASTAL CLEANUP DRIVE...</a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">Coastal Cleanup Drive...</a>
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
                                <a class="h6 m-0" href="">COASTAL CLEANUP DRIVE...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/379573791_295662223199293_8951668271975744093_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">COASTAL CLEANUP DRIVE...</a>
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
                                <a class="h6 m-0" href="">COASTAL CLEANUP DRIVE...</a>
                            </div>
                        </div>
                         <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/LGUBontocTourismPage/378141415_295662213199294_8803181928516331037_n.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Tourism</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 19, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">COASTAL CLEANUP DRIVE...</a>
                            </div>
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
                        </div>
                    </div>
                    <!-- Tags End -->
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