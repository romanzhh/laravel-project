<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'price',
        'discount',
        'qty',
        'is_own_production',
        'is_active'
    ];

    public function scopeActive()
    {
        $this->where('is_active', true);
    }
}
