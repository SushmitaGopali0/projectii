<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customization extends Model
{
    use HasFactory;
    public function designer()
    {
        return $this->belongsTo(User::class, 'designed_by', 'id');
    }
}
