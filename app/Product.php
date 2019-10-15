<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = "products";
    protected $guarded = [];

    public function Img (){

        return $this->morphMany('App\Pic', 'f','type');
    }

    public function Video (){

        return $this->hasOne('App\Video', 'f_id','id');
    }
}
