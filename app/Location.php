<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table = "location";
    public $primarKey = "location_id";

    public function location_manager(){
        return $this->belongsTo('App\LocationManager');
    }
}
