<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'person',
    ];

    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    public function tables()
    {
        return $this->hasMany(Table::class);
    }
}
