<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'status',
        'user_id'
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function rating()
    {
        return $this->belongsTo(Rating::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function customerAddress()
    {
        return $this->hasOne(CustomerAddresses::class, 'customer_id');
    }


    public function getAddress()
    {
        return $this->hasOne(CustomerAddresses::class, 'customer_id');
    }
}