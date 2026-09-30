<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'slug',
    ];

    // menyatakan bisa mengambil cateogry untuk banyak boarding hoase, one to many

    public function boardingHouses()
    {
        return $this->hasMany(BoardingHouse::class);
    }
}