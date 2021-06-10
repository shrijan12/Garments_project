<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function NavigationPhotos()
    {
        return $this->hasMany(NavigationImage::class);
    }
    public function Socials()
    {
        return $this->hasMany(Social::class);
    }
    public function navitems()
    {
        return $this->hasMany(Navitem::class);
    }
    public function navcontact()
    {
        return $this->hasMany(Navcontact::class);
    }
}
