<style>

.nav-link{
    color:white !important;
}

.video-container {
    position: relative;
    padding-bottom: 50%;
    height: 0;
    width: 100%;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>


<div class="row">
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-success navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-between px-0 px-lg-3 collapse show bg-success" id="navbarCollapse" style="">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('home')}}" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('about.location')}}" class="dropdown-item">Location</a>
                            <a href="{{route('about.history')}}" class="dropdown-item">History</a>
                            <a href="{{route('about.missionandvision')}}" class="dropdown-item">Mission and Vision</a>
                            <a href="{{route('about.municipalityseal')}}" class="dropdown-item">Municipality Seal</a>
                            <a href="{{route('about.mandate')}}" class="dropdown-item">Mandate</a>
                            <a href="{{route('about.servicepledge')}}" class="dropdown-item">Service Pledge</a>
                            <a href="{{route('about.directory')}}" class="dropdown-item">Directory</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News and Updates</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('newsandupdates.news')}}" class="dropdown-item">News</a>
                            <a href="{{route('newsandupdates.upcomingupdates')}}" class="dropdown-item">Upcoming Updates</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('services.mayorsoffice')}}" class="dropdown-item">Mayor's Office</a>
                            <a href="{{route('services.citizenscharter')}}" class="dropdown-item">Citizen's Charter</a>
                            <a class="dropdown-item" target="_black" href="https://bomwasa.bitsorg.info/billinquiry">BOMWASA</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Transparency</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('transparency.municipalordinances')}}" class="dropdown-item">Municipal Ordinances</a>
                            <a href="{{route('transparency.resolutions')}}" class="dropdown-item">Resolutions</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tourism</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('tourism.bontocattractions')}}" class="dropdown-item">Bontoc Attractions</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Careers</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('careers.jobvacancies')}}" class="dropdown-item">Job Vacancies</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Others</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('others.downloadableforms')}}" class="dropdown-item">Downloadable Forms</a>
                            <a href="{{route('others.gallery')}}" class="dropdown-item">Gallery</a>
                            <a href="{{route('others.memorandom')}}" class="dropdown-item">Memorandom</a>
                        </div>
                    </div>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 150px;">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="input-group-text text-success"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>