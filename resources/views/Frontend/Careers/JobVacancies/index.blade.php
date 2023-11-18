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



<div class="container mb-5">

<br>
<br>
<div class="row mb-3">
<?php
    foreach($jobvacancies as $job){
?>
        <div class="col-lg-4 mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <img src="../uploads/<?php echo $job->file; ?>" width="350px" height="200px">
                </div>
                <div class="col-lg-12">
                     <a href="#"><h5><?php echo $job->title; ?></h5></a>
                </div>
                <div class="col-lg-12">
                    <p style="text-align: justify;">
                        <?php
                            $str = $job->description;
                            if (strlen($str) > 30)
                            {
                                $str = substr($str, 0, 500) . '.';
                            }
                            echo $str;
                        ?>
                    </p>
                </div>
            </div>
        </div>


<?php
    }
?>
</div>
</div>
@endsection