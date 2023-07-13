<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDesigns extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(DesignCategory::class, 'category_id', 'id');
    }
    public function media()
    {
        return $this->hasMany(media::class, 'design_id');
    }
}
