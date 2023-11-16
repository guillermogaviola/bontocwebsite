<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function indexBontocAttractions()
    {
        return view('Frontend.Tourism.BontocAttractions.index');
    }
}
