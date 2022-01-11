<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'item_id',
    ];

    public function items()
    {
        return $this->belongsToMany(item::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
