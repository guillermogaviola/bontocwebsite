<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Careers_jobvacancies;

class CareersController extends Controller
{
   public function indexJobVacancies() 
    {
        $jobvacancies = Careers_jobvacancies::all();
        return view('admin.careers.jobvacancies.index',[
                'jobvacancies' => $jobvacancies
        ]);
    }

   public function addJobVacancies(Request $request) 
    {
        // if ($request->id) {
        //     $update = Careers_jobvacancies::find($request->id);
        //     $update->title = $request->title;
        //     $update->description = $request->description;
        //     $update->save();
        // } else {
            $formsave = new Careers_jobvacancies();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $file = $request->file('file');
            $filename = $file->hashName();
            $location = 'uploads';
            $file->move($location,$filename);
            $formsave->file = $filename;
            $formsave->save();
        // }
        return redirect()->back();
    }
}