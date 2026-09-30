<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'boarding_house_id',
        'image',
        'name',
        'description'
    ];

    // relasi ke boarding house
    public function boardingHouse() {
        $this->belongsTo(boardingHouse::class);
    }
}