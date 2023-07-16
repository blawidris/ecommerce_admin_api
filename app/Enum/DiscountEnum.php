<?php

namespace App\Enum;

enum DiscountEnum:string
{
    case NO_DISCOUNT = 'No discount';
    case PERCENTAGE = 'percentage';
    case FIXED_PRICE = 'fixed  price';

}