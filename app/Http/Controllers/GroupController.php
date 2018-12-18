<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquents\EloquentRepository;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SubjectInterface;
use App\Repositories\Interfaces\GroupInterface;
use App\Http\Requests\GroupFormRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class GroupController extends Controller
{
    private $group;
    protected $subject;

    public function __construct(GroupInterface $group, SubjectInterface $subject)
    {
        $this->group = $group;
        $this->subject = $subject;
        view()->share('subject', $subject);
    }

    public function getAllGroups()
    {
        $group = $this->group->getAll();

        return view('groups.index', compact('group'));
    }

    public function showCreateForm()
    {
        $subject = $this->subject->getAll();

        return view('groups.create', compact('subject'));
    }

    public function create(GroupFormRequest $request)
    {
        $attribute = $request->all();
        $group = $this->group->createGroup($attribute);

        return view('groups.create', compact('group'));
    }

    public function show($id)
    {
        $group = $this->group->getById($id);

        return view('groups.detail', compact('group', $group));
    }

    public function delete($id)
    {
        $this->group->delete($id);

        return redirect('group')->with('status', __('eng.del_success'));;
    }
}
