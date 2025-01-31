<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SpecificationCategories extends Model
{
    public function specifications(): HasMany{
        return $this->hasMany(Specifications::class, 'specification_category_id');
    }
}
