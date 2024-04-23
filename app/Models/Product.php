<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = false;

    const STATUS_AVAILABLE = 1;
    const STATUS_UNAVAILABLE = 2;
    const STATUS_STOCK = 3;

    const STATUSES = [
        self::STATUS_AVAILABLE => 'Есть',
        self::STATUS_UNAVAILABLE => 'Нет',
        self::STATUS_STOCK => 'На складе',
    ];
}
