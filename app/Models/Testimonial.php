<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;
    
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