<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'featured'
    ];

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }

    protected $dates = ['deleted_at'];
    
}
