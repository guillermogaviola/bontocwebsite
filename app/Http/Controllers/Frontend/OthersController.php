<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others_downloadableforms;
use App\Models\Others_gallery;
use App\Models\Others_memorandum;

class OthersController extends Controller
{
    public function indexdownloadableforms()
    {
        $downloadableforms = Others_downloadableforms::first();
        return view('frontend.others.downloadableforms.index',[
                'downloadableforms' => $downloadableforms
        ]);
    }


    public function indexgallery()
    {
        $gallery = Others_gallery::first();
        return view('frontend.others.gallery.index',[
                'gallery' => $gallery
        ]);
    }


    public function indexmemorandum()
    {
        $memorandum = Others_memorandum::first();
        return view('frontend.others.memorandum.index',[
                'memorandum' => $memorandum
        ]);
    }

}
