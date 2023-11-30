<header class="app-header fixed-top">	   	            
<div class="app-header-inner">  
    <div class="container-fluid py-2">
        <div class="app-header-content"> 
            <div class="row justify-content-between align-items-center">
            	<div class="app-search-box col">
            		</div>
			            <div class="app-utilities col-auto">
				            <div class="app-utility-item app-user-dropdown dropdown">
					            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{asset('resources/img/bontoclogonobg.png')}}" alt="user profile">admin</a>
						        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
							<li><a class="dropdown-item" href="{{route('login.perform')}}">Log Out</a></li>
						</ul>
				    </div>
				</div>
        	</div>
        </div>
    </div>
</div>
<div id="app-sidepanel" class="app-sidepanel"> 
    <div id="sidepanel-drop" class="sidepanel-drop">
    </div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="#"><img class="logo-icon me-2" src="{{asset('resources/img/bontoclogonobg.png')}}" alt="logo"><span class="logo-text">Administrator</span></a>
        </div>  
<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
	<ul class="app-menu list-unstyled accordion" id="menu-accordion">
	    <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
			<span class="nav-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
			<path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
			<path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
			</span>
	        <span class="nav-link-text">About Us</span>
			<span class="submenu-arrow">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
			</svg>
			</span>
	    </a>
<div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
	<ul class="submenu-list list-unstyled">
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.history')}}">History</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.location')}}">Location</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.missionandvision')}}">Mission and Vision</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.municipalityseal')}}">Municipality Seal</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.servicepledge')}}">Service Pledge</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.mandate')}}">Mandate</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.aboutus.directory')}}">Directory</a></li>
	</ul>
</div>
<li class="nav-item has-submenu">
		<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" 	aria-controls="submenu-2">
			<span class="nav-icon">
			<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 24h-24v-2h.998l.009-6h21.993v6h1v2zm-3-6h-18v4h2v-2c0-.552.448-1 1-1s1 .448 1 1v2h2v-2c0-.552.448-1 1-1s1 .448 1 1v2h2v-2c0-.552.448-1 1-1s1 .448 1 1v2h2v-2c0-.552.448-1 1-1s1 .448 1 1v2h2v-4zm2-3h-21.991l.003-2h3.988v-3h2v3h2v-3h2v3h2v-3h2v3h2v-3h2v3h4v2zm-8-13h-3v1c2.966 0 6.158 1.979 7 6h-14c.547-3.78 3.638-5.827 6-6v-3h4v2zm.954 5c-.88-1.1-2.229-2-3.954-2-1.96 0-3.264.837-4.086 2h8.04z"/></svg>
			</span>
			<span class="nav-link-text">Careers</span>
			<span class="submenu-arrow">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
			</svg>
			</span>
		</a>
		<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
			<ul class="submenu-list list-unstyled">
			<li class="submenu-item"><a class="submenu-link" href="{{route('admin.careers.jobvacancies')}}">Job Vacancies</a></li>
			</ul>
		</div>
</li>
<li class="nav-item has-submenu">
	<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-3" aria-expanded="false" aria-controls="submenu-3">
		<span class="nav-icon">
		<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" fill-rule="evenodd" clip-rule="evenodd"><path serif:id="shape 30" d="M12 0l-1.793 1.958-2.368-1.236-1.007 2.444-2.657-.364-.096 2.639-2.625.552.823 2.514-2.277 1.406 1.651 2.088-1.652 2.087 2.278 1.405-.822 2.515 2.624.553.096 2.638 2.657-.364 1.007 2.445 2.368-1.236 1.793 1.955 1.795-1.955 2.367 1.236 1.007-2.445 2.658.364.097-2.638 2.624-.553-.824-2.515 2.276-1.405-1.651-2.087 1.651-2.088-2.276-1.406.824-2.514-2.624-.552-.097-2.639-2.658.364-1.007-2.444-2.367 1.236-1.795-1.958zm0 2.669l1.4 1.528 1.846-.963.787 1.907 2.066-.283.074 2.057 2.037.428-.641 1.952 1.76 1.087-1.278 1.62 1.278 1.616-1.76 1.086.641 1.955-2.037.429-.074 2.055-2.066-.283-.787 1.909-1.846-.964-1.4 1.527-1.399-1.527-1.846.964-.786-1.909-2.066.283-.073-2.055-2.038-.429.64-1.955-1.761-1.086 1.279-1.616-1.28-1.619 1.763-1.088-.64-1.952 2.037-.428.073-2.057 2.066.283.786-1.907 1.846.963 1.399-1.528z"/></svg>
		</span>
		<span class="nav-link-text">Transparency</span>
		<span class="submenu-arrow">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
		</span>
	</a>
		<div id="submenu-3" class="collapse submenu submenu-3" data-bs-parent="#menu-accordion">
			<ul class="submenu-list list-unstyled">
				<li class="submenu-item"><a class="submenu-link" href="{{route('admin.transparency.municipalordinances')}}">Municipal Ordinances</a></li>
				<li class="submenu-item"><a class="submenu-link" href="{{route('admin.transparency.resolutions')}}">Resolutions</a></li>  
			</ul>
		</div>
