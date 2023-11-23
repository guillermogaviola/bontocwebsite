<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourism_bontocattractions;


class TourismController extends Controller
{
    public function indexBontocAttractions()
    {
        $bontocattractions = Tourism_bontocattractions::all();
            return view('Frontend.Tourism.BontocAttractions.index',[
                    'bontocattractions' => $bontocattractions
            ]);
    }
}
