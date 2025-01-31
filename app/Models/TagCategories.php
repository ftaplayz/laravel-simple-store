<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TagCategories extends Model
{
    public function tags(): HasMany{
        return $this->hasMany(Tags::class, 'tag_category_id');
    }
}
