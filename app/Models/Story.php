<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'stories';

    protected $fillable = ['name','content','status','source','keyword','description','image'];

    public function author(){
        return $this->belongsToMany('App\Models\Author');
    }

    public function category(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function chapter(){
        return $this->hasMany('App\Models\Chapter');
    }
}
