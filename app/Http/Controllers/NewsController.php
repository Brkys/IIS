<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function viewNews()
    {
    	$news = newsModel::all();
    	return view('news')->with('news', $news);
        
    }
}
