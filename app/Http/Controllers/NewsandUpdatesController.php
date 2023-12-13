<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsandUpdates_news;
use Str;

class NewsandUpdatesController extends Controller
{

	public function addnews() 
    {
        return view('admin.newsandupdates.news.add');
    }

    public function insertnews(Request $request) 
    {
        $save = new NewsandUpdates_news;
    	$save->id 			    = $request->id;
    	$save->title 			= $request->title;
    	$save->description 		= $request->description;
    	$save->status 			= $request->status;
    	$save->date_posted 		= $request->date_posted;
    	$save->save();

    	$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["image_file"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["image_file"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
}

    		return redirect('admin/newsandupdates/news/add')->with('success', 'News successfully uploaded to news feature.');
    }

    public function listnews() 
    {
        return view('admin.newsandupdates.news.list');
    }

    public function editnews() 
    {
        return view('admin.newsandupdates.news.edit');
    }



}