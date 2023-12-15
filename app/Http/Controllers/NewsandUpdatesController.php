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

    public function editnews($id, Request $request) 
    {   
        // echo $id; die();
        $data = NewsandUpdates_news::find($id);
        return view('admin.newsandupdates.news.edit', [
                'news' => $data
        ]);
    }

    public function updatenews($id, Request $request)
    {
        // dd($request->all());
        $updateRecord                   =  NewsandUpdates_news::find($id);
        $updateRecord->title            = $request->title;

        if(!empty($request->file('image_file'))){

            if (!empty($updateRecord->image) && file_exists('uploads/'.$updateRecord->image)) {
                unlink('uploads/'.$updateRecord->image);
            }

            $file = $request->file('image_file');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->
                    getClientOriginalExtension();
            $file->move('uploads/',$filename);
            $updateRecord->image_file = $filename;

        }
        $updateRecord->description      = $request->description;
        $updateRecord->status           = $request->status;
        $updateRecord->date_posted      = $request->date_posted;
        $updateRecord->save();

        return redirect('admin/newsandupdates/news/list')->with('success', 'News feature successfully updated.');
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

    public function deletenews($id, Request $request) 
    {
        $deleteRecord = NewsandUpdates_news::find($id);

        if (!empty($deleteRecord->image) && file_exists('uploads/'.$deleteRecord->image)) {
            unlink('uploads/'.$deleteRecord->image);
        }

        $deleteRecord->delete();

        return redirect()->back()->with('error', 'News successfully deleted.');
    }
}

?>