<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
  public function comments()
  {
      return $this->hasMany('App\Comment');
  }
  public function tag()
  {
      return $this->belongsTo('App\Tag');
  }
}
