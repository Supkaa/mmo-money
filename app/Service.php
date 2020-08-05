<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $fillable = ['code', 'name', 'price', 'game_id'];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function servers()
    {
        return $this->hasMany(ServiceServer::class);
    }
}
