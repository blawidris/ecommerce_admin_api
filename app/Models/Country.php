<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $fillable = ['code', 'name', 'states'];
    public $timestamps = false;


    public function customerAddress()
    {
        return $this->belongsTo(customerAddress::class, 'country_code', 'code');
    }
}