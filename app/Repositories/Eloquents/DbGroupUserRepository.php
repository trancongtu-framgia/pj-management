<?php

namespace App\Repositories\Eloquents;

use App\Models\GroupUser;
use App\Repositories\Interfaces\GroupUserInterface;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

Class DbGroupUserRepository implements GroupUserInterface
{

    private $model;

    public function __construct(GroupUser $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function join($id)
    {
        $groupUser = GroupUser::where('user_id', '=', Auth::id())->where('group_id', '=', $id)->first();
        if (isset($groupUser))
        {
            return true;
        }
        else {
            $groupUser = new GroupUser;
            $groupUser->user_id = Auth::id();
            $groupUser->group_id = $id;

            return $groupUser->save();
        }
    }
}
