<?php

namespace App\Model\Easy;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['nickname', 'email', 'website', 'content', 'page_id'];
}
