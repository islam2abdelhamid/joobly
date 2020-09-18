<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }


}
