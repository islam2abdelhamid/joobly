<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{

    protected $fillable = [
        'name', 'color',
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}
