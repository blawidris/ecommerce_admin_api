<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customers extends Model
{
    use HasFactory;


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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function location(): HasOne
    {
        return $this->hasOne(CustomerAddresses::class, 'id', 'customer_id');
    }


    private function _getAddress(): HasOne
    {
        return $this->hasOne(CustomerAddresses::class, 'customer_id', 'user_id');
    }
}
