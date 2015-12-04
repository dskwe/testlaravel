<?php

namespace App\Http\Controllers\Easy\Application;

use App\Http\Controllers\Controller;
use App\Model\Easy\Page;
use App\Model\Easy\Article;

class HomeController extends Controller
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        //return view('Easy.application.home')->withPages(Page::latest()->get());
        return view('Easy.application.home')->withArticles(Article::latest()->get());
    }
}
