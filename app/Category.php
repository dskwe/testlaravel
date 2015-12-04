<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    use SluggableTrait;
//
//    /**
//     * Create slug from title using 3rd party trait
//     *
//     * @var array
//     */
//    protected $sluggable = array(
//        'build_from' => 'title',
//        'save_to'    => 'slug',
//        'on_update'  => true
//    );

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['color', 'description', 'title'];
}
