<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded=[];

    public function About()
    {
        return $this->belongsTo(About::class);
    }
}
