<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers_jobvacancies;

class CareersController extends Controller
{
    public function indexJobVacancies()
    {
        $history = Careers_jobvacancies::first();
        return view('Frontend.About.History.index',[
                'history' => $history
        ]);
    }
    
}