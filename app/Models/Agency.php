<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $guarded = ["id"];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
    public function items()
    {
        return $this->hasMany(Item::class);
    }
}