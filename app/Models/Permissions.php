<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Permissions extends Model
{
    public function roles(): HasManyThrough{
        return $this->hasManyThrough(Roles::class, RolePermissions::class, 'permission_id', 'id', 'id', 'role_id');
    }
}
