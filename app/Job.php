<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['post_id', 'user_id', 'accepted', 'completed'];

    public function post() {
        return $this->belongsTo('App\Post');
    }
}
