<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\TaskInterface;
use App\Models\Task;
use Illuminate\Support\Facades\Input;

Class DbTaskRepository implements TaskInterface{

    private $model;

    public function __construct(Task $model)
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
        $attribute = Input::all();
        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $name = $file->getClientOriginalName();
            $fileEx = str_random(4) . '_' . $name;
            while (file_exists(config('app.group_image') . $fileEx)) {
                $fileEx = str_random(4) . '_' . $name;
            }
            $file->move(config('app.group_image'), $fileEx);
            $this->model->file = $name;
        } else {
            $this->model->file = '';
        }
        $attribute['file'] = $fileEx;

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
