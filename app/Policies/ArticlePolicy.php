<?php

namespace App\Policies;

use App\Models\Article;
use App\Models\User;
use App\Traits\HasPermissionCheck;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization, HasPermissionCheck;

    public function viewAny(User $user)
    {
        return $this->checkPermission($user, 'read articles');
    }

    public function view(User $user, Article $article)
    {
        return $this->checkPermission($user, 'read articles');
    }

    public function create(User $user)
    {
        return $this->checkPermission($user, 'create articles');
    }

    public function update(User $user, Article $article)
    {
        return $this->checkPermission($user, 'update articles', $article);
    }

    public function destroy(User $user, Article $article)
    {
        return $this->checkPermission($user, 'destroy articles', $article);
    }
}
