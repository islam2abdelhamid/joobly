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

    public function discounts()
    {
        return $this->hasMany('App\Discount');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
}
