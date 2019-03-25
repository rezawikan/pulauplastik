<?php

namespace App\Models;

use App\Models\OtherType;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'title', 'link', 'file', 'other_type_id'
    ];

    public function type()
    {
        return $this->belongsTo(OtherType::class,'other_type_id');
    }
}
