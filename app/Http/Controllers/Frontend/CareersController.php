<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers_jobvacancies;

class CareersController extends Controller
{
    public function indexjobvacancies()
    {
        $history = Careers_jobvacancies::first();
        return view('frontend.about.history.index',[
                'history' => $history
        ]);
    }
    
}