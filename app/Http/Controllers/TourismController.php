<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourismController extends Controller
{
     public function indexbontocattractions() 
    {
        return view('admin.tourism.bontocattractions.index');
    }
}
