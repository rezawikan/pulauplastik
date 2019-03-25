<?php

namespace App\Models;

use App\Models\Other;
use Illuminate\Database\Eloquent\Model;

class OtherType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'type'
  ];

    public function others()
    {
        return $this->hasMany(Other::class,'other_type_id','id');
    }
}
