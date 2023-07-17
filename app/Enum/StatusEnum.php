<?php

namespace App\Enum;


enum StatusEnum: string
{
    case PUBLISH = 'publish';
    case UNPUBLISH = 'unpublish';
    case SCHEDULED = 'scheduled';
    case DRAFT = 'draft';
}