<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    public function reserves()
    {
        return $this->belongsTo(Reserve::class);
    }

    public function managers()
    {
        return $this->belongsTo(Manager::class);
    }
}
