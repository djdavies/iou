<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'content'];

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function tag() {
    	return $this->hasMany('App\Tag');
    }

    public function job() {
        return $this->hasOne('App\Job');
    }
}
