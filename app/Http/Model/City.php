<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  public function states()
    {
      return $this->hasMany('App\State');
    }

  public function employee()
    {
      return $this->belongsTo('App\Country');
    }
}
