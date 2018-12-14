<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ExerciseInterface;
use App\Http\Requests\ExerciseFormRequest;
use Illuminate\Support\Carbon;

class ExerciseController extends Controller
{
    private $exercise;

    public function __construct(ExerciseInterface $exercise)
    {
        $this->exercise = $exercise;
        view()->share('exercise', $exercise);
    }

    public function getAll()
    {
        $exercise = $this->exercise->getAll();

        return view('exercises.index', compact('exercise'));
    }

    public function showCreateForm()
    {
        $exercise = $this->exercise->getAll();

        return view('exercises.create', compact('exercise'));
    }

    public function create(ExerciseFormRequest $request)
    {
        $attribute = $request->all();
        $attribute['start_date'] = str_replace('.', '-', $request->input('start_date'));
        $attribute['end_date'] = str_replace('.', '-', $request->input('end_date'));
        $exercise = $this->exercise->create($attribute);

        return view('exercises.create', compact('exercise'));
    }

    public function show($id)
    {
        $exercise = $this->exercise->getById($id);

        return view('exercises.detail', compact('exercise', $exercise));
    }
}
