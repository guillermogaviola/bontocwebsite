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
        // if ($request->id) {
        //     $update = Careers_jobvacancies::find($request->id);
        //     $update->title = $request->title;
        //     $update->description = $request->description;
        //     $update->save();
        // } else {

            $formsave = new NewsandUpdates_news();
            $formsave->title = $request->title;
            $formsave->description = $request->description;
            $formsave->status = $request->status;
            $formsave->date_posted = $request->date_posted;

                $target_dir = "resources/img/news/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                  $check = getimagesize($_FILES["file"]["tmp_name"]);
                  if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                  } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                  }
                }

                // Check if file already exists
                if (file_exists($target_file)) {
                  echo "Sorry, file already exists.";
                  $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["file"]["size"] > 500000) {
                  echo "Sorry, your file is too large.";
                  $uploadOk = 0;
                }

                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                  echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
                        $formsave->image = $target_file;
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }
            $formsave->save();
        // }
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