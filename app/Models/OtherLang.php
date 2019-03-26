<?php

namespace App\Models;

use App\Models\Other;
use Illuminate\Database\Eloquent\Model;

class OtherLang extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name'
    ];

    public function others()
    {
        return $this->hasMany(Other::class, 'other_lang_id', 'id');
    }
}
