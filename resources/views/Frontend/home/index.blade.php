@extends('layouts.frontend')

@section('content')

<style>
    .h6{
         font-family: 'Helvetica';
    }
    a{
        font-family: 'Helvetica';
    }
    span{
        font-family: 'Helvetica';
    }
</style>

<div class="container-fluid">
        <div class="col-lg-12">
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1" class=""></li>
                    <li data-target="#slides" data-slide-to="2" class=""></li>
                    <li data-target="#slides" data-slide-to="3" class=""></li>
                    <li data-target="#slides" data-slide-to="4" class=""></li>
                </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('resources/img/Pictureo.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                    <div class="carousel-caption">
                      <h3></h3>
                      <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('resources/img/tourism/anahaocave/anahaocave1.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                    <div class="carousel-caption">
                      <h3 style="color: white; font-family: Helvetica;">Anahao Cave</h3>
                      <p style="color: white;" >Brgy. Anahao, Bontoc, Southern Leyte</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('resources/img/tourism/anahaocave/anahaocave2.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                    <div class="carousel-caption">
                       <h3 style="color: white; font-family: Helvetica;">Anahao Cave</h3>
                      <p style="color: white;" >Brgy. Anahao, Bontoc, Southern Leyte</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('resources/img/tourism/catmoncave/catmoncave3.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                    <div class="carousel-caption">
                      <h3 style="color: white; font-family: Helvetica;">Catmon Cave</h3>
                      <p style="color: white;" >Brgy. Catmon, Bontoc, Southern Leyte</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('resources/img/tourism/butongfalls/butongfalls12.jpg')}}" class="img-fluid" style="width: 100%; height: 100%;">
                    <div class="carousel-caption">
                      <h3 style="color: white; font-family: Helvetica;" >Butong Falls</h3>
                      <p style="color: white;">Pamigsian, Bontoc, Southern Leyte</p>
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
            <div class="video-container">
               <iframe style="font-family: 'Montserrat';" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBbtartsDWandererOfficial%2Fvideos%2F309437914951962%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>       
        </div>
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h5 style="color: black;" class="m-0">World Mental Health Month</h5>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="#">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395316821_303000189163725_2409139856403516309_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395319120_303000175830393_641487911243486377_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h5 style="color: black;" class="m-0">Grand Opening of the Notarial Office of Atty. Mae Angieline T. Salva-Alaras, CPA – a proud Bontocanon.</h5>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/399660281_308839648579779_1089014680360870426_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/399800044_308839661913111_2169043084233642560_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/399832128_308839575246453_381063295289343562_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/399912710_308839678579776_6719550063149240836_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/400384101_308839698579774_1454080476909973901_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/NotarialOffice/400389995_308839655246445_8038282732180203115_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Grand Opening of the Notarial Office</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">Talisay, Bontoc, Southern Leyte - A momentous...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h5 style="color: black;" class="m-0">Kasalan ng Bayan 2023: Celebrating Love and Union in Bontoc
                                Bontoc, Southern Leyte – November 6, 2023</h5>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                                                <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/400397789_308906778573066_3431814930677605601_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/399882023_308907345239676_7308770123880998832_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/399876161_308907878572956_5251865481111890027_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/400408836_308907275239683_7783928362048714183_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/400412749_308907515239659_3991681500890956870_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/KasalangBayan/400426875_308907828572961_4629503198572073174_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">Kasalan ng Bayan 2023...</a>
                                        <span class="px-1">/</span>
                                        <span>November 6, 2023</span>
                                    </div>
                                    <a class="h6" href="">In a heartwarming event that brought joy and unity to...</a>
                                </div>
                            </div>
                        </div>
                    </div><br><br>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection