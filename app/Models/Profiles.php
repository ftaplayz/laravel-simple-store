<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profiles extends Model
{
    public function user():BelongsTo{
        return $this->belongsTo(Users::class, 'id', 'user_id');
    }

    public function country(): BelongsTo{
        return $this->belongsTo(Countries::class, 'code', 'country_code');
    }
}
