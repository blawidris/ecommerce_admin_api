<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }


    public function country()
    {
        return $this->hasOne(Country::class, 'code', 'country_code');
    }
}
