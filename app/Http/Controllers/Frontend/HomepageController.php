<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;


class HomepageController extends Controller
{
    public function index()
    {
    	$news = NewsandUpdates_news::all();
        return view('Frontend.Homepage.index', [
                'news' => $news
        ]);
    }
}