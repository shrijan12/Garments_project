<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navitem extends Model
{
    protected $guarded=[];
    public function navigation()
    {
        return $this->belongsTo(Navigation::class);
    }
}
