<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;
use App\Models\NewsandUpdates_upcomingupdates;


class NewsandUpdatesController extends Controller
{
    public function indexnews() 
    {
        $news = newsandupdates_news::all();
        return view('admin.newsandupdates.news.index',[
                'news' => $news
        ]);
    }

    public function addnews(Request $request) 
    {
            $formsave = new NewsandUpdates_news();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->status = $request->status;
            $formsave->date_posted = $request->date_posted;

            $target_dir = "resources/img/news/";
            $target_file = $target_dir . basename($_FILES["image_file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $formsave->save();

        return redirect()->back();
    }

    public function indexupcomingupdates() 
    {
        $upcomingupdates = NewsandUpdates_upcomingupdates::all();
        return view('admin.newsandupdates.upcomingupdates.index',[
                'upcomingupdates' => $upcomingupdates
        ]);
    }

    public function addupcomingupdates(Request $request) 
    {
        // if ($request->id) {
        //     $update = Careers_jobvacancies::find($request->id);
        //     $update->title = $request->title;
        //     $update->description = $request->description;
        //     $update->save();
        // } else {
            $formsave = new NewsandUpdates_upcomingupdates();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            
            $formsave->save();
        // }
        return redirect()->back();
    }
}