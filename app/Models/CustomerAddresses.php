<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddresses extends Model
{
    use HasFactory;


    protected $table = 'customer_addresses';


    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
