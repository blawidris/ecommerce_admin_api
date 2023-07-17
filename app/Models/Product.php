<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sku',
        'price',
        'tags',
        'thumbnail',
        'description',
        'discount',
        'category_id',
        'quantity',
        'media',
        'discount',
        'variantions',
        'publish_date',
        'created_by',
        'updated_by',
        'deleted_by',
        'slug',
        'status'

    ];
}
