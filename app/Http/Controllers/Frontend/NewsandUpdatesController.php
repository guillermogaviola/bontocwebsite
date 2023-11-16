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
        $news = NewsandUpdates_news::first();
            return view('Frontend.newsandupdates.news.index',[
                    'news' => $news
            ]);
     }


     public function indexUpcomingUpdates()
    {
        $upcomingupdates = NewsandUpdates_upcomingupdates::first();
            return view('Frontend.NewsandUpdates.UpcomingUpdates.index',[
                    'upcomingupdates' => $upcomingupdates
            ]);
     }
}
