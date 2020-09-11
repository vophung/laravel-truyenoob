<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    protected $fillable = ['name','keyword','description'];

    public $timestamp = false;

    public function story(){
        return $this->belongsToMany('App\Models\Story');
    }
}
