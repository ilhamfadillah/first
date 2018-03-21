<?php


namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable

{

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'username', 'email', 'password', 'phone_number', 'role'

    ];

    protected $hidden = [
            'password', 'remember_token',
        ];

}
