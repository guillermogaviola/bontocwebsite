<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transparency_municipalordinance;
use App\Models\Transparency_resolution;


class TransparencyController extends Controller
{

public function indexmunicipalordinances()
    {
        $municipalordinances = Transparency_municipalordinance::first();
            return view('Frontend.Transparency.MunicipalOrdinances.index',[
                    'municipalordinances' => $municipalordinances
            ]);
     }


public function indexresolutions()
    {
        $resolutions = Transparency_resolution::first();
            return view('Frontend.Transparency.Resolutions.index',[
                    'resolutions' => $resolutions
            ]);
     }
}
