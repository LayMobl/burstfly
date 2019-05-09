<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function works()
    {
        return $this->hasMany('App\Work');
    }
}
