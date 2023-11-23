<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services_mayorsoffice;


class ServicesController extends Controller
{
    
     public function indexMayorsOffice()
    {
        $mayorsoffice = Services_mayorsoffice::first();
        return view('Frontend.Services.MayorsOffice.index',[
                'mayorsoffice' => $mayorsoffice
        ]);
    }

    //  public function indexCitizensCharter()

    // {
    //     return view('Frontend.Services.CitizensCharter.index');
    // }
    
    // public function indexBomwasa()
    // {
    // 	return view('Frontend.Services.Bomwasa.index');
    // }
}
