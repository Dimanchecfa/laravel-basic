<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory , HasUuids;

    protected $fillable = [
        'nom',
        'description',
        'image',
        'stock_id'
    ];

    public function stock() {
        // un produit appartient à un stock
        return $this->belongsTo(Stock::class);
    }
}
