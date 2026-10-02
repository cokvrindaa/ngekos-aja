<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

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