<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Roles extends Model
{
    public function users(): HasMany{
        return $this->hasMany(Users::class, 'role_id');
    }

    public function permissions(): HasManyThrough{
        return $this->hasManyThrough(Permissions::class, RolePermissions::class, 'role_id', 'id', 'id', 'permission_id');
    }
}
