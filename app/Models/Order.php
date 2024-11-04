<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class, "item_order");
    }
}