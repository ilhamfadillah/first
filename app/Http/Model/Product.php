<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model

{
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'price', 'stock', 'photo', 'category_id', 'category_name'

    ];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
