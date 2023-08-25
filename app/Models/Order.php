<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_code',
        'customer_id',
        'payment_id',
        'shipping_id',
        'status',
        'total_price'
    ];


    public function customer()
    {
        return $this->hasOne(Customers::class, 'id', 'customer_id');
    }

    public function location()
    {
        return $this->hasOne(CustomerAddresses::class, 'customer_id', 'customer_id');
    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class, 'id', 'shipping_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function histories()
    {
        return $this->hasMany(OrderHistory::class);
    }
}
