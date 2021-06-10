<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Navigations()
    {
        return $this->hasMany(Navigation::class);
    }
    public function socials()
    {
        return $this->hasMany(Social::class);
    }
    public function footers()
    {
        return $this->hasMany(Footer::class);
    }
    public function banners()
    {
        return $this->hasMany(Banner::class);
    }
    public function homecontents()
    {
        return $this->hasMany(Banner::class);
    }
    public function categories()
    {
        return $this->hasMany(Categories::class);
    }
    public function abouts()
    {
        return $this->hasMany(About::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function queries(){
        return $this->hasMany(Query::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
