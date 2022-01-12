<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkoutdetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'orders_id',
        'item_id',
        'total',
    ];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->belongsToMany(item::class);
    }
}
