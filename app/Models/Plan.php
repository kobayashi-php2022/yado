<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'content', 'price', 'rooms_num', 'hotels_id'];
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
