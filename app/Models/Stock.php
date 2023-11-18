<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory , HasUuids;

    protected $fillable = [
        'sku',
        'quantite',
        'date_expiration'
    ];


    public function products() {
        // un stock peut avoir plusieurs produits
        return $this->hasMany(Product::class);
    }
}
