<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;
use App\Models\NewsandUpdates_upcomingupdates;


class NewsandUpdatesController extends Controller
{
    public function indexNews() 
    {
        $news = NewsandUpdates_news::first();
        return view('admin.newsandupdates.news.index',[
                'news' => $news
        ]);
    }

   public function addNews(Request $request) 
    {
        if ($request->id) {
            $update = NewsandUpdates_news::find($request->id);
            $update->title = $request->title;
            $update->description = $request->description;
            $update->save();
        } else {
            $formsave = new NewsandUpdates_news();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->save();
        }
        return redirect()->back();
    }

        public function indexUpcomingUpdates() 
    {
        $upcomingupdates = NewsandUpdates_upcomingupdates::first();
        return view('admin.newsandupdates.upcomingupdates.index',[
                'upcomingupdates' => $upcomingupdates
        ]);
    }

   public function addUpcomingUpdates(Request $request) 
    {
        if ($request->id) {
            $update = NewsandUpdates_upcomingupdates::find($request->id);
            $update->title = $request->title;
            $update->description = $request->description;
            $update->save();
        } else {
            $formsave = new NewsandUpdates_upcomingupdates();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->save();
        }
        return redirect()->back();
    }
}
