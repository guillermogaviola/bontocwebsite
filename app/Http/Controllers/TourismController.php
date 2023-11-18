<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourism_bontocattractions;

class TourismController extends Controller
{
    public function indexBontocAttractions() 
    {
        $bontocattractions = Tourism_bontocattractions::all();
        return view('admin.tourism.bontocattractions.index',[
                'bontocattractions' => $bontocattractions
        ]);
    }

    public function addBontocAttractions(Request $request) 
    {
        // if ($request->id) {
        //     $update = Careers_jobvacancies::find($request->id);
        //     $update->title = $request->title;
        //     $update->description = $request->description;
        //     $update->save();
        // } else {
            $formsave = new Tourism_bontocattractions();
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
