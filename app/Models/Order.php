<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    public function managers()
    {
        return $this->belongsTo(Manager::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
