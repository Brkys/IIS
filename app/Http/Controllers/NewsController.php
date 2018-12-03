<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsModel;

class NewsController extends Controller
{
    public function viewNews()
    {
    	$news = newsModel::all();
    	return view('news')->with('news', $news);
        
    }
}
