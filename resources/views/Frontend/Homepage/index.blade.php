@extends('layouts.frontend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
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
            </div>
            <br>
            <div class="video-container">
               <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBbtartsDWandererOfficial%2Fvideos%2F309437914951962%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>       
        </div>

        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Municipality of Bontoc Celebrates World Mental Health Month with Launch of Project NOEL (Non-Judgmental Outreach and Emphatic Lifting)</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395160674_302999195830491_8889843830936073855_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                    <p class="m-0">exemplary leadership of Mayor Noel E. Alinsub, marked the World Mental Health Month with a momentous celebration. The event, spearheaded by the dedicated Mental Health Program Coordinator, Ms. Myra Luz Maunes-Gorduiz, in collaboration with the Municipal Health Coordinator, Dr. Eva Ceniza-Padalapat, brought together a range of stakeholders to launch the innovative Mental Health Project known as Project NOEL (Non-Judgmental Outreach and Emphatic Lifting).</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395291630_302999219163822_3887051330293934413_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                    <p class="m-0">Aiming to destigmatize mental health, raise awareness, and provide vital support and resources for those in need, Project NOEL is a significant step forward in promoting mental well-being within the community. Project NOEL is more than just an acronym, it embodies a commitment to creating a non-judgmental space where individuals can find understanding, support, and the resources necessary to address their mental health challenges. By launching this project, the Municipality of Bontoc has taken a significant stride towards nurturing a community that cares not only for its physical health but also for the mental and emotional well-being of its residents.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395293777_303000109163733_113106439269659089_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                    <p class="m-0">The successful launch of Project NOEL underscores a collective commitment to mental health, with unwavering support from the Local Government Unit, led by Mayor Noel E. Alinsub. Notable attendees, such as the Local Chief Executive's Special Assistant on Health, Dr. Aileen Dagohoy-Alinsub, and Department of Health representative Ms. Mariza Dolera and SPED Teacher Ms. Emely Aliling-Baslot further enriched the event, demonstrating the convergence of leaders and professionals who deeply recognize the significance of mental well-being.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{ asset('resources/img/WorldMentalHealthMonth/395312155_303000095830401_5731520755132012313_n.jpg') }}" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="">World Mental Health Month</a>
                                        <span class="px-1">/</span>
                                        <span>October 27, 2023</span>
                                    </div>
                                    <a class="h6" href="">Bontoc, October 26, 2023 - The Municipality of Bontoc, under the</a>
                                    <p class="m-0">Project NOEL serves as a beacon of hope for anyone who may be struggling with mental health issues in Bontoc. By creating an environment free from judgment and full of empathy, this project aims to break down the barriers that often prevent individuals from seeking help.</p>
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
                                    <p class="m-0">The launching was a day of enlightenment, where residents of Bontoc came together to learn about the importance of Mental Health and the resources available to them. It marked a significant milestone in the town's journey towards creating a society that understands, supports, and uplifts its members.</p>
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
                                    <p class="m-0"> The Municipality of Bontoc's commitment to mental health and the launch of Project NOEL are testament to the town's dedication to the holistic well-being of its people. It is a significant step forward in transforming how mental health is perceived and addressed within the community, making Bontoc a leader in championing mental well-being.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Grand Opening of the Notarial Office of Atty. Mae Angieline T. Salva-Alaras, CPA – a proud Bontocanon.</h3>
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
                                    <p class="m-0">...occasion unfolded to celebrate the grand opening of the Notarial Office of Atty. Mae Angieline T. Salva-Alaras located in the heart of Brgy. Talisay, Bontoc Southern Leyte. Atty. Alaras, who is also a Certified Public Accountant is proud as well as humbled to serve and offer her legal services to the citizenry of Bontoc and its neighboring towns in Southern Leyte.</p>
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
                                    <p class="m-0">The inauguration of the law office was attended by esteemed dignitaries, including the First Lady of Bontoc, Dr. Aileen D. Alinsub, who graced the event on behalf of Mayor Noel E. Alinsub as a representative of the community.</p>
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
                                    <p class="m-0">She expressed her wholehearted support for the legal endeavors and growth in the town. She highlighted the significant role that legal professionals play in ensuring justice, fairness, and the rule of law within the community.</p>
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
                                    <p class="m-0">It was also attended by the Parish Priest of the Bontoc, Rev. Fr. Joselito Catubig who performed the holy blessing of the notarial office.</p>
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
                                    <p class="m-0">Atty. Alaras, expressed her gratitude to everyone present and shared her vision for the law office. She emphasized that in response to the call for entrepreneurs and investors in her hometown, she decided to put up her office and services in the area to serve the legal needs of the people of Bontoc, Southern Leyte.</p>
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
                                    <p class="m-0">Atty. Mae Angieline T. Salva-Alaras’ law office will undoubtedly contribute to the continued growth and development of Brgy. Talisay and the surrounding areas of the Municipality of Bontoc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="m-0">Kasalan ng Bayan 2023: Celebrating Love and Union in Bontoc
                                Bontoc, Southern Leyte – November 6, 2023</h3>
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
                                    <p class="m-0">the Municipality of Bontoc, a successful Mass Wedding named "Kasalan ng Bayan 2023" was held on October 31, 2023, just a day after the Barangay elections. The event, organized by the dedicated efforts of Ms. Ruby Grace Nidoy, aimed to legalize the unions of 16 unmarried couples, further reinforcing the sense of togetherness and commitment within the community.</p>
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
                                    <p class="m-0">The Mass Wedding ceremony was a resounding success, with couples from all walks of life coming together to affirm their love and dedication to each other. It was a remarkable celebration of love and unity, symbolizing the strength of the Bontoc community.</p>
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
                                    <p class="m-0">Mayor Noel E. Alinsub, who is known for his strong support for community events and initiatives, graced the occasion with his presence. He was joined by his wife, Dr. Aileen D. Alinsub, the First Lady of Bontoc, who also played an instrumental role in making the event a grand success.</p>
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
                                    <p class="m-0">During the ceremony, Mayor Noel E. Alinsub delivered a heartwarming speech, emphasizing the significance of love and unity within the community. He commended the initiative of Ms. Ruby Grace Nidoy and all those involved in organizing the Mass Wedding, highlighting how such events promote strong family ties and community bonds.</p>
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
                                    <p class="m-0">Dr. Aileen D. Alinsub, whose dedication to the welfare of the community is widely recognized, also shared her words of encouragement with the couples. She expressed her support for their commitment and highlighted the importance of love in building a strong and resilient society.
                                    The "Kasalan ng Bayan 2023" was more than just a ceremony; it was a celebration of love, commitment, and community. It sent a powerful message that love knows no boundaries and that the bonds of marriage are a foundation for the unity and prosperity of the Municipality of Bontoc.</p>
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
                                    <p class="m-0">The event was marked by the exchange of vows, rings, and heartfelt promises among the couples, witnessed by their families and friends. The joy and love that filled the air were palpable, leaving a lasting impression on all who attended.
                                    The success of "Kasalan ng Bayan 2023" is a testament to the strong sense of community and the unwavering commitment to creating a better future for the Municipality of Bontoc. It was a day of celebration, unity, and the realization that love and togetherness are essential values that bind the community together.</p>
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