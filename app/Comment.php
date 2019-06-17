<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function work()
 {
   return $this->belongsTo('App\Work');
 }

 public function user()
{
  return $this->belongsTo('App\User');
}
}
