<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['code', 'name', 'description', 'image'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
