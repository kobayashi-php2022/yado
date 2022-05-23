<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'prices'];
    
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
