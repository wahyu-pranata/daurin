<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = ["id"];


    public function orders()
    {
        return $this->belongsToMany(Order::class, "item_order");
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}