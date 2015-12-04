<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //use SluggableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'content', 'description', 'published_at', 'title'];

    /**
     * Carbon instance fields
     *
     * @var array
     */
    protected $dates = ['published_at'];
}
