<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_date',
        'total_price',
        'shipping_address',
        'status',
        'payment_method',
        'shipping_method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
