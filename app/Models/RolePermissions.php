<?php

namespace App\Models;

use Couchbase\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RolePermissions extends Model
{
    public function role(): BelongsTo{
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function permission(): BelongsTo{
        return $this->belongsTo(Permissions::class, 'permission_id');
    }
}
