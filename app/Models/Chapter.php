<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $table = 'chapters';

    protected $fillalbe = ['name','subname','content'];

    public function story(){
        return $this->belongsTo('App\Models\Story');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getTimeAgo($carbonObject) {
        return str_ireplace(
            [' seconds ago', ' second ago', ' minutes ago', ' minute ago', ' hours ago' , ' hour ago', ' days ago', ' day ago', ' weeks ago', ' week ago'],
            [' giây trước', ' giây trước', ' phút trước', ' phút trước', ' giờ trước', ' giờ trước', ' ngày trước', ' ngày trước', ' tháng trước', ' tháng trước'],
            $carbonObject->diffForHumans()
        );
    }
}
