<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers_jobvacancies;

class CareersController extends Controller
{
   public function indexJobVacancies()
    {
        $jobvacancies = Careers_jobvacancies::all();
        return view('Frontend.Careers.JobVacancies.index',[
                'jobvacancies' => $jobvacancies
        ]);
    }
    
}