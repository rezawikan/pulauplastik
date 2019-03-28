<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{

  /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['title', 'address', 'date', 'additional_information', 'link'];

    protected $dates = ['date'];
}
