<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interfaces\SubjectInterface;
use App\Models\Subject;

class DbSubjectRepository implements SubjectInterface
{
    private $model;
    public function __construct(Subject $subject)
    {
        $this->model = $subject;
    }

    public function getAllSubjects()
    {
        return $this->model->all();
    }

    public function getAll()
    {
        return $this->model->pluck('name','id')->all();
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
        $subject = $this->model->findOrFail($id);
        $subject = $this->model->update($attribute);

        return $subject;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();

        return true;
    }

    public function show($id)
    {
        $this->getById($id)->first();
    }
}
