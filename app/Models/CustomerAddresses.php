<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddresses extends Model
{
    use HasFactory;


    protected $table = 'customer_addresses';

    protected $fillable =  [
        'address1',
        'city',
        'state',
        'zipcode',
        'country_code',
        'customer_id',
        'is_shipping'
    ];


    // public function customer()
    // {
    //     return $this->belongsTo(Customers::class);
    // }


    public function country()
    {
        return $this->hasOne(Country::class, 'code', 'country_code');
    }
}
