<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_of_delivery_note',
        'customer_id',
        'user_id',
        'total',
        'delivery_price',
        'note',
    ];
}
