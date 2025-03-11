<?php

namespace App\Policies;

use App\Models\Tag;
use App\Models\User;
use App\Traits\HasPermissionCheck;
use Illuminate\Auth\Access\HandlesAuthorization;

class TagPolicy
{
    use HandlesAuthorization, HasPermissionCheck;

    public function viewAny(User $user)
    {
        return $this->checkPermission($user, 'read tags');
    }

    public function view(User $user, Tag $tag)
    {
        return $this->checkPermission($user, 'read tags');
    }

    public function create(User $user)
    {
        return $this->checkPermission($user, 'create tags');
    }

    public function update(User $user, Tag $tag)
    {
        return $this->checkPermission($user, 'update tags');
    }

    public function destroy(User $user, Tag $tag)
    {
        return $this->checkPermission($user, 'destroy tags');
    }
}
