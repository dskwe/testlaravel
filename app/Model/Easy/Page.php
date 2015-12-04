<?php

namespace App\Model\Easy;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function hasManyComments()
    {
        return $this->hasMany('App\Model\Easy\Comment', 'page_id', 'id');
    }
}
