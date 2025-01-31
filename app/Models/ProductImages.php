<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImages extends Model
{
    public function product():BelongsTo{
        return $this->belongsTo(Products::class, 'id', 'product_id');
    }
}
