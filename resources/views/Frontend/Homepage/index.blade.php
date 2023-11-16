@extends('layouts.frontend')

@section('content')

<div class="container">
        <div class="row">
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
                            <img src="{{asset('resources/img/Picture1.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3></h3>
                              <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/Picture2.png')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3></h3>
                              <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/Picture3.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3></h3>
                              <p></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/catmoncave/catmoncave3.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Catmon Cave</h3>
                              <p>Bry. Catmon, Bontoc, So. Leyte</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/catmoncave/catmoncave5.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Catmon Cave</h3>
                              <p>Bry. Catmon, Bontoc, So. Leyte</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/yumeyaresort/FB_IMG_1694919746940.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Yumeya Mountain Resort</h3>
                              <p>Brgy. Sto. Nino, Bontoc, So. Leyte</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/yumeyaresort/FB_IMG_1694921338546.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Yumeya Mountain Resort</h3>
                               <p>Brgy. Sto. Nino, Bontoc, So. Leyte</p>
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/catmoncave/catmoncave1.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Catmon Cave</h3>
                              <p>Bry. Catmon, Bontoc, So. Leyte</p>
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/bontocproper/FB_IMG_1694919829911.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Birds-eye view of Bontoc Proper</h3>
                              <p>Bontoc, Southern Leyte, Philippines</p>
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('resources/img/tourism/bontocproper/bontocport.jpg')}}" class="img-fluid" style="width: 1500px; height: 500px;">
                            <div class="carousel-caption">
                              <h3 style="color: white;">Port of Bontoc</h3>
                              <p>Brgy. Poblacion, Bontoc, So. Leyte</p>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#slides" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#slides" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
    </div>
            

            <br>

            <div class="container-fluid p-0 mb-3">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBbtartsDWandererOfficial%2Fvideos%2F309437914951962%2F&show_text=true&width=560&t=0" width="1110" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true">
                </iframe> 
            </div>
</div>

<div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h6 class="m-0" style="color: green">YOU'RE HERE: HOME</h6>
                                <a class="text-secondary font-weight-medium text-decoration-none" href=""></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/mangroveplanting/FB_IMG_1694917505318.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h4" href="">The volunteers from the Municipality of Bontoc led by Ms. Ruby Chua-Opina during the Mangrove Planting at Macrohon, Southern Leyte in  celebration of the International Coastal Clean Up Drive.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/mangroveplanting/FB_IMG_1694917491111.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The volunteers from the...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/mangroveplanting/FB_IMG_1694917486678.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">The volunteers from...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/coastalcleanupdrive/FB_IMG_1694917521193.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h4" href="">International Simultaneous Coastal Clean Up Drive.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/earthquakedrill/FB_IMG_1694917672381.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Simultaneous Earthquake Drill...</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/earthquakedrill/FB_IMG_1694917677622.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Simultaneous Earthquake...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Post</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="#">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/earthquakedrill/FB_IMG_1694917675918.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h4" href="">Simultaneous...</p>
                                </div>
                            </div>
                            
                            <div class="d-flex mb-3">
                                <img src="{{asset('resources/img/slsubcorientation/FB_IMG_1694922419558.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h6 m-0" href="">Mayor Noel E. Alinsub during Southern Leyte State University Bontoc Campus'...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('resources/img/slsubcorientation/FB_IMG_1694922438018.jpg')}}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Latest</a>
                                        <span class="px-1">/</span>
                                        <span>Sept. 17, 2023</span>
                                    </div>
                                    <a class="h4" href="">Mayor Noel E. Alinsub during Southern Leyte State University Bontoc Campus'  academic opening..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 pt-3 pt-lg-0">
                   <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>

                        </div>
                        <div class="d-flex mb-3">
                            <a target="blank" href="https://www.facebook.com/BontocPIO">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/facebook.png')}}" style="width: 40px;">
                             </a>
                             <a target="blank" href="https://www.threads.net/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/threads.png')}}" style="width: 40px;">
                             </a>
                            <a target="blank" href="https://www.youtube.com/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources//img/socialmedias/youtube2.png')}}" style="width: 40px;">
                             </a>
                              <!-- <a target="blank" href="https://www.tiktok.com/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/tiktok.png')}}" style="width: 40px;">
                             </a>
                              <a target="blank" href="https://twitter.com/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/twitter.png')}}" style="width: 40px;">
                             </a>
                             <a target="blank" href="https://www.snapchat.com/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/snapchat.png')}}" style="width: 40px;">
                             </a>
                             <a target="blank" href="https://web.telegram.org/k/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/telegram.png')}}" style="width: 40px;">
                             </a>
                             <a target="blank" href="https://www.linkedin.com/in/guillermo-gaviola-sumam45994a204/">
                                <img decoding="async" loading="lazy" class="alignnone wp-image-9481" src="{{asset('resources/img/socialmedias/linkedin.png')}}" style="width: 40px;">
                             </a> -->

                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Newsletter</h3>
                        </div>
                        <div class="bg-light text-center p-4 mb-3">
                            <p>Join us for upcoming webinars, workshops, and conferences.</p>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Trending</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917708234.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">The Municipality of Bontoc joins the 123rd...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917710137.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">The Municipality of Bontoc joins the 123rd Philippine Civil Service...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917712447.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">The Municipality of Bontoc joins the 123rd Philippine Civil Service Anniversary...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917714202.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">The Municipality of Bontoc joins the 123rd Philippine Civil...</a>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/FB_IMG_1694917687471.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">The Municipality of Bontoc joins the 123rd Philippine Civil Service Anniversary Celebration! 🇵🇭🎉</a>
                            </div>
                        </div>


                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/civelserviceanniv/123rd.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">"123rd Civil Service Anniversary"</a>
                            </div>
                        </div>


                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/operationtuli/tuli1.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">"Free Operation Tuli para Pogi"</a>
                            </div>
                        </div>


                        <div class="d-flex mb-3">
                            <img src="{{asset('resources/img/operationtuli/tuli2.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                <div class="mb-1" style="font-size: 13px;">
                                    <a href="">Latest</a>
                                    <span class="px-1">/</span>
                                    <span>Sept. 8, 2023</span>
                                </div>
                                <a class="h6 m-0" href="">"Free Operation Tuli para Pogi"</a>
                            </div>
                        </div>

                    </div>
                    <!-- Popular News End -->
                </div>
</div>

</div>
 
@endsection