<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
