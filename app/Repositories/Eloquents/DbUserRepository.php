<?php

namespace App\Repositories\Eloquents;

use App\Models\GroupUser;
use App\Repositories\Interfaces\UserInterface;
use App\User;

Class DbUserRepository implements UserInterface
{

    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function member($id)
    {
        $groupUser = GroupUser::with('user.groupUser')->where('group_id', $id)->get()->toArray();

        return $groupUser;
    }
}
