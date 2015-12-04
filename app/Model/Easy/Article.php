<?php

namespace App\Model\Easy;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Model\Easy\Category');
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

}