</li>
<li class="nav-item has-submenu">
	<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-5" aria-expanded="false" aria-controls="submenu-5">
	<span class="nav-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
			<path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
			<path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
			</svg>
	</span>
	<span class="nav-link-text">News and Updates</span>
		<span class="submenu-arrow">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
			</svg>
		</span>
	</a>
<div id="submenu-5" class="collapse submenu submenu-5" data-bs-parent="#menu-accordion">
	<ul class="submenu-list list-unstyled">
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.newsandupdates.news')}}">News</a></li>
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.newsandupdates.upcomingupdates')}}">Upcoming Updates</a></li>
	</ul>
</div>
</li>
<li class="nav-item has-submenu">
	<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-6" aria-expanded="false" aria-controls="submenu-6">
		<span class="nav-icon">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
		<path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
		</svg>
		</span>
		<span class="nav-link-text">Tourism</span>
		<span class="submenu-arrow">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
	</span>
	</a>
	<div id="submenu-6" class="collapse submenu submenu-6" data-bs-parent="#menu-accordion">
		<ul class="submenu-list list-unstyled">
		<li class="submenu-item"><a class="submenu-link" href="{{route('admin.tourism.bontocattractions')}}">Bontoc Attractions</a></li>  
		</ul>
	</div>
</li>
<li class="nav-item has-submenu">
	<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-7" aria-expanded="false" aria-controls="submenu-7">
		<span class="nav-icon">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
		</svg>
		</span>
		<span class="nav-link-text">Services</span>
		<span class="submenu-arrow">
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
		</svg>
		</span>
	</a>
<div id="submenu-7" class="collapse submenu submenu-7" data-bs-parent="#menu-accordion">
		<ul class="submenu-list list-unstyled">
			<li class="submenu-item"><a class="submenu-link" href="{{route('admin.services.mayorsoffice')}}">Mayor's Office</a></li>  
			<li class="submenu-item"><a class="submenu-link" href="signup.html">Citizen's Charter</a></li>
		</ul>
</div>
</li>
	<li class="nav-item has-submenu">
		<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-8" aria-expanded="false" aria-controls="submenu-8">
			<span class="nav-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
				<path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
				</svg>
			</span>
			<span class="nav-link-text">Others</span>
			<span class="submenu-arrow">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
				</svg>
			</span>
		</a>
		<div id="submenu-8" class="collapse submenu submenu-8" data-bs-parent="#menu-accordion">
			<ul class="submenu-list list-unstyled">
				<li class="submenu-item"><a class="submenu-link" href="{{route('admin.others.downloadableforms')}}">Downloadable Forms</a></li>
				<li class="submenu-item"><a class="submenu-link" href="{{route('admin.others.gallery')}}">Gallery</a></li> 
				<li class="submenu-item"><a class="submenu-link" href="{{route('admin.others.memorandom')}}">Memorandom</a></li>
			</ul>
		</div>
	</li>
</ul>
</nav>


<div class="app-sidepanel-footer">
	<nav class="app-nav app-nav-footer">
		<ul class="app-menu footer-menu list-unstyled">
	<li class="nav-item">
		<a class="nav-link" href="{{ route('login.perform')}}">
		<span class="nav-icon">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="					http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
					<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
			</svg>
			</span>
		<span class="nav-link-text">Login</span>
		</a>
	</li>
		<li class="nav-item">
			<a class="nav-link" href="{{route('register.perform')}}">
				<span class="nav-icon">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
						<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
					</svg>
				</span>
			<span class="nav-link-text">Register</span>
			</a>
		</li>
		</ul>
	</nav>
</div>
</div>
</div>
</header>