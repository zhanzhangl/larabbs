<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function saving(User $user)
    {
        // 这样写扩展性更高，只有空的时候才指定默认头像
        if (empty($user->avatar)) {
            $user->avatar = 'https://www.zhanzhangl.com/wp-content/uploads/2024/04/cropped-2024041014585673.jpg';
        }
    }

    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }
}
