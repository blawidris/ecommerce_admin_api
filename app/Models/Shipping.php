<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;


    protected $fillable = [
        'address',
        'customer_id',
        'city',
        'state',
        'country_code',
        'order_id',
        'shipping_method',
        'status',
        'track_code',
        'zipcode'

    ];


    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }


    public function country()
    {
        return $this->hasOne(Country::class, 'code', 'country_code');
    }
}