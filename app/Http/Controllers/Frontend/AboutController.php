<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus_history;
use App\Models\Aboutus_location;
use App\Models\Aboutus_missionandvision;
use App\Models\Aboutus_municipalityseal;
use App\Models\Aboutus_servicepledge;
use App\Models\Aboutus_mandate;
use App\Models\Aboutus_directory;

class AboutController extends Controller
{
    public function indexHistory()
    {
        $history = Aboutus_history::first();
        return view('Frontend.About.History.index',[
                'history' => $history
        ]);
    }

    public function indexLocation()
    {
        $location = Aboutus_location::first();
        return view('Frontend.About.Location.index',[
                'location' => $location
        ]);
    }


    public function indexMissionandVision()
    {
        $missionandvision = Aboutus_missionandvision::first();
        return view('Frontend.About.MissionandVision.index',[
                'missionandvision' => $missionandvision
        ]);
    }

     public function indexMunicipalitySeal()
    {
       $municipalityseal = Aboutus_municipalityseal::first();
        return view('Frontend.About.MunicipalitySeal.index',[
                'municipalityseal' => $municipalityseal
        ]);
    }

    public function indexMandate() 
    {
        $mandate = Aboutus_mandate::first();
        return view('Frontend.About.Mandate.index',[
                'mandate' => $mandate
        ]);
    }

    public function indexServicePledge() 
    {
        $servicepledge = Aboutus_servicepledge::first();
        return view('Frontend.About.Servicepledge.index',[
                'servicepledge' => $servicepledge
        ]);
    }

     public function indexDirectory() 
    {
       $directory = Aboutus_directory::first();
        return view('Frontend.About.Directory.index',[
                'directory' => $directory
        ]);
    }
}
