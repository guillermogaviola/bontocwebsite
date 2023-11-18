<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\AboutController;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 
    
     //Homepage Routes
      Route::get('/', 'Frontend\HomepageController@index')->name('homepage');

     // AboutUs Routes
      Route::get('/about/history', 'Frontend\AboutController@indexHistory')->name('about.history');
      Route::get('/about/location', 'Frontend\AboutController@indexLocation')->name('about.location');
      Route::get('/about/missionandvision', 'Frontend\AboutController@indexMissionandVision')->name('about.missionandvision');
      Route::get('/about/municipalityseal', 'Frontend\AboutController@indexMunicipalitySeal')->name('about.municipalityseal');
      Route::get('/about/mandate', 'Frontend\AboutController@indexMandate')->name('about.mandate');
      Route::get('/about/servicepledge', 'Frontend\AboutController@indexServicePledge')->name('about.servicepledge');
      Route::get('/about/directory', 'Frontend\AboutController@indexDirectory')->name('about.directory');


     //News and Updates
     Route::get('/newsandupdates/news', 'Frontend\NewsandUpdatesController@indexNews')->name('newsandupdates.news');
     Route::get('/newsandupdates/upcomingupdates', 'Frontend\NewsandUpdatesController@indexUpcomingUpdates')->name('newsandupdates.upcomingupdates');

     //Services
     Route::get('/services/mayorsoffice', 'Frontend\ServicesController@indexMayorsOffice')->name('services.mayorsoffice');
     Route::get('/services/citizenscharter', 'Frontend\ServicesController@indexCitizensCharter')->name('services.citizenscharter');
     Route::get('/services/bomwasa','Frontend\ServicesController@indexBomwasa')->name('services.bomwasa');

     //Transparency
     Route::get('/transparency/municipalordinances', 'Frontend\TransparencyController@indexMunicipalOrdinances')->name('transparency.municipalordinances');
     Route::get('/transparency/resolutions', 'Frontend\TransparencyController@indexResolutions')->name('transparency.resolutions');

     //Tourism
     Route::get('/tourism/bontocattractions', 'Frontend\TourismController@indexBontocAttractions')->name('tourism.bontocattractions');


     //Careers
     Route::get('/careers/jobvacancies', 'Frontend\CareersController@indexJobVacancies')->name('careers.jobvacancies');

     //Others
     Route::get('/others/downloadableforms', 'Frontend\OthersController@indexDownloadableForms')->name('others.downloadableforms');
     Route::get('/others/gallery', 'Frontend\OthersController@indexGallery')->name('others.gallery');
     Route::get('/others/memorandom', 'Frontend\OthersController@indexMemorandom')->name('others.memorandom');


     Route::group(['middleware' => ['guest']], function() {
        //Logout Routes
            Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
         //Login Routes
            Route::get('/login', 'LoginController@show')->name('login.show');
            Route::post('/login', 'LoginController@login')->name('login.perform');

        //Register Routes
            Route::get('/register', 'RegisterController@show')->name('register.show');
            Route::post('/register', 'RegisterController@register')->name('register.perform');
     });

    Route::group(['middleware' => ['auth'],'prefix'=> 'admin'], function() {

        // Dashboard
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

        //Admin Dashboard About Us
        Route::get('/aboutus/history', 'AboutUsController@indexhistory')->name('admin.aboutus.history');
        Route::post('/aboutus/history/add', 'AboutUsController@addhistory')->name('admin.aboutus.history.add');
                 
        Route::get('/aboutus/location', 'AboutUsController@indexlocation')->name('admin.aboutus.location');
        Route::post('/aboutus/location/add', 'AboutUsController@addlocation')->name('admin.aboutus.location.add');
                 
        Route::get('/aboutus/missionandvision', 'AboutUsController@indexmissionandvision')->name('admin.aboutus.missionandvision');
        Route::post('/aboutus/missionandvision/add', 'AboutUsController@addmissionandvision')->name('admin.aboutus.missionandvision.add');
                 
        Route::get('/aboutus/municipalityseal', 'AboutUsController@indexmunicipalityseal')->name('admin.aboutus.municipalityseal');
        Route::post('/aboutus/municipalityseal/add', 'AboutUsController@addmunicipalityseal')->name('admin.aboutus.municipalityseal.add');

        Route::get('/aboutus/servicepledge', 'AboutUsController@indexservicepledge')->name('admin.aboutus.servicepledge');
        Route::post('/aboutus/servicepledge/add', 'AboutUsController@addservicepledge')->name('admin.aboutus.servicepledge.add');

        Route::get('/aboutus/mandate', 'AboutUsController@indexmandate')->name('admin.aboutus.mandate');
        Route::post('/aboutus/mandate/add', 'AboutUsController@addmandate')->name('admin.aboutus.mandate.add');

        Route::get('/aboutus/directory', 'AboutUsController@indexdirectory')->name('admin.aboutus.directory');
        Route::post('/aboutus/directory/add', 'AboutUsController@adddirectory')->name('admin.aboutus.directory.add');

        //Admin Dashboard Careers
        Route::get('/careers/jobvacancies', 'CareersController@indexjobvacancies')->name('admin.careers.jobvacancies');
        Route::post('/careers/jobvacancies/add', 'CareersController@addjobvacancies')->name('admin.careers.jobvacancies.add');

        //Admin Dashboard Services
        Route::get('/services/mayorsoffice', 'ServicesController@indexmayorsoffice')->name('admin.services.mayorsoffice');
        Route::post('/services/mayorsoffice/add', 'ServicesController@addmayorsoffice')->name('admin.services.mayorsoffice.add');

        //Admin Dashboard Tourism
        Route::get('/tourism/bontocattractions', 'TourismController@indexbontocattractions')->name('admin.tourism.bontocattractions');

        Route::post('/tourism/bontocattractions/add', 'TourismController@addbontocattractions')->name('admin.tourism.bontocattractions.add');

        //Admin News and Updates Others
        Route::get('/newsandupdates/news', 'NewsandUpdatesController@indexnews')->name('admin.newsandupdates.news');
        
        Route::post('/newsandupdates/news/add', 'NewsandUpdatesController@addnews')->name('admin.newsandupdates.news.add');

        Route::get('/newsandupdates/upcomingupdates', 'NewsandUpdatesController@indexupcomingupdates')->name('admin.newsandupdates.upcomingupdates');
        Route::post('/newsandupdates/upcomingupdates/add', 'NewsandUpdatesController@addupcomingupdates')->name('admin.newsandupdates.upcomingupdates.add');


        //Admin Dashboard Transparency
        Route::get('/transparency/municipalordinances', 'TransparencyController@indexmunicipalordinances')->name('admin.transparency.municipalordinances');
        Route::post('/transparency/municipalordinances/add', 'TransparencyController@addmunicipalordinances')->name('admin.transparency.municipalordinances.add');
        Route::get('/transparency/resolutions', 'TransparencyController@indexresolutions')->name('admin.transparency.resolutions');
        Route::post('/transparency/resolutions/add', 'TransparencyController@addresolutions')->name('admin.transparency.resolutions.add');


        //Admin Dashboard Others
        Route::get('/others/downloadableforms', 'OthersController@indexdownloadableforms')->name('admin.others.downloadableforms');
        Route::post('/others/downloadableforms/add', 'OthersController@adddownloadableforms')->name('admin.others.downloadableforms.add');

        Route::get('/others/gallery', 'OthersController@indexgallery')->name('admin.others.gallery');
        Route::post('/others/gallery/add', 'OthersController@addgallery')->name('admin.others.gallery.add');

        Route::get('/others/memorandom', 'OthersController@indexmemorandom')->name('admin.others.memorandom');
        Route::post('/others/memorandom/add', 'OthersController@addmemorandom')->name('admin.others.memorandom.add');
    });
});