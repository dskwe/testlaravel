<?php
namespace App\Http\Controllers\Easy\Application;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Redirect, Input;

use App\Model\Easy\Comment;

class CommentsController extends Controller {

    public function store()
    {
        if (Comment::create(Input::all())) {
            return Redirect::back();
        } else {
            return Redirect::back()->withInput()->withErrors('评论发表失败！');
        }

    }

}