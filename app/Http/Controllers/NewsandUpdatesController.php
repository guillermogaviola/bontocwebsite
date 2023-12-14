<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;
use Str;

class NewsandUpdatesController extends Controller
{

	public function addnews(Request $request) 
    {
        $data['getrecord'] = NewsandUpdates_news::all();
        return view('admin.newsandupdates.news.add', $data);
    }

    public function listnews() 
    {   
        $data = NewsandUpdates_news::paginate(10);
        return view('admin.newsandupdates.news.list', [
                'news' => $data
        ]);
    }

    

    public function insertnews(Request $request) 
    {
        // dd($request->all());

        $insertRecord                   = new NewsandUpdates_news;
    	$insertRecord->id 			    = $request->id;
    	$insertRecord->title 			= $request->title;
    	$insertRecord->description 		= $request->description;
    	$insertRecord->status 			= $request->status;
    	$insertRecord->date_posted 		= $request->date_posted;

        if(! empty($request->file('image_file'))){
            $file = $request->file('image_file');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->
                    getClientOriginalExtension();
            $file->move('uploads/',$filename);
            $insertRecord->image_file = $filename;

        }

        $insertRecord->save();

        return redirect('admin/newsandupdates/news/list')->with('success', 'News successfully uploaded to news feature.');
    }
}