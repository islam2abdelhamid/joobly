<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = [
        'name', 'description', 'image',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function members()
    {
        return $this->hasMany('App\Team');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
