<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;
use App\Models\NewsandUpdates_upcomingupdates;


class NewsandUpdatesController extends Controller
{
    public function indexNews()
    {
        $news = NewsandUpdates_news::all();
            return view('Frontend.NewsandUpdates.News.index',[
                    'news' => $news
            ]);
    }


    public function indexUpcomingUpdates()
    {
        $upcomingupdates = NewsandUpdates_upcomingupdates::all();
            return view('Frontend.NewsandUpdates.UpcomingUpdates.index',[
                    'upcomingupdates' => $upcomingupdates
            ]);
    }
}
