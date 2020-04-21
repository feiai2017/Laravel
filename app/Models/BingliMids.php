<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BingliMids extends Model
{
    //
    public function getSmalls(){
        return $this->belongsToMany('App\Models\BingliSmalls', 'bingliSmall_bingliMid');
    }
}
