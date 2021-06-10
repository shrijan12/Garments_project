<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $guarded=[];
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
