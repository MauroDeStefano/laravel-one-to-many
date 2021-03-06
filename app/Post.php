<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category(){

        return $this->belongsTo('App\Category');
    }


    protected $fillable =  [
        'category_id','title','content'
    ];
}
