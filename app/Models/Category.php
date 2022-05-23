<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // hotelsテーブルと一対多の関係
    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class); 
    }
}
