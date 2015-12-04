<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Page;

class HomeController extends Controller
{
    /**
     * Show the application homepage to the user.
     *
     * @return Response
     */
    public function index()
    {
        //$articles = $this->language->articles()->published()->orderBy('published_at', 'desc')->paginate(5);
        //return view('application.home.index', compact('articles'));
        return view('Easy.application.home')->withPages(Page::all());
    }
}
