<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Others_downloadableforms;
use App\Models\Others_gallery;
use App\Models\Others_memorandom;

class OthersController extends Controller
{
    public function indexdownloadableforms()
    {
        $downloadableforms = Others_downloadableforms::first();
        return view('Frontend.Others.downloadableforms.index',[
                'downloadableforms' => $downloadableforms
        ]);
    }


    public function indexgallery()
    {
        $gallery = Others_gallery::first();
        return view('Frontend.Others.gallery.index',[
                'gallery' => $gallery
        ]);
    }


    public function indexmemorandom()
    {
        $memorandom = Others_memorandom::first();
        return view('Frontend.Others.memorandom.index',[
                'memorandom' => $memorandom
        ]);
    }

}
