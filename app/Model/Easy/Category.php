<?php

namespace App\Model\Easy;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Model\Easy\Article');
    }
}
