<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Users extends Model
{
    public function role(): BelongsTo{
        return $this->belongsTo(Roles::class);
    }

    public function profiles(): HasMany{
        return $this->hasMany(Profiles::class, 'user_id');
    }

    public function country(): BelongsTo{
        return $this->belongsTo(Countries::class, 'code', 'country_code');
    }
}
