<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Determine whether the user can permanently delete the model.
     */
    public function modify(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}
