<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceServer extends Model
{
    protected $fillable = ['name', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
