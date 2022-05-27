<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'address', 'tel', 'email', 'image'];

    // categoryテーブルと一対多の関係
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // planテーブルと一対多の関係
    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class, 'hotels_id');
    }

    //orderテーブル
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'hotels_id');
    }

    // comentsテーブルと一対多の関係
    public function comments() 
    { 
        return $this->hasMany(Comment::class);
    }
}
