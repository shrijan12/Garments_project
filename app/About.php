<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function services(){
        return $this->hasMany(Service::class);
    }
    public function partners()
    {
        return $this->hasMany(Partner::class);
    }
}
