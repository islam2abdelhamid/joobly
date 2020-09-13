<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable  
{
    protected $fillable = [
        'managerName', 'companyName', 'mobile',
        'landTel', 'email', 'country',
        'city', 'address', 'category','password',
        'description', 'logo'
    ];

    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
}
