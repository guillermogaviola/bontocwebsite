<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
   // public function index()
   //  {
   //  	$news = NewsandUpdates_news::all();
   //      return view('frontend.homepage.index', [
   //              'news' => $news
   //      ]);
   //  }

	public function index()
    {
        return view('frontend.homepage.index');
    }
}
