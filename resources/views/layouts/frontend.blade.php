<!DOCTYPE html>
<html lang="en">
<head>
    <title>Municipality of Bontoc | Official Website</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('resources/img/bontoclogonobg.png')}}" sizes="32x32" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href='https://fonts.googleapis.com'>
    <link rel="preconnect" href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap' rel="stylesheet">   

    <!-- Font Awesome -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('resources/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet">

    <style>
        h5{
            color: white;
            font-family: Helvetica;
        }
        p{
            color: black;
            font-family: 'Helvetica';
        }
        .photo-overlay {
            width: 120%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            background: rgb(20 69 125 / 59%);
            /*background: linear-gradient(179deg, rgba(0,48,103,1) 0%, rgba(0,212,255,0) 75%);*/
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-image: url('{{asset('resources/img/IMG20230719081550.jpg')}}'); background-repeat: no-repeat;background-position: center;background-size: 100% 300%;">
                <div class="col-sm-10"> <br>
                    <div class="photo-overlay"></div>
                     <img style="width: 10%; float: left; padding-right: 5px; margin-bottom: 4%; position: relative;" src="{{asset('resources/img/bontoclogonobg.png')}}">
                        <h3 style="color: white; font-family: 'Helvetica'; margin-top: 10px; position: relative; text-shadow: 0 0 3px green, 0 0 5px green; ">Municipality of Bontoc</h3>
                        <p style="color: white; position: relative; text-shadow: 0 0 3px green, 0 0 5px green;">Brgy. Poblacion, Bontoc, Southern Leyte, Philippines, 6604</p>
                        <h6 style="color: white; position: relative; text-shadow: 0 0 3px green, 0 0 5px green;">TINUORAY NGA SERBISYO, TINUORAY NGA ASENSO!</h6> 
                </div>
                <div class="col-sm-2" >
                    <p  style="color: white; padding-right: -1px;">Philippine Standard Time <iframe src="https://oras.pagasa.dost.gov.ph/time_display/time/" allowtransparency="true" scrolling="no" frameborder="0" height="30px" width="100%"></iframe></p>
                </div>
        </div>

        @include('layouts._mainnav')
        @yield('content')

    </div>

<!-- Footer Start -->
<div class="container-fluid bg-success pt-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-sm-12 col-lg-4 text-light">
        <h5>Public Sector Links</h5>
            <ul>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://www.gov.ph/">GOV.PH</a></li>
                <!-- <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://cscro8.weebly.com/">Civil Service Commision Region 8</a></li> -->
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://www.officialgazette.gov.ph/">Republic of the Philippines Official Gazette</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://op-proper.gov.ph/">Office of the President</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="http://legacy.senate.gov.ph/">Senate of the Philippines</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://www.congress.gov.ph/">House of the Representatives</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://sc.judiciary.gov.ph/">Supreme Court</a></li>
                <li><a style="font-family: Helvetica;" class="text-light"target="_blank" href="https://dilg.gov.ph/">Department of Interior &amp; Local Government</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://dfa.gov.ph/">Department of Foreign Affairs</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="http://www.tourism.gov.ph/general_information.aspx">Department of Tourism</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://pia.gov.ph/">Philippine Information Agency</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://dict.gov.ph/">Department of Information &amp; Communication Technology</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://data.gov.ph/">Open Data</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://www.foi.gov.ph/">Freedom of Information</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" target="_blank" href="https://fdpp.dilg.gov.ph/">Full Disclosure Portal</a></li>
            </ul>
        </div>
    <div class="col-sm-12 col-lg-4 text-light">
        <h5>Important Matters</h5>
                <ul>
               <!--  <li><a style="font-family: Helvetica;" class="text-light" href="">Terms and Conditions</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" href="">Privacy Policy</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" href="">Cultural Mapping</a></li>
                <li><a style="font-family: Helvetica;" class="text-light" href="">Legislations</a></li> -->
                </ul>
        <br>
            <div>
                <a href="#"><img height="100px" width="100px" src="{{ asset('resources/img/transparencyseal.png') }}"></a>
                <a href="#"><img height="100px" width="100px" src="{{ asset('resources/img/bontoclogonobg.png') }}"></a>
            </div>
        <br>
        <hr>
    </div>
    <div class="col-sm-12 col-lg-4">
        <h5>Contact Us</h5>
        <form action="javascript:void(0);">
            <div class="form-group">
                <label for="email" class="text-light">Email address</label>
                <input type="email" class="form-control" placeholder="bontoclgu@gmail.com">
            </div>
        <div class="form-group">
                <label for="email" class="text-light">Type your feedback here.</label>
                 <textarea rows="3" cols="55" class="form-control" style="resize: none;" data-gramm="false" wt-ignore-input="true">
                </textarea>
        </div>
            <button id="submit-button" type="submit" class="btn bg-light">Submit</button>
        </form><hr>
        <p style="color: white;">Contact Number:<br>+63-9566483040</p>
        <p style="color: white;" >Socials</p>
            <p>
                <a target="_blank" href="#"><img height="25" width="25" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-youtube-circle-512.png"></a>
                <a target="_blank" href="https://www.facebook.com/BontocPIO"><img height="25" width="25" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-facebook-circle-512.png"></a>
                <a target="_blank" href="#"><img height="25" width="25" src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/instagram-512.png"></a>
                <a target="_blank" href="#"><img height="25" width="25" src="https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/twitter-512.png"></a>
                
            </p>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">&copy;The Official Website of Municipality Government of Bontoc. All Right Reserved 2024.
        <p class="m-0 text-center">Developed by Southern Leyte State University - Bontoc Campus. Bontoc Information Technology Society Department (BITS) <br>
        <a target="_blank" href="https://www.facebook.com/guillermogaviola.s" style="color: blue;">&copy;Guillerms.</a>
        </p>
    </div>
    </div>
</div>
<!--End Footer Start -->

   <!-- Back to Top -->
    <a href="#" class="btn btn-info back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src="{{ asset('resources/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('resources/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('resources/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('resources/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('resources/js/main.js') }}"></script>
</body>
</html>
