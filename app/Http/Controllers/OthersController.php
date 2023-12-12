<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Others_downloadableforms;
use App\Models\Others_gallery;
use App\Models\Others_memorandum;

class OthersController extends Controller
{
    public function indexdownloadableforms() 
    {
        $downloadableforms = Others_downloadableforms::first();
        return view('admin.others.downloadableforms.index',[
                'downloadableforms' => $downloadableforms
        ]);
    }

   public function adddownloadableforms(Request $request) 
    {
        if ($request->id) {
            $update = Others_downloadableforms::find($request->id);
            $update->title = $request->title;
            $update->description = $request->description;
            $update->save();
        } else {
            $formsave = new Others_downloadableforms();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->save();
        }
        return redirect()->back();
    }

    public function indexgallery() 
    {
        $gallery = Others_gallery::first();
        return view('admin.others.gallery.index',[
                'gallery' => $gallery
        ]);
    }

   public function addgallery(Request $request) 
    {
        if ($request->id) {
            $update = Others_gallery::find($request->id);
            $update->title = $request->title;
            $update->description = $request->description;
            $update->save();
        } else {
            $formsave = new Others_gallery();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->save();
        }
        return redirect()->back();
    }

   public function indexmemorandum() 
    {
        $memorandum = Others_memorandum::first();
        return view('admin.others.memorandum.index',[
                'memorandum' => $memorandum
        ]);
    }

   public function addmemorandum(Request $request) 
    {
        if ($request->id) {
            $update = Others_memorandum::find($request->id);
            $update->title = $request->title;
            $update->description = $request->description;
            
            $update->save();
        } else {
            $formsave = new Others_memorandum();
            $formsave->title = $request->title;
            $formsave->description = $request->description;

            $formsave->save();
        }
        return redirect()->back();
    }
}
