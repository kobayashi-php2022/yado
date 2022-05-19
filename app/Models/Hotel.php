<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'tel', 'email'];

    // categoryテーブルと一対多の関係
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
