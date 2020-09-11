<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','keyword','description'];

    public $timestamp = false;

    public function story(){
        return $this->belongsToMany('App\Models\Story');
    }
}
