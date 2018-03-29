<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  /**

   * The attributes that are mass assignable.

   *

   * @var array

   */

  protected $fillable = [

      'name', 'country_id'

  ];
  public function country()
  {
    return $this->belongsTo('App\Country');
  }

  public function city()
  {
    return $this->hasMany('App\City');
  }
}
