<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\ExerciseInterface;
use App\Models\Exercise;
use Illuminate\Support\Facades\Input;

Class DbExerciseRepository implements ExerciseInterface{

    private $model;

    public function __construct(Exercise $model)
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

    public function create(array $attribute)
    {
        return $this->model->create($attribute);
    }

    public function update($id, array $attribute)
    {
        $class = $this->model->findOrFail($id);
        $class = $this->model->update($attribute);

        return $class;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();

        return true;
    }
}
