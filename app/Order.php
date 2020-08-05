<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{

    public function services(){

        return $this->belongsToMany(Service::class);

    }
}
