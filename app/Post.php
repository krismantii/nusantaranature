<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Presenters\DatePresenter;

class Post extends Model
{
    use DatePresenter;
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
