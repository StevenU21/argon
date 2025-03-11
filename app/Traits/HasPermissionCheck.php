<?php

namespace App\Traits;

use App\Exceptions\AuthorizationException;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait HasPermissionCheck
{
    public function before(User $user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function checkPermission(User $user, string $permission, ?Model $model = null): bool
    {
        if (!$user->hasPermissionTo($permission)) {
            throw new AuthorizationException();
        }

        if ($model && $user->id !== $model->user_id) {
            throw new AuthorizationException();
        }

        if ($user->hasRole('admin')) {
            return true;
        }

        return true;
    }
}
