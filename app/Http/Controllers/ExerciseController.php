<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ExerciseInterface;
use App\Http\Requests\ExerciseFormRequest;
use App\Repositories\Interfaces\GroupInterface;

class ExerciseController extends Controller
{
    private $exercise;

    public function __construct(ExerciseInterface $exercise, GroupInterface $group)
    {
        $this->exercise = $exercise;
        view()->share('exercise', $exercise);
        $this->group = $group;
        view()->share('group', $group);
    }

    public function getAll()
    {
        $exercise = $this->exercise->getAll();

        return view('exercises.index', compact('exercise'));
    }

    public function showCreateForm($id)
    {
        $group = $this->group->getById($id);

        return view('exercises.create', compact('group'));
    }

    public function upload(ExerciseFormRequest $request)
    {
        $attribute = $request->all();
        $attribute['start_date'] = str_replace('.', '-', $request->input('start_date'));
        $attribute['end_date'] = str_replace('.', '-', $request->input('end_date'));
        $this->exercise->create($attribute);

        return redirect('exercise')->with('status', __('eng.upload_success'));
    }

    public function show($id)
    {
        $exercise = $this->exercise->getById($id);

        return view('exercises.detail', compact('exercise', $exercise));
    }

    public function delete($id)
    {
        $this->exercise->delete($id);

        return redirect('exercise')->with('status', __('eng.del_success'));;
    }

    public function getExercise($id)
    {
        $exercise = $this->exercise->getByGroup($id);

        return view('exercises.index', compact('exercise'));
    }
}
