<?php

namespace App\Http\Controllers\Easy\Application;

use App\Http\Controllers\Controller;
use App\Model\Easy\Page;

class PagesController extends Controller
{


    public function index()
    {
        return view('Easy.application.pages.index')->withPages(Page::latest()->get());
    }
    /**
     * Show the page
     *
     * @param Page $page
     * @return Response
     */
    public function show($id)
    {
//        $page=Page::find($id);
//        return view('easy.Application.pages.show', compact('page'));
        return view('easy.Application.pages.show')->withPage(Page::findOrFail($id));
    }
}
