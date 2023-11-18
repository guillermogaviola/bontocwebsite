@extends('layouts.frontend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="lg-12">
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
            <br>
            <div class="container-fluid p-0 mb-3">
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBbtartsDWandererOfficial%2Fvideos%2F309437914951962%2F&show_text=true&width=560&t=0" width="100%" height="100%">
                </iframe> 
            </div>       
        </div>

        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Operation Tuli</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli1.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Operation. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli2.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Op. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli3.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Op. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli4.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Op. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli5.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Op. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/operationtuli/tuli6.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Op. Tuli</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">National Level Validation</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380666179_283003124496765_7347300144658206810_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380775609_282999791163765_6682299848491637579_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380776421_283000584497019_6887839739181987826_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380776509_283002704496807_6729381290295961926_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380777189_282999721163772_7357121143649208306_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NationalLevelValidation/380781699_283000187830392_3980876079394994389_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">NLV</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Coastal Cleanup Drive</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                                                <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917516299.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917521193.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917527783.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917536109.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917529786.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/coastalcleanupdrive/FB_IMG_1694917534001.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">CCD</a>
                                        <span class="px-1">/</span>
                                        <span>January 01, 2045</span>
                                    </div>
                                    <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                                    <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span class="fa fa-angle-double-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection