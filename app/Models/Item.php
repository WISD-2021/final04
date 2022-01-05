<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'money',
        'image',
    ];

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function managers()
    {
        return $this->belongsTo(Manager::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function types()
    {
        return $this->belongsTo(User::class);
    }
}
