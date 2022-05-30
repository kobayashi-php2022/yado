<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name', 
        'address',
        'tel',
        'email'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'Order');
    }
    protected $table = "users";
}
