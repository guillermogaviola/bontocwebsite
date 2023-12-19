<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomepageModel;

class HomeController extends Controller
{
	public function home()
    {
    	$data['getrecord'] = HomepageModel::get();
        return view('frontend.home.index', $data);
    }
}
