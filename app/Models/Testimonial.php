<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'boarding_house_id',
        'photo',
        'content',
        'rating',
    ];
    // membuat relasi ke boardinghose

    public function boardingHouse() {
        return $this->hasMany(BoardingHouse::class);
    }
}