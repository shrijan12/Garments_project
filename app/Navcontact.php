<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navcontact extends Model
{
    protected $guarded=[];
    public function navigation()
    {
        return $this->belongsTo(Navigation::class);
    }
}
