<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**

   * The attributes that are mass assignable.

   *

   * @var array

   */

  protected $fillable = [

      'sortname', 'name', 'phonecode'

  ];
  public function state()
    {
    	return $this->hasMany('App\State');
    }
}
