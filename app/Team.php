<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $fillable = [
        'image',
    ];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

}
