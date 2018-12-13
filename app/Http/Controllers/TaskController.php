<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\TaskInterface;
use App\Http\Requests\TaskFormRequest;

class TaskController extends Controller
{
    private $task;

    public function __construct(TaskInterface $task)
    {
        $this->task = $task;
        view()->share('task', $task);
    }

    public function getAll()
    {
        $task = $this->task->getAll();

        return view('tasks.index', compact('task'));
    }

    public function showUploadForm()
    {
        return view('tasks.create');
    }

    public function upload(TaskFormRequest $request)
    {
        $attribute = $request->all();
        $task = $this->task->create($attribute);

        return view('tasks.create')->with(['task' => $task]);
    }
}
