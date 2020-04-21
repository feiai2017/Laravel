<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BingliSmalls extends Model
{
    //
    public function getDetails() {
        return $this->belongsToMany('App\Models\BingliDetails', 'bingliDetail_bingliSmall');
    }
}
